
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Formularz osobowy</title>
    <meta charset="UTF-8">
    <meta name="Description" content="Prezentacja rozwiazan listy trzeciej">
    <meta name="Keywords" content="labolatorium,webowe,lista3,template">
    <meta name="Author" content="Przemysław Pyzałka">
    <meta name="Generator" content="JTHTML 7.6.2">
     <?php include ("skinchooser.php"); ?>
    <script type="text/javascript">

        var scripts=["date.js","gallery.js"];

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
    	  <?php include("loginbar.php");?>
        <div id="pasekgorny"></div>
        <?php include("menu.php"); ?>
		
        <div id="tresc">
		
        <div id="galeria"></div>
		

        </div>
		
        <div id="stopka"><div id="imglinks"></div><footer>Autorstwo: Anna Dekiert Przemysław Pyzałka
            źródła: wikipedia.org autocentrum.pl
        </footer></div>
    </div>

</div>



</body>
</html>
