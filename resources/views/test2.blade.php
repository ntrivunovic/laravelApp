<!DOCTYPE html>
<html>
    <head>
        <title>LaravelApp</title>
    </head>
    <body>
	
        <h1>Pozdav {{$ime}} {{$prezime}}!</h1>
		
		<p>Ispis polja $boje:</p>
		<ul>
		@foreach($boje as $boja)
			<li>{{$boja}}</li>
		@endforeach
		</ul>
		
    </body>
</html>
