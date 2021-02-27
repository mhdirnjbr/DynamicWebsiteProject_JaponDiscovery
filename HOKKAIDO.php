
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" href="fichierSuppProjet.css">

</head>
<?php
/*error_reporting(E_ALL);
ini_set("display_errors", 1);*/

$lieu = $_GET['lieu'];




$serveur = new mysqli('127.0.0.1','root','root','Japon','8889');
if ( $serveur -> connect_errno){
	die("<p>ERROR : echec connection à la base de donnée </p>");
}
else {
	echo"";
}


?>

<div class ="backgroundRegion">	
	<div class="headerRegion">

	<?php
		include ("header.php");
	?>
					</div>
			  
			


		
					<table>
				    <thead>

				    	<tr>
				    		<th> <b><u> Type d'endroit : </u> </b> &nbsp</th>

					<?php
						



						$espace = 'SELECT espace ,COUNT(espace) nombreE FROM '.$lieu.' GROUP BY espace';
								$espace_ = $serveur-> query($espace);
								foreach($espace_ as $affiche1)
								{
									$espace1 = $affiche1['espace'];
									$nbE = $affiche1['nombreE'];
									
									
					?>
				
				        	

				        	
				        	
				            <th ><?php echo $espace1 .":" ?> </th>
				            <th ><?php echo $nbE ?> </th>
				           
				            
				            
<?php

}
?>

							 <th> &nbsp &nbsp &nbsp | &nbsp &nbsp &nbsp</th> 
<?php 
$theme = 'SELECT thème_endroit ,COUNT(thème_endroit) nombreT FROM '.$lieu.' GROUP BY thème_endroit';
								$theme_ = $serveur-> query($theme);
								foreach($theme_ as $affiche1)
								{
									$theme1 = $affiche1['thème_endroit'];
									$nbT = $affiche1['nombreT'];

?>
							

									<th ><?php echo $theme1 .":" ?> </th>
				            		<th ><?php echo $nbT  ?> </th>

<?php
				        		}
?>

						<th> &nbsp   &nbsp &nbsp       </th>
				        <th><a href="TOHOKU.php?lieu=Tohoku">Tohoku -></a><br></th>
				        </tr>
				    </thead>
					</table>	
				</form>

			
</div>

<?php
	include ("choix.region.php");
?>

<div class ="Textedescription">

<?php

	if (isset($_POST['image1']))
{	


				$endroit = 'SELECT * FROM '.$lieu.' WHERE id_endroit=1';
				
				$endroit_ = $serveur-> query($endroit);
				
				foreach($endroit_ as $affiche)
			{
					$location_endroit= $affiche['location_endroit'];
					$nom_endroit= $affiche['nom_endroit'];
					$thème_endroit= $affiche['thème_endroit'];
					$description_endroit= $affiche['description_endroit'];
					$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
					$date_fermeture_endroit=$affiche['date_fermeture_endroit'];
					/*$imgA1 =$affiche['img1'];
					$imgA2 =$affiche['img2'];
					$imgA3 =$affiche['img3'];
					$imgA4 =$affiche['img4'];*/

					
		?>
					<div class ="titre">
		<?php	 	
						echo '<br/>'.$nom_endroit.'<br/>';

		?>
					 </div>
		<?php 
					echo '<br/>Situation géographique : '.$location_endroit;
			 		echo '<br/>Type d activité proposée : '. $thème_endroit;
			 		echo '<br/>Description du lieu : '. $description_endroit; 
			 		echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
			 		
			 }
		?>
		</div>
		<div class="slider">
				<div class="slides">

					<div class="slide"><img src="HOKKAIDO/niseko1.jpg"  alt= "" /></div>
					<div class="slide"><img src="HOKKAIDO/niseko2.jpg" alt="" /></div>
					<div class="slide"><img src="HOKKAIDO/niseko3.jpg" alt="" /></div>
					<div class="slide"><img src="HOKKAIDO/niseko4.jpg" alt="" /></div>
				</div>
		</div>
		<div class ="Textedescription">
		<div class ="emplacementMeteo">

		<!-- weather widget start --><div id="m-booked-weather-bl250-63369"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>3</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>9&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>4&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Niseko </div> <div class="booked-wzs-250-175-date">Mardi, 28 Avril</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/niseko-35780"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Lun.</td> <td>Mer.</td> <td>Jeu.</td> <td>Ven.</td> <td>Sam.</td> <td>Dim.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>3&deg;</td> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>16&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>3&deg;</td> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> <td class="week-day-val"><span class="plus">+</span>6&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-63369'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=35780&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
		</div>

		<!--
		<div class ="jugement">
			<a href ="jugement.php?t=0&id_endroit=<?= $id_endroit?>" >j'aime</a><br>
			<a href ="jugement.php?t=1&id_endroit=<?= $id_endroit?>">j'aime pas </a>
		</div>
		-->

		<?php
}

