@extends('bleue/tempEnigmebl')

@section('title')

@endsection

@section('content')

	<p>Enigme 2 : "A l'aide du plan, trouver le point de coordonnées (3;4) sur la grille végétale."</p>

		    <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme2bl">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme2bl" type="text" name="enigme2bl" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection