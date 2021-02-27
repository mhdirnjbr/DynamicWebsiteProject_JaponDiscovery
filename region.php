<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" /> 
</head>
<body>
<div class ="backgroundRegion">	
	<div class="headerRegion">
			<?php

			$serveur = new mysqli('127.0.0.1','root','root','regionJap','8889');
			if ( $serveur -> connect_errno){
				die("<p>ERROR : echec connection à la base de donnée </p>");
			}
			else {
				echo"";
			}

			?>

			<?php
			include ("header.php");
			
			?>


	</div>
			  
			


				
					<table>
				    <thead>
				    	<tr>
				        	<th> Types d'activitées :</th>

				        	
				        	
				            <th ><label for="sportive">sportive</label>
						<input type="checkbox" id="sportive" name="sportive"></th>
							
				             <th ><label for="visite">visite</label>
						<input type="checkbox" id="viste" name="visite"></th>

						<th ><label for="gratuit">gratuit</label>
						<input type="checkbox" id="gratuit" name="gratuit"></th>

						<th ><label for="exterieur">exterieur</label>
						<input type="checkbox" id="exterieur" name="exterieur"></th>

						<th ><label for="interieur">interieur</label>
						<input type="checkbox" id="interieur" name="interi$"></th>
							
				        <th ><label for="chercher"></label>
				        <input type ="submit" name="chercher" placeholder="chercher" value ="chercher"></th>

				        
				       
				        </tr>
				    </thead>
					</table>	
				

			
</div>
</body>



</html>
