<!DOCTYPE html>
<html>
    <head>
        <title>LaravelApp</title>
    </head>
    <body>
	
        <h1>Dohvat iz baze: raw query</h1>
		
		<p>Ispis zadataka:</p>
		<ul>
		@foreach($tasks as $task)
			<li>{{$task->opis}}</li>
		@endforeach
		<?php 
			print_r($tasks);
		?>
		</ul>
		
    </body>
</html>
