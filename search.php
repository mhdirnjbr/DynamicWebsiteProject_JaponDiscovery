<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="fichierSuppProjet.css">

</head>

<?php





$serveur = new mysqli('127.0.0.1','root','root','Japon','8889');
if ( $serveur -> connect_errno){
	die("<p>ERROR : echec connection à la base de donnée </p>");
}
else {
	echo"";
}




?>
<body>

	<form method ="POST" action ="">

<input id="search_text" placeholder="search city or a location " name="critere" >
<input type ="submit" value ="rechercher" name ="rechercher">
	</form>
<?php

	if (isset($_POST['rechercher']))

	{ 
		

		if (!empty($_POST['critere']))

		{
		
			$critere1 = htmlspecialchars($_POST['critere']);
			$critere = '%'.$critere1.'%';
			echo $critere;
			$chercher ="SELECT id_endroit FROM Hokkaido WHERE nom_endroit LIKE '$critere'";
			print_r($chercher);
			$data = $serveur -> query($chercher);

			while ($rowSearch = $data->fetch_assoc()) 
			{
				foreach ($rowSearch as $valueSearch) 
				echo "<td> {$valueSearch} </td>";     
											
				} 

			if (!empty($valueSearch))
			{	

			header ('location:HOKKAIDO.php?lieu=Hokkaido');
			

			}
			else {
				$chercher ="SELECT id_endroit FROM Tohoku WHERE nom_endroit LIKE '$critere'";
				print_r($chercher);
			}					 

		}
		echo "Veuillez saisir un critère";



	
	}

?>

</body>

</html>