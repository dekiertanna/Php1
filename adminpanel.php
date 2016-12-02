<?php
include ("showUsers.php");
 ?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Formularz osobowy</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="Description" content="Prezentacja rozwiazan listy trzeciej">
    <meta name="Keywords" content="labolatorium,webowe,lista3,template">
    <meta name="Author" content="Przemysław Pyzałka">
    <meta name="Generator" content="JTHTML 7.6.2">
    <link rel="Stylesheet" href="style.css" type="text/css">
    <script>
       var scripts=["date.js"];
       
			function addScripts(scripts) 
      {	
       scripts.forEach(function(el)
       {
       	var s = document.createElement( 'script' );
				s.src = el;
				document.head.appendChild( s );	
       });			
			}
			document.addEventListener("DOMContentLoaded",addScripts(scripts));	
		</script>
   
  </head>
  <body>
    <div id="baner" class="bordered"></div>
         <div id="tlo">
               <div id="container" class="bordered">
                    <div id="pasekgorny"></div>
                   <?php include("menu.php"); ?>
                    <div id="tresc">
                    <?php showUsers(); ?>
                    
                    </div>
                    
                    <div id="stopka"><footer>Autorstwo: Anna Dekiert Przemysław Pyzałka
                                                                                             
                    </footer></div>
               </div>
 
         </div>
         
         
          
  </body>
</html>
