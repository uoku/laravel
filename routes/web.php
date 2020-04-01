<?php

use Illuminate\Support\Facades\Route;
use App\News;

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

Route::get('/user/{id?}',function($id=null){
	if(!is_null($id)){
		//如果有id 導向 /student/profile
		return redirect()->route('profile');
	}else{
			return 'no user info';
	}
});

Route::get('/student/profile',function(){
	return 'have user info';
})->name('profile');

Route::get('/insert',function(){
	DB::insert('insert into news(title,description) value(?,?)',['新','asdf']);
});

Route::get('/read',function(){
		$posts = News::all();
		foreach($posts as $post){
			return  $post->title;
		};
});
Route::get('/find/{id?}',function($id){
		$post = News::find($id);
		return $post;
});
Route::get('/hello/{id}','NewController@hello');
Route::resource('new','NewController');

Route::get('/db_info', 'MariaDBInfoController@index');
