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

Route::get('/test', function () {
	$ime = "Pero";
	$prezime = "Perić";
	$boje = ['crvena', 'plava', 'žuta'];
    return view('test', compact('ime', 'prezime', 'boje'));
});

Route::get('/tasks', function () {
	//$tasks = DB::select("select * from tasks");//php 
	$tasks = DB::table('tasks')->latest()->get();
	return $tasks;
	//echo "<pre>";
	//print_r($tasks);
	//echo "</pre>";
	//return view('tasks', compact('tasks'));
});
