<?php
use Illuminate\Support\Facades\Route;


Route::group(['namespace'=>'App\Http\Controllers'],function (){
   Route::get('/student','StudentController@index')->name('student.index');
   Route::get('/student/create','StudentController@create')->name('student.create');
   Route::post('/student/store','StudentController@store')->name('student.store');
   Route::get('/student/show/{id}','StudentController@show')->name('student.show');
   Route::delete('/student/delete/{id}','StudentController@delete')->name('student.delete');
   Route::get('/student/edit/{id}','StudentController@edit')->name('student.edit');
   Route::patch('/student/update/{id}','StudentController@update')->name('student.update');
});
