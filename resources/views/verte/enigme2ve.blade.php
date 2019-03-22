@extends('verte/tempEnigmeve')

@section('title')

@endsection

@section('content')

	<p>Enigme 2 : "A l'aide du plan, trouver le point de coordonnées (2;5) sur la grille végétale."</p>

            <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}					
				<label for="enigme2ve">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme2ve" type="text" name="enigme2ve" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection