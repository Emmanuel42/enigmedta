<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
		<link href="{{ asset('../public/css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('../public/js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    
    <body>
    <div>Numéro : {{ $equipes->id }} </div>
    <div>Couleur : {{ $equipes->couleur }} </div>
    
    
    	 <div> <h1 class="titre" style="text-align: center; text-decoration: yellow underline; padding-bottom: 20px;">Enigme cour des matières</h1></div>
    	  
    	 <div class="plan" style="text-align: center">
			<p><u>Votre objectif :</u> trouver <strong>3 mots-clés</strong> qui vous permettront de débloquer une vidéo. 
			Cette dernière vous mettra sur la piste de Théo.<br>
			<u>Consignes :</u> vous devez tout d'abord rejoindre votre point de départ indiqué sur le plan ci-dessous en fonction 
			de la couleur de votre équipe.<br>
			<u>Note importante :</u> vous n'avez pas accès aux bâtiments, toutes les énigmes peuvent être résolues dans la cour des matières.</p>
    
    		<img src="../img/cdm.png" class="img-fluid" alt="Plan de la cour des matières" />
    	  
    		
            @yield('content')
              
            <form>				
				<label for="enigme">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous puis validez pour passer à l'énigme suivante</label><br>
				<input id="enigme" type="text" name="mot" placeholder="Votre réponse">
				<button type="submit">Valider</button>
			</form>
		 </div>
    </body>
</html>