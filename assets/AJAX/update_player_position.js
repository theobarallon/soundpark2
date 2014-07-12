function updatePlayerPosition(trackId){
	xhr = new XMLHttpRequest();
	xhr.open('GET', 'http://localhost:8888/soundpark2/control/display_player_position.php?trackId='+trackId);
	xhr.onreadystatechange = function() 
	{ // On gère ici une requête asynchrone

        if(xhr.readyState == 4 && xhr.status == 200) 
        { // Si le fichier est chargé sans erreur

            document.getElementById('player_position').innerHTML = xhr.responseText; // Et on affiche !

        }
    };

    xhr.send(null); // La requête est prête, on envoie tout !

}