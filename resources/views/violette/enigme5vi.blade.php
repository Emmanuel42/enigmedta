@extends('vioette/tempEnigmevi')

@section('title')

@endsection

@section('content')

	<p>Bravo ! Vous avez les 3 mots-clés. <br>
	Veuillez entrer les initiales de ces mots dans l'ordre où vous les avez trouvés pour débloquer la vidéo. 
	Regardez-la bien, elle vous donnera de précieux indices pour retrouver Théo.</p>

	        <form action="{{ url('equipe') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme4vi">Mot de passe</label><br>
				<input id="enigme4vi" type="text" name="enigme4vi" placeholder="">
				<button type="submit">Valider</button>
			</form>
			
			<div>
    	
        		<object type="application/x-shockwave-flash" width="425" height="355" data="https://youtu.be/Wq4tyDRhU_4">
    
            		<param name="movie" value="https://youtu.be/Wq4tyDRhU_4" />
    
            		<param name="wmode" value="transparent" />
    
        		</object>
    
    
                <!--[if lte IE 6 ]>
    
                <embed src="https://youtu.be/Wq4tyDRhU_4" type="application/x-shockwave-flash" wmode="transparent" width="425" height="355"></embed>
    
                <![endif]-->
    
    		</div>

@endsection