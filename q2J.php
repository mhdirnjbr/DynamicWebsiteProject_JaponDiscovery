
	<?php
	
	$question = 'SELECT texte_question,id_question FROM questionJapon WHERE id_question<=16 order by rand() limit 1';

	/*$question = 'SELECT texte_question,id_question FROM question WHERE id_question =2';*/

	$question_ = $serveur-> query($question);

	?>
	<div class ="questionCadre">
		<?php
		echo "<h2>QUESTION 2 </h2>";
		    
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
		<form action ="resultat.php"method ="post" >
			<br><br>	

			<label for="case1">
				<?php 
							$rep = 'SELECT * FROM reponseJapon WHERE id_reponse LIKE "a%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1 = $affiche1['texte_reponse'];
								$rep2 = $affiche1['correct'];
								echo $rep1;
								
								
						}

				?>
				
			</label>
			<input type="radio" name="q2" id="case1" value = <?php echo "$rep2"."points" ?> >



			<br><br>	
			
	 	
			
			<label for="case2"><?php 
							$rep = 'SELECT * FROM reponseJapon WHERE id_reponse LIKE "b%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1= $affiche1['texte_reponse'];
								$rep2= $affiche1['correct'];
								echo $rep1;
								

						}

				?> 

				</label>
				<input type="radio" name="q2" id="case2" value = <?php echo "$rep2"."points" ?> /> 
			<br><br>	

		
			 <label for="case3"><?php 
							$rep = 'SELECT * FROM reponseJapon WHERE id_reponse LIKE "c%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1= $affiche1['texte_reponse'];
								$rep2= $affiche1['correct'];
								echo $rep1;
								
						}

				?></label>
					<input type="radio" name="q2" id="case3"value = <?php echo "$rep2"."points" ?> />
			 <br><br>	

			
			<label for="case4"><?php 
							$rep = 'SELECT * FROM reponseJapon WHERE id_reponse LIKE "d%" AND  id_question="'.$numQuestion.'"';
							$rep_ = $serveur-> query($rep);
							foreach($rep_ as $affiche1)
						{
								$rep1= $affiche1['texte_reponse'];
								$rep2= $affiche1['correct'];
								echo $rep1;
								
						}
	

			?></label>
			<input type="radio" name="q2" id="case4" value = <?php echo "$rep2"."points" ?> /> 
		<br><br>	








