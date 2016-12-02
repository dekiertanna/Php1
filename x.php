<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>MainPage</title>
    <meta charset="UTF-8">
    <meta name="Generator" content="JTHTML 7.6.2">
     <meta name="Description" content="Prezentacja rozwiazan listy trzeciej">
    <meta name="Keywords" content="labolatorium,webowe,lista3,strona główna">
    <meta name="Author" content="Przemysław Pyzałka">
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
                    <div id="tresc">
                         <h1> Strona główna </h1>
                       <section>
                        <h2> O silnikach slow kilka </h2>
                         <section>
                         <h3>Silnik benzynowy  </h3>
                          <p>
                           Silnik o zapłonie iskrowym (ZI) jest silnikiem cieplnym spalinowym o spalaniu wewnętrznym, w którym spalanie ładunku 
                           zainicjowane jest iskrą powstającą pomiędzy elektrodami świecy zapłonowej[1].           
                          </p>
                         </section>
                         <section>
                         <h3>Silnik diesla</h3>
                          <p>
                          Silnik o zapłonie samoczynnym (znany jako silnik wysokoprężny lub silnik Diesla, ZS) – silnik cieplny spalinowy tłokowy o spalaniu
                          wewnętrznym, w którym ciśnienie maksymalne czynnika jest znacznie większe niż w silnikach niskoprężnych (z zapłonem iskrowym),
                          a do zapłonu paliwa nie jest wymagane żadne zewnętrzne źródło energii, ma miejsce zapłon samoczynny[1].
                          </p>
                         </section>
                       </section>
                       <article> <h2>  Kilka słów na temat strony </h2>
                       <p> Tematyka jeszcze nie została określona jednakże skłaniam się ku stronie opisującej jakiegoś producenta samochodów </p>
                        <section>
                          <h2> Newsy</h2>
                        <article>
                          <h3> Rozbudowa nadchodzi..</h3>   
                        <p>Już niedługo kolejne elementy strony.</p>
                        </article>
                         <article>
                         <h3>Nowe formularze już dostępne</h3>
                          <p> Nowy formularz juz dostepny pod linkiem formularz osobowy </p>
                     
                         </article>
                        </section>
                       </article>
                    </div>
                    <div id="stopka"><footer>Autorstwo: Anna Dekiert Przemysław Pyzałka
                                             źródła: wikipedia.org autocentrum.pl                                                     
                    </footer></div>
               </div>
 
         </div>
  </body>
</html>
