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




	<div class="headerQuizzChoixLogin">
		<?php
		include ("header.php");
		?>
	</div>


<p> Résumé de votre partie :</p>


<?php

	$resultatq1=$_POST[q1];

		echo"votre réponse à la question 1 vous rapporte : <b>" . $_POST[q1] . " </b><br>"; 

	$resultatq2=$_POST[q2];

		echo"votre réponse à la question 2 vous rapporte : <b>" . $_POST[q2] . " </b><br>"; 

	$resultatq3=$_POST[q3];

		echo"votre réponse à la question 3 vous rapporte : <b>" . $_POST[q3] . " </b><br>"; 

	$resultatq4=$_POST[q4];

		echo"votre réponse à la question 4 vous rapporte : <b>" . $_POST[q4] . " </b><br>"; 

	$resultatq5=$_POST[q5];

		echo"votre réponse à la question 5 vous rapporte : <b>" . $_POST[q5] . " </b><br>". " </b><br>"; 


?>

<div class ="affichageResultat">

	<?php

$PseudoPlayer = $_SESSION['pseudoDef'];





	$resultatQuizz = ($resultatq1+$resultatq2+$resultatq3+$resultatq4+$resultatq5)*2;
	echo $resultatQuizz. "/10"." </b><br><br>";

	if ($resultatQuizz<=5){
	echo "Vous pouvez faire beaucoup mieu"." </b>".$PseudoPlayer." </b>"."j'en suis sure  !"." </b><br><br>";
	}

	if ($resultatQuizz>=5 ){
	echo "C'est plutot pas mal "." </b>".$PseudoPlayer." </b> !<br>";
	}

	if ($resultatQuizz>=8){
		echo " </b>"."Vous allez bientot avoir le fameux 'PERFECT!'"." </b><br>";
	}
	?>

	<?php

		if (empty($PseudoPlayer))

		{
			echo "Vous jouez actuellement pour le plaisir car vous n'êtes malheureusement pas connecté à votre compte , si vous n'en avez pas créez en 1 et rejoignez nous simplement en cliquant  : " 
			?> 
				<a href ="testLogin.php"> ici ! </a>

			<?php

		}

	?>

</div>







<?php 


$playerID=$_SESSION['id'];
$scoreJapon = "UPDATE user SET score_japon ='$resultatQuizz'  WHERE score_japon<='$resultatQuizz' AND  id_user = '$playerID'";
			$data = $serveur-> query($scoreJapon);
			


?>




</body>
</html>