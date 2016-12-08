
<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Formularz osobowy</title>
		<meta charset="UTF-8">
			<meta name="Description" content="Prezentacja rozwiazan listy trzeciej">
				<meta name="Keywords" content="labolatorium,webowe,lista3,formularz">
					<meta name="Author" content="Przemysław Pyzałka">
						<meta name="Generator" content="JTHTML 7.6.2">
							 <?php include ("skinchooser.php"); ?>
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
								
								<div id="baner" class="bordered"/></div>
								<div id="tlo">
									<div id="container" class="bordered">
											<?php include("loginbar.php");?>
											<div id="pasekgorny">toppasek</div>

										
										<?php include("menu.php"); ?>
										<div id="tresc">



											<h1>Wpis do księgi gości</h1>
											<form name="guest" action="thanks.php" autocomplete="on">
												<!-- link do php obslugujacego form -->
												
													Imię lub psuedonim: <input type="text" name="nick" required>
													<input type="submit">
													<br>
														<script type="text/javascript">
												function showValue(newValue)
												{
													document.getElementById("range").innerHTML=newValue;
												}
														</script>
														<label>
															<input type="range" name="mark" min="0" max="5" value="0" onchange="showValue(this.value)">Oceń stronę</label>
															<br>
																<span id="range">0</span>
																<br>


																	
																	</form>
																	<textarea required rows="5" cols="50" name="comment" form="guest">Napisz swoją opinię...</textarea>


																</div>

																<div id="stopka">
																	<footer>Autorstwo: Anna Dekiert Przemysław Pyzałka
                                             źródła: wikipedia.org autocentrum.pl                                                     
																	</footer>
																</div>
															</div>

														</div>



													</body>
												</html>
												
