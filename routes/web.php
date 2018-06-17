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

Route::get('/test/{param}/{param2}', function ($id, $id2) {
    return $id." ".$id2;
});
/*
 * //bez kontrolera
Route::get('/tasks', function () {
	//$tasks = DB::select("select * from tasks");//php 
	$tasks = DB::table('tasks')->latest()->get();
	return $tasks;
	//echo "<pre>";
	//print_r($tasks);
	//echo "</pre>";
	//return view('tasks', compact('tasks'));
});
*/

//sa kontrolerom:
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{id}', 'TasksController@show');



/*
Route::get('/tasks/{id}', function ($task_id) {
    $task = DB::table('tasks')->find($task_id);
    echo $task->opis;
});
*/
Route::get('/tasks_eloquent', function () {
    //$tasks = App\Task::all();
    //return $tasks;
   /* $task = new App\Task();
    $task->opis = "novi zadatak";
    $task->user_id = 1;
    $task->save();
*/
    //App\Task::destroy(8);
    var_dump(App\Task::find(3)->user);
});


Route::get('/userTasks', function () {
    return App\User::find(1)->zadaci()->where('id','>', '3')->orderBy('opis','asc')->get();
});

Route::get('/userRole/{id}', function ($user_id) {
    $user = App\User::find($user_id);
    $roles = $user->roles()->get();
    echo "Korisnik ".$user->name." ima slijedeće role:";
    echo '<ul>';
    foreach ($roles as $role)
        echo '<li>'.$role->name.'</li>';
    echo '</ul>';
});

Route::get('/roleUser', function () {
    return App\Role::find(2)->users()->get();
});