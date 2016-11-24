
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



											<h1>Formularz rejestracji</h1>
											<form name="register" action="thanks.php" autocomplete="on">
												<!-- link do php obslugujacego form -->
												<label>
													<input type="text" name="imie" required autofocus>Imię</label>
													<br>
														<label>
															<input type="text" name="nazwisko" required>Nazwisko</label>
															<br>
																<label>
																	<input type="text" name="login" required>Login</label>
																	<br>
																		<label id="haslo">
																			<input type="password" id="pass1" name="haslo" required onblur="checkPass();">Hasło</label>
																			<br>
																				<label>
																					<input type="password" id="pass2" name="haslo_confirm" required onblur="checkPass()">Potwierdź hasło</label>
																					<br>
																						<label>
																							<input type="date" name="date" >Data urodzenia </label>
																							<br>    

																								<label>
																									<input type="email" name="email " required>Twój email</label>
																									<br>
																										<label>
																											<input type="tel" name="telefon" pattern="[0-9]{9}">Twój telefon </label>
																											<br>


																												<label>
																													<input name="checkbox" type="checkbox" class="checkboxes"  title="Checkbox" required>Oświadczam, że ukończyłem/am 13 lat.</label>
																													<br>

																														<input type="submit">
																														</form>


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
																									