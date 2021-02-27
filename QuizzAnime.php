<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" /> 
</head>
<body>
	<div class="backQuizzChoixLogin">
	<div class="headerQuizzChoixLogin">
		<?php
		include ("header.php");
		?>
	</div>
  
<div class="LeQuizzAnime">


	<?php


/*session_start();
if(isset($_SESSION["active"])) 
{ */

	$serveur = new mysqli('localhost','root','root','Japon','8889');
	if ( $serveur -> connect_errno){
		die("<p>ERROR : echec connection à la base de donnée </p>");
	}
	else {
		echo"";
	}
	?>



	<?php
	
	$question = 'SELECT texte_question,id_question FROM questionAnime WHERE id_question<=16 order by rand() limit 1';

	

	$question_ = $serveur-> query($question);

	?>
	<div class ="questionCadre">
		<?php
		echo "<h2>QUESTION 1</h2>";
		    
			foreach ($question_ as $affiche)
			{
				$questionA = $affiche ['texte_question'];
				$numQuestion=$affiche ['id_question'];
				echo '<tr>';
				echo $numQuestion;
				echo "<td> {$questionA} </td>";     
					echo '</tr>'."\n";
			}
			
			
	

	
	?>

		<form action ="resultatAnime.php"method ="post" >
			<br><br>	

			<label for="case1">
				<?php 
							$rep = 'SELECT * FROM reponseAnime WHERE id_reponse LIKE "a%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1 = $affiche1['texte_reponse'];
								$rep2 = $affiche1['correct'];
								echo $rep1;
								
								
						}

				?>
				
			</label>
			<input type="radio" name="q1" id="case1" value = <?php echo "$rep2"."points" ?> >



			<br><br>	
			
	 	
			
			<label for="case2"><?php 
							$rep = 'SELECT * FROM reponseAnime WHERE id_reponse LIKE "b%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1= $affiche1['texte_reponse'];
								$rep2= $affiche1['correct'];
								echo $rep1;
								
						}

				?> 

				</label>
				<input type="radio" name="q1" id="case2" value = <?php echo "$rep2"."points" ?> /> 
			<br><br>	

		
			 <label for="case3"><?php 
							$rep = 'SELECT * FROM reponseAnime WHERE id_reponse LIKE "c%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1= $affiche1['texte_reponse'];
								$rep2= $affiche1['correct'];
								echo $rep1;
								
						}

				?></label>
					<input type="radio" name="q1" id="case3"value = <?php echo "$rep2"."points" ?> />
			 <br><br>	

			
			<label for="case4"><?php 
							$rep = 'SELECT * FROM reponseAnime WHERE id_reponse LIKE "d%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1= $affiche1['texte_reponse'];
								$rep2= $affiche1['correct'];
								echo $rep1;
								
						}
	

/*} else {
	echo 'no';
}*/
			?></label>
			<input type="radio" name="q1" id="case4" value = <?php echo "$rep2"."points" ?> /> 
		<br><br>	





<?php
include("q2A.php");

include("q3A.php");

include("q4A.php");

include("q5A.php");
?>

<div class="envoiRep">
<label> ENVOI DE MES REPONSES --> </label>
		<input type ="submit" name="valider" placeholder="envoyer">
	</form>
</div>

</div>



</body>
</html>