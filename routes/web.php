<?php
use App\Students;
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

Route::get('/checklist', function () {
  return view('checklist');
})->name('checklist');



Route::post('/insert', 'Controller@insert');

Route::post('/insert_passport', 'Controller@insert_passport');

Route::post('/insert_financing', 'Controller@insert_financing');

Route::post('/insert_insurance', 'Controller@insert_insurance');


Auth::routes();
Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard'); 
});

Route::get('/admin', function()
      {
  $students = App\Students::all();
  $users = App\User::all();
  return view('admin',compact('students', 'users')); 
})->name('admin.dashboard');



Route::post('/detail/{id}',array('as' => 'admin.detail', function()
      {
  $students = App\Students::all();
  $users = App\User::all();
  return view('admin',compact('students', 'users')); 
}))->name('admin.dashboard');


 Route::get('/detail/{id}',array('as' => 'admin.detail',  function()
      {
  $students = App\Students::all();
  $users = App\User::all();
  return view('detail',compact('students', 'users')); 
}));
