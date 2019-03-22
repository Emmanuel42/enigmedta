@extends('rouge/tempEnigmero')

@section('title')

@endsection

@section('content')

	<p>Enigme 1 : "Le premier mot se trouve dans votre zone de départ (indiquée sur le plan): la source de lumière vous éclairera."</p>

            <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}					
				<label for="enigme1ro">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme1ro" type="text" name="enigme1ro" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>

@endsection
