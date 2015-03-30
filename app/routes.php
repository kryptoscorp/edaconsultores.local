<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/',array('uses'=>'EdaController@showHome','as'=>'home'));

//array('uses'=>'ContentController@index', 'as'=>'content'))

Route::get('nosotros',array('uses'=>'EdaController@showNosotros','as'=>'nosotros'));

Route::get('servicios', array('uses'=>'EdaController@showServicios','as'=>'servicios'));

Route::get('pca', array('uses'=>'EdaController@showPca','as'=>'pca'));

Route::get('contacto',array ('uses'=>'EdaController@showContacto','as'=>'contacto'));

Route::post('contacto',array ('uses'=>'EdaController@sendMail'));