if (isset($_POST['image2']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit FROM '.$lieu.' WHERE id_endroit=2';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];

?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
			</div>
<?php 	 		
			echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 		echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/hakodate1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/hakodate2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/hakodate3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/hakodate4.png" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">
<div class ="emplacementMeteo">
<!-- weather widget start --><div id="m-booked-weather-bl250-83288"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-01"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>5</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>5&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>5&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Hakodate </div> <div class="booked-wzs-250-175-date">Lundi, 27 Avril</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/hakodate-21825"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Mar.</td> <td>Mer.</td> <td>Jeu.</td> <td>Ven.</td> <td>Sam.</td> <td>Dim.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>10&deg;</td> <td class="week-day-val"><span class="plus">+</span>10&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>13&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-83288'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=21825&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
</div>

<?php

}
if (isset($_POST['image3']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit FROM '.$lieu.' WHERE id_endroit=3';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];

?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
		   </div>
<?php 
	 		echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 		echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/matsumae1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/matsumae2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/matsumae3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/matsumae4.jpg" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">
<div class ="emplacementMeteo">

<!-- weather widget start --><div id="m-booked-weather-bl250-36805"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>18</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>18&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>18&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Matsumae </div> <div class="booked-wzs-250-175-date">Jeudi, 03 Octobre</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/matsumae-270745"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Ven.</td> <td>Sam.</td> <td>Dim.</td> <td>Lun.</td> <td>Mar.</td> <td>Mer.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>20&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> <td class="week-day-val"><span class="plus">+</span>16&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>14&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-36805'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=270745&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->

</div>


<?php


}
if (isset($_POST['image4']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit  FROM '.$lieu.' WHERE id_endroit=4';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];

?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
			</div>
<?php 
	 		echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 		echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/odori1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/odori2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/odori3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/odori4.jpg" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">
<div class ="emplacementMeteo">

<!-- weather widget start --><div id="m-booked-weather-bl250-45920"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-18"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>4</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>11&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>4&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Sapporo </div> <div class="booked-wzs-250-175-date">Mardi, 28 Avril</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/sapporo-18244"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Lun.</td> <td>Mer.</td> <td>Jeu.</td> <td>Ven.</td> <td>Sam.</td> <td>Dim.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>4&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> <td class="week-day-val"><span class="plus">+</span>22&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>3&deg;</td> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>10&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-45920'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=18244&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
</div>
 
<?php

}
if (isset($_POST['image5']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit FROM '.$lieu.' WHERE id_endroit=5';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];

?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
			</div>
<?php 
	 		echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 		echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/NOBORIBETSU1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/NOBORIBETSU2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/NOBORIBETSU3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/NOBORIBETSU4.jpg" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">
<div class ="emplacementMeteo">


<!-- weather widget start --><div id="m-booked-weather-bl250-51690"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-03"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>3</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>4&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>3&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city smolest">Noboribetsu </div> <div class="booked-wzs-250-175-date">Lundi, 27 Avril</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/noboribetsu-39891"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Mar.</td> <td>Mer.</td> <td>Jeu.</td> <td>Ven.</td> <td>Sam.</td> <td>Dim.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>10&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>15&deg;</td> <td class="week-day-val"><span class="plus">+</span>16&deg;</td> <td class="week-day-val"><span class="plus">+</span>17&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> <td class="week-day-val"><span class="plus">+</span>6&deg;</td> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-51690'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=39891&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->

</div>
<?php


}
if (isset($_POST['image6']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit FROM '.$lieu.' WHERE id_endroit=6';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];


?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
			</div>
<?php 
	 		echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 		echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/MASHU1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/MASHU2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/MASHU3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/MASHU4.jpg" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">
<div class ="emplacementMeteo">

<!-- weather widget start --><div id="m-booked-weather-bl250-94661"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-22"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number">-7</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: -7&deg;</div> <div class="booked-wzs-day-n">L: -8&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Teshikaga </div> <div class="booked-wzs-250-175-date">Dimanche, 16 Février</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/teshikaga-54415"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Lun.</td> <td>Mar.</td> <td>Mer.</td> <td>Jeu.</td> <td>Ven.</td> <td>Sam.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> </tr> <tr> <td class="week-day-val">-4&deg;</td> <td class="week-day-val">-1&deg;</td> <td class="week-day-val">-2&deg;</td> <td class="week-day-val">-1&deg;</td> <td class="week-day-val">-3&deg;</td> <td class="week-day-val"><span class="plus">+</span>1&deg;</td> </tr> <tr> <td class="week-day-val">-9&deg;</td> <td class="week-day-val">-9&deg;</td> <td class="week-day-val">-10&deg;</td> <td class="week-day-val">-9&deg;</td> <td class="week-day-val">-10&deg;</td> <td class="week-day-val">-8&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-94661'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=54415&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->





</div>
<?php

}
if (isset($_POST['image7']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit FROM '.$lieu.' WHERE id_endroit=7';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];

?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
			</div>
<?php 
	 		echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 		echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/OTARU1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/OTARU2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/OTARU3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/OTARU4.jpg" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">
<div class ="emplacementMeteo">

<!-- weather widget start --><div id="m-booked-weather-bl250-10878"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-03"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>4</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>4&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>4&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Otaru </div> <div class="booked-wzs-250-175-date">Lundi, 27 Avril</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/otaru-32845"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Mar.</td> <td>Mer.</td> <td>Jeu.</td> <td>Ven.</td> <td>Sam.</td> <td>Dim.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> <td class="week-day-val"><span class="plus">+</span>16&deg;</td> <td class="week-day-val"><span class="plus">+</span>16&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> <td class="week-day-val"><span class="plus">+</span>6&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>11&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-10878'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=32845&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->
</div>
<?php 


}
if (isset($_POST['image8']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit FROM '.$lieu.' WHERE id_endroit=8';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];

?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
			</div>
<?php 
	 		echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 	echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/Asahiyama1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/Asahiyama2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/Asahiyama3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/Asahiyama4.jpg" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">
<div class ="emplacementMeteo">
<!-- weather widget start --><div id="m-booked-weather-bl250-25301"> <div class="booked-wzs-250-175 weather-customize" style="background-color:#63aaf7;width:375px;" id="width3"> <div class="booked-wzs-250-175_in"> <div class="booked-wzs-250-175-data"> <div class="booked-wzs-250-175-left-img wrz-22"> <a target="_blank" href="https://www.booked.net/"> <img src="//s.bookcdn.com/images/letter/logo.gif" alt="booked.net" /> </a> </div> <div class="booked-wzs-250-175-right"> <div class="booked-wzs-day-deck"> <div class="booked-wzs-day-val"> <div class="booked-wzs-day-number"><span class="plus">+</span>2</div> <div class="booked-wzs-day-dergee"> <div class="booked-wzs-day-dergee-val">&deg;</div> <div class="booked-wzs-day-dergee-name">C</div> </div> </div> <div class="booked-wzs-day"> <div class="booked-wzs-day-d">H: <span class="plus">+</span>9&deg;</div> <div class="booked-wzs-day-n">L: <span class="plus">+</span>2&deg;</div> </div> </div> <div class="booked-wzs-250-175-info"> <div class="booked-wzs-250-175-city">Asahikawa </div> <div class="booked-wzs-250-175-date">Mardi, 28 Avril</div> <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div> </div> </div> </div> <a target="_blank" href="https://hotelmix.fr/weather/asahikawa-15194"> <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Lun.</td> <td>Mer.</td> <td>Jeu.</td> <td>Ven.</td> <td>Sam.</td> <td>Dim.</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-22"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>2&deg;</td> <td class="week-day-val"><span class="plus">+</span>8&deg;</td> <td class="week-day-val"><span class="plus">+</span>16&deg;</td> <td class="week-day-val"><span class="plus">+</span>19&deg;</td> <td class="week-day-val"><span class="plus">+</span>18&deg;</td> <td class="week-day-val"><span class="plus">+</span>22&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>2&deg;</td> <td class="week-day-val"><span class="plus">+</span>5&deg;</td> <td class="week-day-val"><span class="plus">+</span>7&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>9&deg;</td> <td class="week-day-val"><span class="plus">+</span>12&deg;</td> </tr> </table> </a> </div></div> </div><script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-25301'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/weather/info?action=get_weather_info&ver=6&cityID=15194&type=3&scode=124&ltid=3457&domid=581&anc_id=91465&cmetric=1&wlangID=3&color=63aaf7&wwidth=375&header_color=ffffff&text_color=333333&link_color=08488D&border_form=1&footer_color=ffffff&footer_text_color=333333&transparent=0"></script><!-- weather widget end -->


</div>
<?php


}
if (isset($_POST['image9']))
{
		$endroit = 'SELECT location_endroit,nom_endroit,thème_endroit,description_endroit,date_ouverture_endroit,date_fermeture_endroit FROM '.$lieu.' WHERE id_endroit=9';
		
		$endroit_ = $serveur-> query($endroit);
		foreach($endroit_ as $affiche)
	{
			$location_endroit= $affiche['location_endroit'];
			$nom_endroit= $affiche['nom_endroit'];
			$thème_endroit= $affiche['thème_endroit'];
			$description_endroit= $affiche['description_endroit'];
			$date_ouverture_endroit=$affiche['date_ouverture_endroit'];
			$date_fermeture_endroit=$affiche['date_fermeture_endroit'];

?>
			<div class ="titre">
<?php	 	
			echo '<br/>'.$nom_endroit.'<br/>';
?> 
			</div>
<?php 
	 		echo '<br/>Situation géographique : '.$location_endroit;
	 		echo '<br/>Type d activité proposée : '. $thème_endroit;
	 		echo '<br/>Description du lieu : '. $description_endroit; 
	 	echo '<br/>saison ouverture : '. $date_ouverture_endroit.'/'.$date_fermeture_endroit.'<br/>';
	 		
	} 
?>
</div>
<div class="slider">
		<div class="slides">
			<div class="slide"><img src="HOKKAIDO/ninja1.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/ninja2.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/ninja3.jpg" alt="" /></div>
			<div class="slide"><img src="HOKKAIDO/ninja4.jpg" alt="" /></div>
		</div>
</div>
<div class ="Textedescription">

<?php


}
	if (isset($_POST['image10']))
{ 
	include("avisH.php");
}

 ?>


</div>


	<form  method ="POST" action =" " >

<section class="horizontal-scroll">
            
				                
				                    <div class="card">
											<input type="image" name="image1" value="image1" alt="image1" src="nisseko.jpg" width ="300px">
											<p>La station de ski de Niseko </p>
									</div>
				                

								
				                    <div class="card">
											<input type="image" name="image2" value="image2" alt="image2" src="Fort-Hakodate.jpg" width ="300px">
											<p>Le port florissant d'Hakodate</p>
									</div>
								


								
				                    <div class="card">
											<input type="image" name="image3" value="image3" alt="image3" src="matsumae.jpg" width ="300px">
											<p>Parc de Matsumae</p>
									</div>
								

								
				                    <div class="card">
											<input type="image" name="image4" value="image4" alt="image4" src="parc_odori.jpg" width ="300px">
											<p>Parc Ôdôri</p>
									</div>
								

								
				                    <div class="card">
											<input type="image" name="image5" value="image5" alt="image5" src="noboribetsu.jpg" width ="300px">
											<p>Les Onsens de Noboribetsu</p>
									</div>
								

								
				                    <div class="card">
											<input type="image" name="image6" value="image6" alt="image6" src="mashu.jpg" width ="300px">
											<p>Le lac Mashu</p>
									</div>

									<div class="card">
											<input type="image" name="image7" value="image7" alt="image7" src="canal_nuit.jpg" width ="300px">
											<p>Le canal d'Otaru</p>
									</div>

									<div class="card">
											<input type="image" name="image8" value="image8" alt="image8" src="Asahiyama.jpg" width ="300px">
											<p>Zoo Asahiyama</p>
									</div>

									<div class="card">
											<input type="image" name="image9" value="image9" alt="image9" src="ninja.jpg" width ="300px">
											<p>HOKKAIDO NINJA DO!</p>
									</div>
									<div class="card">
											<input type="image" name="image10" value="image10" alt="image10" src="avis.jpg" width ="300px">
											<p>AVIS RÉGION</p>
									</div>
		
</section>			

	</form>

<?php /*
include("search.php");*/
?>
</body>







</html>
