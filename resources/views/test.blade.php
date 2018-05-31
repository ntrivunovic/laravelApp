@extends ('layouts.master')

@section('title')
	LaravelApp
@endsection('title')


@section('content')

<h1>Pozdav {{$ime}} {{$prezime}}!</h1>

<p>Ispis polja $boje:</p>

<ul>
		@foreach($boje as $boja)
			<li>{{$boja}}</li>
		@endforeach
</ul>

@endsection('content')

