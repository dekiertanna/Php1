
<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Formularz osobowy</title>
		<meta charset="UTF-8">
			<meta name="Description" content="Prezentacja rozwiazan listy trzeciej">
				<meta name="Keywords" content="labolatorium,webowe,lista3,formularz">
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
								<script>
								function checkPass(){
									var pass1 = document.forms["register"]["haslo"].value;
									var pass2 = document.forms["register"]["haslo_confirm"].value;
									var p1 = document.getElementById("pass1")
									var p2 = document.getElementById("pass2")
										if(pass1 == pass2)
										{
											p1.style.backgroundColor = "green";
											p2.style.backgroundColor = "green";


										}
										else{
											p1.style.backgroundColor = "red";
											p2.style.backgroundColor = "red";
										}

								}
								</script>
								<div id="baner" class="bordered"/>
								<div id="tlo">
									<div id="container" class="bordered">
										<div id = "top">
											<div id="pasekgorny">toppasek</div>

										</div>
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
												