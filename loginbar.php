
<?php
if(!isset($_SESSION['loggedIn'])): ?>
			<div class = "signup">
			<div class ="block"><a href="form.php">Zarejestruj się</a></div>
		 	<div class="block"><a href="login.php">Zaloguj się</a></div>
		    </div>
<?php endif;?>
<?php
if(isset($_SESSION['loggedIn'])) :?>
<div class = "signup">
			<div class ="block"><a href="logout.php">Wyloguj się</a></div>
		    </div>
<?php endif;?>