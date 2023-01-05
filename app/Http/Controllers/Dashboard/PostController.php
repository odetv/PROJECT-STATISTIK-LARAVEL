<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\PostExport;
use App\Imports\PostImport;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class PostController extends Controller
{
    public function index()
    {
        $total      = Post::count();
        $mean       = number_format(Post::avg('description'), 1, ',');
        $min        = Post::min('description');
        $max        = Post::max('description');

        $data       = [
            'total' => $total, 'mean' => $mean, 'min' => $min, 'max' => $max
        ];
        return view('dashboard.posts.index', compact('data'));
        // return view('dashboard.posts.index');
    }

    public function create()
    {
        $this->authorize('create', Post::class);

        return view('dashboard.posts.create');
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('dashboard.posts.edit', [
            'post' => $post
        ]);
    }

    public function import(Request $request){
        $request->validate([
            'file' => 'required',
        ]);
        Excel::import(new PostImport, request()->file('file'));
        return back()->withStatus('Import Data Berhasil!');
    }

    public function exportExcel(){
        return Excel::download(new PostExport, 'Data Statistik.xlsx');
    }

    public function exportCsv(){
        return Excel::download(new PostExport, 'Data Statistik.csv');
    }
}
