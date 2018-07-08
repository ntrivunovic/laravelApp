@extends ('layouts.master')

@section('title')	LaravelApp - Post @endsection('title')

@section('content')

	<div class="blog-post">

		<h1 class="blog-post-title">{{$post->title}}</h1>

		<p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} </p>

		<p>{{$post->body}}</p>

		{{-- forma za unos komentara --}}
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="card">

			<div class="card-block">

				<form method="POST" action="/posts/{{$post->id}}/comments">

					@csrf

					<div class="form-group">
						<textarea class="form-control" id="body" name="body" required ></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>

				</form>

			</div>

		</div>

		<div class="comments">
			<ul class="list-group">
				@foreach($post->comments as $comment)

					<li class="list-group-item">
						<strong>
							{{$comment->created_at->diffForHumans() }}: &nbsp;
						</strong>
						{{$comment->body}}
					</li>

				@endforeach

			</ul>

		</div>
	</div>



@endsection('content')

