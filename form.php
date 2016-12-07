<?php
	ob_start();
	session_start();
	
	include_once 'connect.php';

	$error = false;

	if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$surname = trim($_POST['surname']);
		$surname = strip_tags($surname);
		$surname = htmlspecialchars($surname);

		$login = trim($_POST['login']);
		$login = strip_tags($login);
		$login = htmlspecialchars($login);

		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);

		$confirmPass = trim($_POST['confirmPass']);
		$confirmPass = strip_tags($confirmPass);
		$confirmPass = htmlspecialchars($confirmPass);

		$dob = trim($_POST['dob']);
		$dob = strip_tags($dob);
		$dob = htmlspecialchars($dob);

		
		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Musisz wpisać imię.";
		} else if (!preg_match("/^[a-zA-Z ]/",$name)) {
			$error = true;
			$nameError = "Imię musi zawierać jedynie litery alfabetu";
		}

		// basic surname validation
		if (empty($surname)) {
			$error = true;
			$surnameError = "Musisz wpisać nazwisko";
		} 
		 else if (!preg_match("/^[a-zA-Z ]/",$surname)) {
			$error = true;
			$surnameError = "Nazwisko musi zawierać jedynie litery alfabetu";
		}

		// basic login validation
		if (empty($login)) {
			$error = true;
			$loginError = "Musisz wpisać login";
		} 
		 else {
			// check login exist or not
			$query = "SELECT userLogin FROM users WHERE userLogin='$login'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$loginError = "Ten login jest już w użyciu.";
			}
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Wprowadź poprawny adres e-mail.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Ten e-mail jest już w użyciu.";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Musisz wpisać hasło";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Hasło musi zawierać przynajmniej 6 znaków.";
		}

		if (empty($confirmPass)){
			$error = true;
			$confirmPassError = "Musisz wpisać hasło";
		}
		else if($pass !=$confirmPass)
		{
			$error = true;
			$confirmPassError = "Hasła nie są identyczne.";
		}
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);

		//date validation
		if(empty($dob))
		{
			$error = true;
			$dobError = "Musisz podać datę urodzenia.";
		}
		else if(!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dob))
		{
			$error = true;
			$dobError = "Data musi być w formacie YYYY-MM-DD.";
		}
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO users(userName,userSurname,userLogin,userEmail,userPass,userDOB) VALUES('$name','$surname','$login','$email','$password','$dob')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Rejestracja zakończona, możesz się teraz zalogować";
				unset($name);
				unset($email);
				unset($pass);
			} else {
				$errTyp = "danger";
				$errMSG = "Coś poszło nie tak. Spróbuj ponownie później";	
			}	
				
		}
		
		
	}
?>

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
									<?php include("loginbar.php");?>
										<div id = "top">
											<div id="pasekgorny">toppasek</div>

										</div>
										<?php include("menu.php"); ?>
										<div id="tresc">



											<div id="login-form">
												<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

														<div class="col-md-12">

															<div class="form-group">
																<h2 class="">Zarejestruj się</h2>
															</div>

															<div class="form-group">
																<hr />
															</div>

															<?php
			if ( isset($errMSG) ) {
				
				?>
															<div class="form-group">
																<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
																		<span class="glyphicon glyphicon-info-sign"/>
																		<?php echo $errMSG; ?>
																	</div>
																</div>
																<?php
			}
			?>

																<div class="form-group">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<span class="glyphicon glyphicon-user"/>
																		</span>
																		<input type="text" name="name" class="form-control" placeholder="Imię" maxlength="50" value="<?php echo $name ?>" />
																			</div>
																			<span class="text-danger">
																				<?php echo $nameError; ?>
																			</span>
																		</div>

																		<div class="form-group">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<span class="glyphicon glyphicon-user"/>
																		</span>
																		<input type="text" name="surname" class="form-control" placeholder="Nazwisko" maxlength="50" value="<?php echo $surname ?>" />
																			</div>
																			<span class="text-danger">
																				<?php echo $surnameError; ?>
																			</span>
																		</div>

																		<div class="form-group">
																	<div class="input-group">
																		<span class="input-group-addon">
																			<span class="glyphicon glyphicon-user"/>
																		</span>
																		<input type="text" name="login" class="form-control" placeholder="Login" maxlength="50" value="<?php echo $login ?>" />
																			</div>
																			<span class="text-danger">
																				<?php echo $loginError; ?>
																			</span>
																		</div>

																		<div class="form-group">
																			<div class="input-group">
																				<span class="input-group-addon">
																					<span class="glyphicon glyphicon-envelope"/>
																				</span>
																				<input type="email" name="email" class="form-control" placeholder="Email" maxlength="40" value="<?php echo $email ?>" />
																					</div>
																					<span class="text-danger">
																						<?php echo $emailError; ?>
																					</span>
																				</div>

																				<div class="form-group">
																					<div class="input-group">
																						<span class="input-group-addon">
																							<span class="glyphicon glyphicon-lock"/>
																						</span>
																						<input type="password" name="pass" class="form-control" placeholder="Wprowadź hasło" maxlength="15" />
																					</div>
																					<span class="text-danger">
																						<?php echo $passError; ?>
																					</span>
																				</div>

																				<div class="form-group">
																					<div class="input-group">
																						<span class="input-group-addon">
																							<span class="glyphicon glyphicon-lock"/>
																						</span>
																						<input type="password" name="confirmPass" class="form-control" placeholder="Wprowadź hasło ponownie" maxlength="15" />
																					</div>
																					<span class="text-danger">
																						<?php echo $confirmPassError; ?>
																					</span>
																				</div>

																				<div class="form-group">
																					<div class="input-group">
																						<span class="input-group-addon">
																							<span class="glyphicon glyphicon-user"/>
																						</span>
																						<input type="text" name="dob" class="form-control" placeholder="Data urodzenia YYYY-MM-DD" maxlength="15" />
																					</div>
																					<span class="text-danger">
																						<?php echo $dobError; ?>
																					</span>
																				</div>

																				<div class="form-group">
																					<hr />
																				</div>

																				<div class="form-group">
																					<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Zarejestruj się</button>
																				</div>

																				<div class="form-group">
																					<hr />
																				</div>

																				<div class="form-group">
																					<a href="login.php">Zaloguj się</a>
																				</div>

																			</div>

																		</form>
																	</div>


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
												<?php ob_end_flush(); ?>
												