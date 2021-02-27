


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


<div class="backQuizzChoixLogin">
	<div class="headerQuizzChoixLogin">
		<?php
		include ("header.php");
		?>
	</div>
<!-- QUIZZ-->
	<div class="quizzTitre">
		<h1> QUIZ PARTY</h1>
	</div>

	<dic class ="choixQuizz">
		<a href ="QuizzJapon.php" class="button"> QUIZ Japon</a>
		<a href ="QuizzAnime.php" class="button2"> QUIZ Anime</a>
	</dic>





	<div class ="BestScoreYou">
<h2>Votre meilleur score au quiz sur le japon : </h2>
		<div class ="BestScoreYouJapon">  
			


			

		 	<?php 

		 		$playerID=$_SESSION['id'];

		 			if (empty($playerID))

		 			{
		 				echo "DSL ! Vous n'êtes pas connecté à votre compte ! Si vous n'en avez pas , créez en 1 et rejoignez-nous !"."<b><br><br>";

					}
					else 
					{
						$BestScoreYouJapon = "SELECT score_japon,pseudo FROM user WHERE id_user = '$playerID'";
							$BestScoreYouJapon_ = $serveur-> query($BestScoreYouJapon);
							foreach($BestScoreYouJapon_ as $affiche1)
						{
								$BestScoreYouJapon1 = $affiche1['pseudo'];
								$BestScoreYouJapon2 = $affiche1['score_japon'];
								?>
							<table>
								<tr> 
									<td><?php echo $BestScoreYouJapon1.":";?></td>
								     <td><?php echo $BestScoreYouJapon2."/10";?></td>
								</tr>
							</table>
								<?php
						}

					}


		     	if (empty($BestScoreYouJapon2))

		     	{

		     		echo "DSL ! Vous n'avez encore fais aucune partie sur ce thème !";

		     	}

		    ?>    

			

         </div>

         <hr>

         <h2> Votre meilleur score au quiz sur les animes : </h2>
		<div class ="BestScoreYouAnime">
			

		 	<?php 

				$playerID=$_SESSION['id'];

		 			if (empty($playerID))

		 			{
		 				echo "DSL ! Vous n'êtes pas connecté à votre compte ! Si vous n'en avez pas , créez en 1 et rejoignez-nous !"."<b><br><br>";

					}
					else 
					{
						$BestScoreYouAnime = "SELECT score_anime,pseudo FROM user WHERE id_user = '$playerID'";
							$BestScoreYouAnime_ = $serveur-> query($BestScoreYouAnime);
							foreach($BestScoreYouAnime_ as $affiche1)
						{
								$BestScoreYouAnime1 = $affiche1['pseudo'];
								$BestScoreYouAnime2 = $affiche1['score_anime'];
								?>
							<table>
								<tr> 
									<td><?php echo $BestScoreYouAnime1.":";?></td>
								     <td><?php echo $BestScoreYouAnime2."/10";?></td>
								</tr>
							</table>	
								<?php
								
						}

					}
		     	if (empty($BestScoreYouAnime2))

		     	{

		     		echo "DSL ! Vous n'avez encore fais aucune partie sur ce thème !";

		     	}


		    ?>    


	    </div>

	</div>






	<div class =" BestScoreEveryone">


<h2> Top 3 world score Japon : </h2>

		<div class ="BestScoreEveryonJapon">
			
				

		 <?php  

 

			$BestScoreEveryoneJapon = 'SELECT score_japon,pseudo FROM user ORDER BY score_japon DESC LIMIT 3';
							$BestScoreEveryoneJapon_ = $serveur-> query($BestScoreEveryoneJapon);
							foreach($BestScoreEveryoneJapon_ as $affiche1)
						{
								$BestScoreEveryoneJapon1 = $affiche1['pseudo'];
								$BestScoreEveryoneJapon2 = $affiche1['score_japon'];
								?>
								
								<table>
										<th><?php echo $BestScoreEveryoneJapon1."<b><br>";?></th>
										<th><?php echo $BestScoreEveryoneJapon2;?></th>
									

								</table>
								<?php 
								





						}


		     

		  ?>      
	    </div>



<hr>

<h2> Top 3 world score Anime : </h2>
		<div class ="BestScoreEveryonAnime">  
			
				
				
			<?php 


						$BestScoreEveryoneAnime = 'SELECT score_anime,pseudo FROM user ORDER BY score_anime DESC LIMIT 3';
							$BestScoreEveryoneAnime_ = $serveur-> query($BestScoreEveryoneAnime);
							foreach($BestScoreEveryoneAnime_ as $affiche1)
						{
								$BestScoreEveryoneAnime1 = $affiche1['pseudo'];
								$BestScoreEveryoneAnime2 = $affiche1['score_anime'];
								?>
								
								<table>
									<th><?php echo $BestScoreEveryoneAnime1."<b><br>";?></th>
									<th><?php echo $BestScoreEveryoneAnime2;?></th>

								</table>
								<?php 
								
						}


		     

		    ?>           
	    </div>






	</div>






</div>
</body>
</html>