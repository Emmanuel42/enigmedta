@extends('rouge/tempEnigmero')

@section('title')

@endsection

@section('content')

	<p>Enigme 2 : "A l'aide du plan, trouver le point de coordonnées (1;3) sur la grille végétale."</p>

            <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}					
				<label for="enigme2ro">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme2ro" type="text" name="enigme2ro" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>


@endsection