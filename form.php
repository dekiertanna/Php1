<?php session_start(); ?>
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
											<form name="register" action="registercheck.php" method="post" autocomplete="on">
											
												<label>
													<input type="text" name="imie"  autofocus
                           value="<?php echo $wynik = isset($_SESSION['imie']) ? $_SESSION['imie'] : ''; ?>">Imię </label>
													<br>
                          
														<label>
															<input type="text" name="nazwisko"
                              value="<?php echo $wynik = isset($_SESSION['nazwisko']) ? $_SESSION['nazwisko'] : ''; ?>" >Nazwisko</label>
															<br>
																<label>
																	<input type="text" name="userlogin"
                                  value="<?php echo $wynik = isset($_SESSION['userlogin']) ? $_SESSION['userlogin'] : ''; ?>" >Login - dlugosc 3-15 zawiera litery i liczby bez znaków specjalnych</label>
																	<br>
																		<label id="haslo">
																			<input type="password" id="pass1" name="haslo" onblur="checkPass();">Hasło - długość 5-12 znaków składa się z liter i liczb</label>
																			<br>
																				<label>
																					<input type="password" id="pass2" name="haslo_confirm" onblur="checkPass()">Potwierdź hasło</label>
																					<br>
																						<label>
																							<input type="date" name="date"
                                              value="<?php echo $wynik = isset($_SESSION['date']) ? $_SESSION['date'] : ''; ?>"
                                               >Data urodzenia w formacie yyyy-mm-dd</label>
																							<br>    

																								<label>
																									<input type="email" name="e-mail"
                                                  value="<?php echo $wynik = isset($_SESSION['e-mail']) ? $_SESSION['e-mail'] : ''; ?>"
                                                   >Twój e-mail</label>
																									<br>
																										<label>
																											<input type="tel" name="telefon"
                                                      value="<?php echo $wynik = isset($_SESSION['telefon']) ? $_SESSION['telefon'] : ''; ?>"
                                                       >Twój telefon </label>
																											<br>	
                                                      <br>
                                                      
                                                   
                                                    
                                                   <label>Twoje wykształcenie:<br /></label>
                                                   <input type="radio" name="wyksztalcenie" value="podstawowe">Podstawowe<br />
                                                   <input type="radio" name="wyksztalcenie" value="gimnazjalne">Gimnazjalne<br />
                                                   <input type="radio" name="wyksztalcenie" value="zawodowe">Zawodowe<br />
                                                   <input type="radio" name="wyksztalcenie" value="średnie">Średnie<br />
                                                   <input type="radio" name="wyksztalcenie" value="wyższe">Wyższe <br />
                                                      
                                                  <br />    
                                                  <label>  Wybierz kilka ulubionych modeli samochodów:<br /></label>
                                                  <select id="modellist" class="selectlist" multiple="multiple" name="modele[]">
                                                  
                                                   <optgroup label="Fiat">
                                                   	<option>Punto</option>
                                                    <option>Panda</option>
                                                    </optgroup>
                                                    <optgroup label="Renault">
                                                   	<option>Megane</option>
                                                    <option>Clio</option>
                                                    </optgroup> 
                                                    <optgroup label="Audi">
                                                   	<option>A4</option>
                                                    <option>A8</option>
                                                    </optgroup> 
                                                    <optgroup label="Honda">
                                                   	<option>Civic</option>
                                                    <option>Jazz</option>
                                                    </optgroup>  
                                                  </select>
                                                
                                                  <br />
                                                  
																												<label>
																													<input name="checkbox" type="checkbox" class="checkboxes"  title="Checkbox" required>Oświadczam, że ukończyłem/am 13 lat.</label>
																													<br>
                                                        <label>
                                                     
                                                        <input type="submit" name="submit" value="Rejestruj">
                                                        
                                                            </label>
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
																									
