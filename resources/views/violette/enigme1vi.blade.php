@extends('violette/tempEnigmevi')

@section('title')

@endsection

@section('content')

	<p>Enigme 1 : "Le premier mot se trouve dans votre zone de départ (indiquée sur le plan): la source de lumière vous éclairera."</p>

            <form action="equipeController@verifE1" method="POST" > {{csrf_field()}}					
				<label for="enigme1vi">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme1vi" type="text" name="enigme1vi" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection