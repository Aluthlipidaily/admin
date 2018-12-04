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
Route::get('/',function (){
    return redirect('/dashboard');
});

Route::get('/dashboard','Routes@index');
Route::get('/login','Routes@login');
Route::get('/dashboard/newMember', 'Routes@newMember');
Route::get('/dashboard/edit', 'Routes@editMember');
Route::post('/dashboard/newMember/addMember','MemberController@addMember');
