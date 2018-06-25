@extends ('layouts.master')

@section('title')
	LaravelApp - Posts
@endsection('title')

@section('content')

<p>Ispis svih postova:</p>

<ul>
		@foreach($posts as $post)
			<li>
				<a href = "/tasks/{{$post->id}}">
					{{$post->title}}
				</a>
			</li>
		@endforeach
</ul>

@endsection('content')

