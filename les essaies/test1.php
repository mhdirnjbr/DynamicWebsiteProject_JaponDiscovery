<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width"/>
<link href = "fichierSuppProjet.css" rel = "stylesheet" />
aaa
<style type="text/css">

#content-display {
   background :rgb(234, 234, 234) none repeat scroll 0 0;
    border: 1px solid #cecece;
    bottom: 37px;*/
    top:220px;
    color:     #585657;
    padding: 10px;
    position: fixed;
    right: -313px;
    transition: all 0.5s ease-in 0s;
    -webkit-transition:all 0.5s ease-in 0s;/* Safari */
    width: 290px;
}
#content-display:target {
    right: 0;
}
#content-nodisplay {
    position: relative;
    z-index: 10;
}
#content-display a.open-content, #content-display a.close-content {
    background: @green none repeat scroll 0 0;
    color: hsl(0, 0%, 100%);
    font-size: 1.2em;
    padding: 15px 25px;
    text-decoration: none;
}
#content-display a.open-content, #content-display a.close-content {
    border-radius: 8px 8px 0 0;
    font-weight: bold;
    left: -166px;
    position: absolute;
    top: 113px;
    transform: rotate(270deg);
     -ms-transform: rotate(270deg); /* IE 9 */
    -webkit-transform: rotate(270deg); /* Chrome, Safari, Opera */
}
#content-display a.close-content {
    display: none;
    left: -57px;
    top: 3px;
}
#content-nodisplay:target #content-display {
    right: -313px;
}
#content-display:target a.open-content {
    display: none;
}
#content-display:target a.close-content {
    display: block;
}
</style>
</head>

<body>
<div id ="content-nodisplay">
    <div id ="content-display">
        <div> contenu perso </div>
<a href ="#content-display" class ="open-content" aria-hidden="true" >donnez votre avis </a>
<a href ="#content-nodisplay" class ="close-content" aria-hidden="true" >X</a>
        </div>
</div>
</body>
</html>
