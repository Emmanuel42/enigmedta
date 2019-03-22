@extends('jaune/tempEnigmeja')

@section('title')

@endsection

@section('content')

	<p>Enigme 2 : "A l'aide du plan, trouver le point de coordonnées (4;3) sur la grille végétale."</p>

            <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme2ja">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme2ja" type="text" name="enigme2ja" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection