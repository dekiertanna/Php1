<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>Modele samochodow</title>
    <meta charset="UTF-8">
    <meta name="Description" content="Prezentacja rozwiazan listy trzeciej">
    <meta name="Keywords" content="labolatorium,webowe,lista3,template">
    <meta name="Author" content="Przemysław Pyzałka">
    <meta name="Generator" content="JTHTML 7.6.2">
     <?php include ("skinchooser.php"); ?>
      <script>
          var scripts=["date.js","node.js"];

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
  <body onmousemove="mouseMoving(event)">
    <div id="baner" class="bordered"></div>
         <div id="tlo">
               <div id="container" class="bordered">
                    <div id="pasekgorny">toppasek</div>
                    <?php include("menu.php"); ?>
					<div id="tresc">
					 <h1 onmousedown="isCtrlPressed(event)" id = "bigheading" class = "highlighted">
         [bigheading] Modele samochodów</h1>
      <h3 onmouseenter="isShiftPressed(event)" id = "smallheading">[smallheading] Ferrari</h3>
      <p id = "para1">[para1] Ferrari 250 GTO samochód sportowy wyprodukowany przez firmę Ferrari w małej serii w latach 60. XX wieku[2]. Uznawany za jeden z najsłynniejszych modeli firmy i obecnie za najdroższy model tej marki. Produkowany w latach 1962-1964[1], zasłynął w wielu wyścigach gdzie głównym konkurentem był Aston Martin DB4 GTZ. Pierwsza generacja 250 GTO miała charakterystyczne trzy wloty powietrza na masce pomiędzy wlotami tuż ponad chłodnicą.</p>
      <p id = "para2">[para2] Ferrari Modulo samochód koncepcyjny/supersportowy zaprezentowany w 1970 roku na Geneva Motor Show. Projekt stworzono w 1967. Pojazd został skonstruowany przez Ferrari i Pininfarina. Zamontowano w nim drzwi Canopy takie jak w Maserati Birdcage 75th i Saab Aero-X. Do napędu użyto jednostki V12  5,0 l DOHC 48V generującej moc maksymalną 550 KM. Wysokość samochodu wynosi 934 mm, szerokość 2048 mm, rozstaw osi 2400 mm, a dłuhość 4480 mm. Typ nadwozia to 1-drzwiowe coupe.</p>
      <p id = "para3">[para3] Ferrari F50 GT  wyścigowa wersja Ferrari F50 przeznaczona do walki w najsilniejszej wówczas klasy samochodów drogowych GT1. F50 GT wyposażony był w silnik o mocy 750 KM i rozpędzał się do 100 km/h w 2,9 sekundy, natomiast prędkość maksymalna wynosiła ponad 370 km/h[1]. Samochód został także odchudzony i zmodyfikowany do walki z bolidami takimi jak Mercedes CLK-GTR, McLaren F1 GTR czy Porsche 911 GT1.</p>
      
      <div id = "nav" class = "nav">
         <form action = "#">
            <p><input type = "text" id = "gbi" value = "bigheading">
               <input type = "button" value = "Get By id"
                  id = "byIdButton"></p>
            <p><input type = "text" id = "ins">
               <input type = "button" value = "Wstaw przed"
                  id = "insertButton"></p>
            <p><input type = "text" id = "append">
               <input type = "button" value = "Dołącz elem. Child"
                  id = "appendButton"></p>
            <p><input type = "text" id = "replace">
               <input type = "button" value = "Zamień bieżący"
                  id = "replaceButton"></p>
            <p><input type = "button" value = "Usuń bieżący"
                  id = "removeButton"></p>
            <p><input type = "button" value = "Pobierz rodzica"
                  id = "parentButton"></p>
             <p><input type = "button" value = "Podswietl dzieci divtresc"
                       id = "showChilds"></p>
         </form>

          <form  action="#" onsubmit = "return sprawdzFormularz (this)" onreset = "return czyZresetowac(this)">
		  <label> <input type="text" name="imie" autofocus>Imię</label><br>
             <label for="tlodiva">Tlo diva tresc</label>
              <select id="tlodiva">
                  <option value="red">Red</option>
                  <option value="green">Green</option>
                  <option value="blue">Blue</option>
              </select>

              <input type="submit" id="submittlo"  value="OK">
			  <input type="reset" id="resettlo" value="Reset">
              </form>
          <form>
              <label for="kolortekstu">Kolor tekstu</label>
              <select id="kolortekstu">
                  <option value="violet">Violet</option>
                  <option value="orange">Orange</option>
                  <option value="gray">Gray</option>
              </select>

              <input type="submit" id="submittekst" value="OK">
          </form>
          <form>
              <label for="rodzajczcionki">Rodzaj czcionki</label>
              <select id="rodzajczcionki">
                  <option value="Arial">Arial</option>
                  <option value="Broadway">Broadway</option>
                  <option value="Calibri">Calibri</option>
              </select>

              <input type="submit" id="czcionka"  value="OK">
			  
			  <input type="text" id="x" value="x">
			  <input type="text" id="y" value="y">

          </form>
		  
		 </div>
		 
      </div>
                    
                    <div id="stopka"><footer>Autorstwo: Anna Dekiert Przemysław Pyzałka
                                             Źródła: wikipedia.org autocentrum.pl
                    </footer></div>
					<div id = "links" class="links"></div>
                  </div>
 
         </div>
  </body>
</html>
