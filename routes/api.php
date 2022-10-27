<?php

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('Movies', function() {
 return Movie::all();
});

Route::get('Movies/{id}', function($id) {
 return Movie::find($id);
});

Route::post('Movies', function(Request $request) {
 return Movie::create($request->all());
});

Route::put('Movies/{id}', function(Request $request, $id) {
 $article = Movie::findOrFail($id);
 $article->update($request->all());
 return $article;
});

Route::delete('articles/{id}', function($id) {
 Movie::find($id)->delete();
 return 204;
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
