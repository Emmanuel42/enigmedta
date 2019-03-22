@extends('verte/tempEnigmeve')

@section('title')

@endsection

@section('content')

	<p>Enigme 3 : "Au point de départ de l'équipe rouge. A propos du bâtiment IJ : la seconde est 5ème, la 9ème est première, 
	la 10ème est 7ème et la 20ème est 3ème.  Au point de départ d'une autre équipe (qui n'est pas l'équipe violette) : sur les 4, 
	seul le troisième compte. Ici, la 5ème est 6ème, la 6ème est 8ème, la 11ème est 2ème et la 12ème est 4ème."</p>

            <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}					
				<label for="enigme3ve">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme3ve" type="text" name="enigme3ve" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection