<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" /> 
</head>
<body>
	

	<?php
	
		 $serveur = new mysqli('localhost','root','root','Japon','8889');
		if ( $serveur -> connect_errno){
			die("<p>ERROR : echec connection à la base de donnée </p>");
		}
		else {
			echo"";
		}

	
?>
<div class ="backgroundRegion">	
	<div class="headerQuizzChoixLogin">
		<?php
		include ("header.php");
		?>
	</div>

<?php

	$playerID=$_SESSION['id'];
	
	if (!empty($playerID))
	{

		?>
			<form  method ="POST" action ="" >
				<h1>AIDEZ NOUS À NOUS AMÉLIORER DE FACON ANONYME : </h1>

				
				<br></br>
				<label for= "note"> Note sur 10 de notre site : </label>
				<input type="number" name="noteS" id="note"  min ="0" step ="0.5" max="10" value ="" /> /10 <br><br>
		  
				<label for= "avis"> Laisser un avis écrit pour préciser votre note  : </label> 
				<input type="text" name="avisS" id="avis" placeholder="avis" value =""/><br><br>

		     
				<label> cliquez ici pour envoyer votre avis --> </label>
				<input type ="submit" name="voter" placeholder="envoyer"><br><br>
			</form>

		<?php 
		
		

		
			if (isset($_POST['voter']))

			{
				if (empty($noteS)&&empty($avisS))

				{

					//echo "3";
					

					$noteS = $_POST['noteS'];
					$avisS = htmlspecialchars($_POST['avisS']);

					/*echo $avisS;
					echo $noteS;*/
					$Note = "UPDATE user SET note_site='$noteS' WHERE id_user = '$playerID'";
					$Vote = "UPDATE user SET avis_site ='$avisS'  WHERE  id_user = '$playerID'";
					$data = $serveur-> query($Note);
					$data = $serveur-> query($Vote);
					
					//header ('location: page_membre.php');//
				}
				else {
					echo "veuillez saisir tous les champs svp"."<br><br>";
				}

			}


	}
		else 

		{

			echo"DSL ! Pour laisser votre avis sur notre site il vous faut créer un compte ou vous connecter !Créer en 1 : ";
		?>
				<a href ="testLogin.php">ici !</a>
				<br><br>
	<div class ="moyenne">
			<?php
		}
				echo "Moyenne de vos avis sur notre site :"."<b>";
			?>
		<div class ="noteMoyenne">
			<?php 
				$MoyenneAvis ="SELECT AVG (note_site) FROM user";
				$MoyenneAvis_ = $serveur-> query($MoyenneAvis);
								foreach($MoyenneAvis_ as $affiche1)
							{
									$MoyenneAvis1 = $affiche1['AVG (note_site)']."</b><br> /10";
									
									echo $MoyenneAvis1."<br><br>";
			?>
		</div>
	</div>	
			<?php		
								
						}
			
				$nbavis = "SELECT COUNT(DISTINCT avis_site) FROM user";

								$nbavis_ = $serveur-> query($nbavis);
								foreach($nbavis_ as $affiche1)
								{
									
									$nbavis = $affiche1['COUNT(DISTINCT avis_site)'];
									echo $nbavis." personnes ont déjà laissé leur avis !"."<br><br>";
								}
			

				$AvisEcris ="SELECT avis_site,note_site FROM user";
				$AvisEcris_ = $serveur-> query($AvisEcris);
								foreach($AvisEcris_ as $affiche1)
							{
												$AvisEcris1 = $affiche1['avis_site'];
												$note1 = $affiche1['note_site'];
								
											?>
			    
												<div class ="noteur">

											<?php 	

												echo "Mr XXX :"."<br>";
												echo "sa note : ".$note1."/10<br><br>";
				 			?>

				 			<div class ="avis">
				 			<?php	
												echo $AvisEcris1."<br><br><br>";
									
									
							}			
				?>

				</div>
		</div>
</div>
</body>
</html>