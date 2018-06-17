@extends ('layouts.master')

@section('title')
	LaravelApp
@endsection('title')

@section('content')

<p>Detalji zadataka koji ima id= {{$task->id}}:</p>

<ul>
	<li>user: {{$task->user->name}}, email: {{$task->user->email}} </li>
	<li>opis: {{$task->opis}}</li>
	<li>kreiran: {{$task->created_at}}</li>
</ul>

@endsection('content')

