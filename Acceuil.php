<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" />
<title> Home</title>
<style type="text/css">




    #volet {

      width: 800px;
      height:852px;
      padding: 10px;
      opacity: 1.5;
      background-color :#000000;
      color: black; 
      font-family: Arial Narrow;
      font-size: 22px;
      text-align : center; 
      
    }
    #volet a.ouvrir{
      display:block;
    }
    #volet a.ouvrir,
    #volet a.fermer {
      width: 180px;
      height:20px;
      padding: 10px 25px;
      background: white;
      color: black;
      text-decoration: none;
      top:197px;
      display:block;
    }

    #volet {
    	left: -850px;
      position: absolute;
       top: 4.5px;
      -webkit-transition: all .5s ease-in;
      -moz-transition: all .5s ease-in;
      transition: all .5s ease-in;

    }
    #volet a.ouvrir,
    #volet a.fermer {
      position: absolute;
      left: 760px;
      -webkit-transform: rotate(270deg);
      -moz-transform: rotate(270deg);
      -o-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
      -moz-radius: 0 0 8px 8px;
      border-radius: 0 0 8px 8px;

    }
    #volet a.fermer {
      display: none;

    }
    #volet:target {
      left: 0px;

    }


    /* code pour la fermeture */

    #volet:target a.fermer {
      display: block ;
      right:730px;
    }
    #volet:target a.ouvrir {
      display: none;
    }
    #volet_clos:target #volet {

      left: -850px;

    }
    











.DescirptionSite{
   /*background-color: #B0C4DE;*/
	font-size: 20px;
  margin-top:25px;
  margin:-9px;
  padding: 20px;
  width : 100%;
  height :500px;
  text-align :center;
  font-family:"DroidSans",Arial,sans-serif;
  transform: translateX(-40px);
  opacity: 0;
  animation:FadeIn 0.7s;
  animation-fill-mode: forwards;
  animation-play-state: running;

}
.DescirptionSite:nth-child(2){
  animation-delay: 0.9s;


}

@keyframes FadeIn{
  0%{
    transform:translateX(-44px);
    opacity:0;
    
  }
  100%{
    transform:none;
    opacity: 1;
    
  }
}
.apparition{
/*background-color: #B0C4DE;*/
  margin-bottom: 15px;
  font-size:60px;
  color : #9c598a ;
  transform: translateX(-40px);
  opacity: 0;
  animation:FadeIn 0.7s;
  animation-fill-mode: forwards;
  animation-play-state: running;

  margin-left:230px;
  
  
  text-align: center;
  width : 750px;
  margin-top:40px;
}
.apparition:nth-child(2){
  animation-delay: 0.9s;

}

.texte-centrale{
  /*background-color: #B0C4DE;*/
  font-family:Apple Chancery, cursive;
  margin-left:445px;
  margin-right :20px;
  float:center;
  padding: 10px;
  font-size: 20px;
  text-align: center;
  
  color: #9c598a;
  width : 500px;
  
  margin-top:40px;
}
.image_g{
float :left;
margin-top: 9px;
margin-left:-9px; 

}
.image_d{
float :right;
margin-top: -522px;
margin-right:-9px; 


}
.image2home{
float :center;
margin-top: 400px;
margin-left:380px;


}
.textGShanks{
  margin-left: -380px;
  margin-top: 600px;
  /*background-color: #B0C4DE;*/
  font-family:Stencil Std, fantasy;
  width :400px;
  
  float:left;
  padding: 10px;
  font-size: 30px;
  text-align: center;
}
.textDShanks{
  overflow: hidden;
  margin-top:-330px;
  /*background-color: #B0C4DE;*/
  font-family:Stencil Std, fantasy;
  font-size: 28px;
  float:right;
  text-align: center;
  height:300px;
  width :425px;
  margin-right: 20px;
  
 }
 
