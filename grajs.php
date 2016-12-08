
<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Gra Java Script</title>
    <meta charset="UTF-8">
    <meta name="Description" content="Prezentacja rozwiazan listy piatej">
    <meta name="Keywords" content="labolatorium,webowe,lista5,javascript">
    <meta name="Author" content="Przemysław Pyzałka">
    <meta name="Generator" content="JTHTML 7.6.2">
     <?php include ("skinchooser.php"); ?>
    <script>
       var scripts=["date.js","gra.js","links.js"];
       
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
                        <p>ZGADYWANKA!</p>
                    <p>W pole wpisz liczbę z zakresu 0-999 i odgadnij wylosowaną liczbę</p>
                    <form name="game" novalidate="novalidate">
                      <input id="numberField"  type="number" value="" min="0" max="999" title="liczba-zagadka" >
                      <input id="acceptNumber" type="button" value="Zgaduję">
                    </form>
                    
                    </div>
                    
                    <div id="stopka"><footer>Autorstwo: Anna Dekiert Przemysław Pyzałka
                                             źródła: wikipedia.org autocentrum.pl                                                     
                    </footer></div>
               </div>
 
         </div>
         
         
          
  </body>
</html>
