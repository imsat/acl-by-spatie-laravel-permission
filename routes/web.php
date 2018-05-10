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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:super-admin', 'auth']], function (){
    Route::resource('admin/permission', 'Admin\\PermissionController');
    Route::resource('admin/role', 'Admin\\RoleController');
    Route::resource('admin/user', 'Admin\\UserController');
});

//Route::group(['middleware'=>['role:Admin|Employee','auth']], function (){
//    Route::get('employee/list',[
//        'uses' => 'EmployeeController@index',
//        'as'   => 'employee-all'
//    ]);
//    Route::get('normalUser/list',[
//        'uses' => 'ClintUserController@index',
//        'as'   => 'normalUser-all'
//    ]);

//@can('manage_access')
//<a class="dropdown-item" href="{{url('admin/user')}}"><i class="fa fa-cog"></i>
//Manage Access</a>
//@endcan
//});
