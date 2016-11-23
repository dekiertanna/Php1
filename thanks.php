
<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Dziękujemy</title>
    <meta charset="UTF-8">
    <meta name="Description" content="Strona zwrotna formularza">
    <meta name="Keywords" content="afterform,thanks">
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
                    <div id="pasekgorny">toppasek</div>
                   <?php include("menu.php"); ?>
                    <div id="tresc"> <h1>Dziękujemy za wypełnienie formularza</h1>

                    

                    </div>
                    <div id="stopka"><footer>Autorstwo: Anna Dekiert Przemysław Pyzałka
                                             źródła: wikipedia.org autocentrum.pl                                                     
                    </footer></div>
               </div>
 
         </div>
  </body>
</html>
