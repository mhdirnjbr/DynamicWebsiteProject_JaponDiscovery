<?php

	$playerID=$_SESSION['id'];
	if (!empty($playerID))
	{

		?>
			<form  method ="POST" action ="" >
				<h1>Laisser votre avis il nous intéresse : </h1>

				
				<br></br>
				<label for= "note"> Note sur 10 de la région : </label>
				<input type="number" name="note" id="note"  min ="0" step ="0.5" max="10" value ="" /> /10 <br><br>
		  
				<label for= "avis"> Laisser un avis écrit pour préciser votre note  : </label> 
				<input type="text" name="avis" id="avis" placeholder="avis" value =""/><br><br>

		     
				<label> cliquez ici pour envoyer votre avis --> </label>
				<input type ="submit" name="voter" placeholder="envoyer"><br>
			</form>

		<?php 

			if (isset($_POST['voter']))
			{
				//echo "3";
				$playerID=$_SESSION['id'];
				$avis = htmlspecialchars($_POST['avis']);
				echo $avis;
				echo $Note;
				$Note = "UPDATE user SET note_Hokkaido='8' WHERE id_user = '$playerID'";
				$Vote = "UPDATE user SET avis_Hokkaido ='$avis'  WHERE  id_user = '$playerID'";
				$data = $serveur-> query($Note);
				$data = $serveur-> query($Vote);
				print_r($Vote);
				print_r($Note);
				//header ('location: page_membre.php');//


			}


	}
		else 

		{

				echo"DSL ! Pour laisser un avis il vous faut créer un compte ! Créer en 1 : ";
		?>
				<a href ="testLogin.php">ici !</a>
				<br><br>
			<?php
		}
			echo "Moyenne des avis sur cette région :";
			$MoyenneAvis ="SELECT AVG (note_Hokkaido) FROM user";
			$MoyenneAvis_ = $serveur-> query($MoyenneAvis);
							foreach($MoyenneAvis_ as $affiche1)
						{
								$MoyenneAvis1 = $affiche1['AVG (note_Hokkaido)']."/10";
								
								echo $MoyenneAvis1;
								
								
						}
			?>