.home{
 
  background-image :url(background/backgroundF.png); 
  background-repeat:no-repeat;
  
  width : 1450px;
  height: 880px;
  margin:-9px;
}
@media (min-width: 1024px) { .home { background: url(background/backgroundF1.png) width:700px  center / cover; }
@media (max-width:  768px) { .home { background: url(background/backgroundF2.png)center / cover; }

</style>

</head>
<div class="home">
<body>

	 <!-- MENU -->



 

<?php
include ("header.php");
?>



  
   
   
 <!-- PARTIE SUR LE VOLET AVEC CARTE + SEARCH -->

  <div id="volet_clos">
    <div id="volet">
      
  <p><div class ="search_text">
<?php

include ("search.php");

?>

  </div></p>
      <p><img src = mapFinal.png alt = carte usemap = "#mapJap" 
       width= 800px;
      height = 750px; ></p>


      <!--  COORDONNÉES CARTE -->
      
      <map name= "mapJap">
       
	<area shape = "poly" coords= "573,23, 668 , 78 , 732,78 ,756,110,663,177,585,155,527,165,566,197,530,215,498,173,524,129,570,129" href= "HOKKAIDO.php?lieu=Hokkaido " alt="HOKKAIDO">
	<area shape = "poly" coords ="542,230,582,221,597,249,638,296,620,339,612,392,608,426,560,419,518,428,519,414,537,399,530,381,540,368 ,528,368,522,261" href =" TOHOKU.php?lieu=Tohoku" alt = " TOHOKU ">
	<area shape = "poly" coords= "522,432,558,422,600,426,611,473,579,518,528,504,525,492,488,456" href =" KANTO.php?lieu=Kanto" alt="KANTO">

	<area shape = "poly" coords ="521,362,533,368,527,383,531,399,515,411,515,425,482,450,524,491,530,521,495,543,416,539,378,506,342,513, 350,507,395,446,392,428,414,414,420,444" href =" " alt = "CHIBU ">
	
	<area shape = "poly" coords ="285,507,321,501,333,510,347,522,374,506,390,522,405,530,396,545,416,560,393,569,362,602,326,585,339,555,281,548" href =" " alt = " KANSAI ">

	
	<area shape = "poly" coords ="284,512,276,534,278,549,260,566,245,566,213,573,177,576,167,597,120,591,107,584,123,570,194,522" href =" " alt = "CHUGOKU ">

	<area shape = "poly" coords ="209,587,225,591,242,587,258,573,287,573,305,587,279,614,252,609,230,620,219,642,185,638,176,617" href =" " alt = " SHIKOKU ">

	<area shape = "poly" coords ="102,599,122,609,138,605,165,644,146,669,137,713,107,726,74,722,72,690,92,656,74,638,50,659,32,629,84,611" href =" " alt = " KIUSHU ">

      <a href="#volet" class="ouvrir" >MAP</a>
      <a href="#volet_clos" class="fermer" >MAP</a>
      </map>
    </div>
  </div>





</div>
 <div class ="image_g">
        <img src="paravent1.png" alt="paravent1" />
      </div>
<div class ="DescirptionSite">

     

			<div class ="apparition">

			 DISCOVER OUR WEBSITE
				 
			</div>

			
			
			<div class ="texte-centrale">

				<p> Notre site vous propose une découverte unique du japon . Tout pour que vous puissiez préparer la plus belle des expédition .
				Vous y parviendrez en choisissant parmis une sélection de lieux qui satisfieront vos critères .
			Nos lieux sont décrits et accompagnés avec des images pour vous évitez de switcher entre les site pour connaitre le lieux.De plus chaque lieux est assimilés à la méteo pour la planification des activités extérieurs.</p>

			</div>
      
</div>
<div class ="image_d">
        <img src="paravent2.png" alt="paravent2" />
      </div>
<div class ="textGShanks">
  <p> Ce contenu ne suffit pas ?</p>
</div>
<div class ="image2home">

        <img src="shanks.jpg" alt="paravent2" />
</div>
<div class ="textDShanks">
  <p>  Alors venez affronter le monde sur nos quiz et devenez le futur roi de la connaissance japonaise ! </p>
</div>

<footer> Site projet Web 2020 Designed by Mahdi RANJBAR </footer>
</body>
</html>





















