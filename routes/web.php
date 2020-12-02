<?php

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
Route::get('test1', function () {
    return "welcome";
});
Route::get('test2/{id}', function ($id) {
    return "welcome $id";
});
//route parameter
Route::get('test3/{id?}', function () {
    return "welcome ";
});
//route name
Route::get('/test4', function () {
    return "welcme in name router";
}
)->name('a');
//routing name space
//route::namespace('Front')->group(function(){


//});
route::group(['namespace'=>'Front','prefix'=>'user'],function(){

//العمليات اللى هتم هنا كل الكلاسات او الفانكشن اللى داخل فولدر (فرونت)
route::get('name','UserController@showname');
//route::resource('name','UserController');

});

route::get('landing/page',function(){
return view('land');

});




Auth::routes(['verify'=>'true']);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
