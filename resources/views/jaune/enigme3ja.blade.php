@extends('jaune/tempEnigmeja')

@section('title')

@endsection

@section('content')

	<p>Enigme 3 : "Sur les 3, seul le bâtiment IJ compte. Dans ce bâtiment, la seconde est 5ème, la 5ème est seconde, la 7ème 
	est 6ème, la 9ème est 3ème, la 10èmè est 7ème, la 16ème est 8ème, la 20ème est première et la 51ème est 4ème. L'un des points
	 de départ des autres équipes peut être le début de la solution."</p>

            <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme3ja">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme3ja" type="text" name="enigme3ja" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>


@endsection