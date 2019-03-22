@extends('jaune/tempEnigmeja')

@section('title')

@endsection

@section('content')

	<p>Bravo ! Vous avez les 3 mots-clés. <br>
	Veuillez entrer les initiales de ces mots dans l'ordre où vous les avez trouvés pour débloquer la vidéo. 
	Regardez-la bien, elle vous donnera de précieux indices pour retrouver Théo.</p>

	        <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme4ja">Mot de passe</label><br>
				<input id="enigme4ja" type="text" name="enigme4ja" placeholder="">
				<button type="submit">Valider</button>
			</form>


@endsection