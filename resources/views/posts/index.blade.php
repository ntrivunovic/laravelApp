@extends ('layouts.master')

@section('title')
	LaravelApp
@endsection('title')

@section('content')

<p>Ispis svih zadataka:</p>

<ul>
		@foreach($tasks as $task)
			<li>
				<a href = "/tasks/{{$task->id}}">
					{{$task->opis}}
				</a>
			</li>
		@endforeach
</ul>

@endsection('content')

