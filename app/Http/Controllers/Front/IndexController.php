<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
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
        return view('index', compact('data'));
        // return view('index');
    }
}
