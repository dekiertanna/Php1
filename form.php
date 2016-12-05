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
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
			$res = mysql_query($query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($email);
				unset($pass);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
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



											<div id="login-form">
												<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

														<div class="col-md-12">

															<div class="form-group">
																<h2 class="">Sign Up.</h2>
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
																		<input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
																			</div>
																			<span class="text-danger">
																				<?php echo $nameError; ?>
																			</span>
																		</div>

																		<div class="form-group">
																			<div class="input-group">
																				<span class="input-group-addon">
																					<span class="glyphicon glyphicon-envelope"/>
																				</span>
																				<input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
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
																						<input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
																					</div>
																					<span class="text-danger">
																						<?php echo $passError; ?>
																					</span>
																				</div>

																				<div class="form-group">
																					<hr />
																				</div>

																				<div class="form-group">
																					<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
																				</div>

																				<div class="form-group">
																					<hr />
																				</div>

																				<div class="form-group">
																					<a href="index.php">Sign in Here...</a>
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
												