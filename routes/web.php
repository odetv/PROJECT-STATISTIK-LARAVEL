<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Dashboard\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
// Route::get('/', function () {
//     $total      = Post::count();
//     $mean       = number_format(Post::avg('description'), 1, ',');
//     $min        = Post::min('description');
//     $max        = Post::max('description');

//     $data       = [
//         'total' => $total, 'mean' => $mean, 'min' => $min, 'max' => $max
//     ];
//     return view('index', compact('data'));
// })->name('index');

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'auth'
], function () {

    Route::get('/', function () {
        $total      = Post::count();
        $mean       = number_format(Post::avg('description'), 1, ',');
        $min        = Post::min('description');
        $max        = Post::max('description');

        $data       = [
            'total' => $total, 'mean' => $mean, 'min' => $min, 'max' => $max
        ];
        return view('dashboard', compact('data'));
    })->name('dashboard');

    Route::resource('posts', PostController::class)->only(['index', 'create', 'edit']);
});

require __DIR__ . '/auth.php';
