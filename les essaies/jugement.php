<?php

$serveur = new mysqli('127.0.0.1','root','root','regionJap','8889');
if ( $serveur -> connect_errno){
	die("<p>ERROR : echec connection à la base de donnée </p>");
}
else {
	echo"";
}

$getId =(int)$_GET['id_endroit'];
$gett =(int)$_GET['t'];

if(isset($_GET['t'],$_GET['id_endroit']) AND !empty($_GET['t']) AND !empty($_GET['id_endroit']))
{


	$check = 'SELECT id_endroit FROM Hokkaido WHERE id_endroit=?';
	$check_ = $serveur-> query($check);
		if($check->rowCount()==1)
		{
			echo'3';

			if ($gett==0)
			 {
			}
		}



}


?>