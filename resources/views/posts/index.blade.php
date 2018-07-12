@extends ('layouts.master')

@section('title')	LaravelApp - Posts @endsection('title')

@section('content')

	<h1>Lista svih postova</h1>

	@foreach($posts as $post)
		<div class="blog-post">

			<h2 class="blog-post-title">
				<a href = "/posts/{{$post->id}}"> {{$post->title}}  </a>
			</h2>

			<p class="blog-post-meta">

			{{$post->user->name}} on 
			{{$post->created_at->toFormattedDateString()}}

			</p>

			<p>{{$post->body}}</p>

		</div><!-- /.blog-post -->
	@endforeach

@endsection('content')

