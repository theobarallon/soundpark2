<?php

	include_once("../model/connect_sql.php");
	if(isset($_GET['trackId']) && isset($_GET['currentUser']))
	{
		// on vient tester si l'utilisateur n'avait pas disliké le son en question, pour ne pas réenregistrer un dislike dans le cas échéant
		$req = $bdd->prepare('SELECT dislike.ID FROM soundpark2.dislike, user, song WHERE dislike.ID_song = song.ID AND song.trackId = ? AND dislike.ID_user = user.ID AND user.email=?');
		$req->execute(array(
			$_GET['trackId'],
			$_GET['currentUser']
			));
		if($req->fetch())
		{
			echo('erreur, son deja disliké par cet utilisateur');
		}
		else
		{
			//on test si le son n'a pas déjà été liké par ce meme utilisateur
			$req = $bdd->prepare('SELECT like.ID FROM soundpark2.like, user, song WHERE like.ID_song = song.ID AND song.trackId = ? AND like.ID_user = user.ID AND user.email=?');
			$req->execute(array(
			$_GET['trackId'],
			$_GET['currentUser']
			));
			if($req->fetch()) // cas ou le son avait été liké avant
			{
				//on va chercher l'ID du son en question
				$req = $bdd->prepare('SELECT ID FROM song WHERE trackId = ?');
				$req->execute(array($_GET['trackId']));
				$Id = $req->fetch();

				//on va chercher l'ID de l'utilisateur qui à disliké
				$req = $bdd->prepare('SELECT ID FROM user WHERE email = ?');
				$req->execute(array($_GET['currentUser']));
				$idUser = $req->fetch();

				//on supprime le like
				$req = $bdd->prepare('DELETE FROM soundpark2.like WHERE ID_song = ? AND ID_user = ?');
				$req->execute(array($Id[0], $idUser[0]));

				//on ajoute le dislike
				$req = $bdd->prepare('INSERT INTO soundpark2.dislike(ID_song, ID_user, date) VALUES(?, ?, NOW())');
				$req->execute(array($Id[0], $idUser[0]));

				//on vient compter le nombre de dislikes du son en question pour vérifier que les sommes correspondent bien. 
				$req = $bdd->prepare('SELECT COUNT(*) FROM soundpark2.dislike WHERE ID_song = ?');
				$req->execute(array($Id[0]));
				$nbDislikes = $req->fetch();

				//on vient compter le nombre de likes du son en question pour vérifier que les sommes correspondent bien. 
				$req = $bdd->prepare('SELECT COUNT(*) FROM soundpark2.like WHERE ID_song = ?');
				$req->execute(array($Id[0]));
				$nbLikes = $req->fetch();
				echo('likes: '.$nbLikes[0].' dislikes : '.$nbDislikes[0]);	

			}
			else // cas ou le son n'avait pas été liké avant
			{
				//on va chercher l'ID du son en question
				$req = $bdd->prepare('SELECT ID FROM song WHERE trackId = ?');
				$req->execute(array($_GET['trackId']));
				$Id = $req->fetch();

				//on va chercher l'ID de l'utilisateur qui à disliké
				$req = $bdd->prepare('SELECT ID FROM user WHERE email = ?');
				$req->execute(array($_GET['currentUser']));
				$idUser = $req->fetch();

				//on ajoute le dislike
				$req = $bdd->prepare('INSERT INTO soundpark2.dislike(ID_song, ID_user, date) VALUES(?, ?, NOW())');
				$req->execute(array($Id[0], $idUser[0]));

				//on vient compter le nombre de dislike du son en question pour vérifier que les sommes correspondent bien. 
				$req = $bdd->prepare('SELECT COUNT(*) FROM soundpark2.dislike WHERE ID_song = ?');
				$req->execute(array($Id[0]));
				$nbLikes = $req->fetch();
				echo($nbLikes[0]);
			}
		}	
	}
	