@extends('rouge/tempEnigmero')

@section('title')

@endsection

@section('content')

	<p>Enigme 3 : "Sur les 3, seul le premier compte. Dans ce batiment, la 2ème est première, la 3ème est seconde, la 7ème 
	est 5ème, la 8ème est 4ème, la 9ème est 8ème, la 13ème est 7ème, la 34ème est 3ème et la 38ème est 6ème. L'un des points 
	de départ des autres équipes peut être le début de la solution."</p>

            <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}					
				<label for="enigme3ro">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme3ro" type="text" name="enigme3ro" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection