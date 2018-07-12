@extends ('layouts.master')

@section('title')	LaravelApp - Posts @endsection('title')

@section('content')

    <h1>Login</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <hr>

    <form method="POST" action="/posts">

        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="title" class="form-control" id="title" name="title" >
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" ></textarea>
        </div>

        <button type="submit" class="btn btn-default">Publish</button>
    </form>

@endsection('content')

