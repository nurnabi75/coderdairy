<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('media',MediaController::class);
    Route::resource('problem',ProblemController::class);
    Route::resource('solution',SolutionController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('tag',TagController::class);
    Route::resource('activity',ActivityController::class);

    Route::post('ajax/tag/store',function(Request $request){

        try {
           $tag = Tag::create([
                'name'=>$request->name,
                'slug'=>Str::slug($request->name),
                'user_id'=>Auth::id()
            ]);
            return response()->json(['tag'=>$tag,'success'=>'Tag Created']);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json(['error'=>$th->getMessage()]);

        }

    })->name('ajax.tag.store');

});

require __DIR__.'/auth.php';
