<?php
	
	session_start();
	if(!isset($_SESSION['userId'])){
   header("Location:login.php");
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
									<?php include("loginbar.php");?>
										<div id = "top">
											<div id="pasekgorny">toppasek</div>

										</div>
										<?php include("menu.php"); ?>
										<div id="tresc">
												<h2> Dane użytkownika:</h2>


											<div class = "row">
											<div class ="block">Imię:</div>
											<div class="block"><input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['name']); ?>" readonly></div>
											</div>
											
											<div class = "row">
											<div class ="block">Nazwisko:</div>
											<div class="block"><input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['surname']); ?>" readonly></div>
											</div>
											
											<div class = "row">
											<div class ="block">Login:</div>
											<div class="block"><input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['login']); ?>" readonly></div>
											</div>

											<div class = "row">
											<div class ="block">E-mail:</div>
											<div class="block"><input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" readonly></div>
											</div>

											<div class = "row">
											<div class ="block">Data urodzenia:</div>
											<div class="block"><input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['dob']); ?>" readonly></div>
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
												