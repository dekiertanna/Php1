
<?php
if(!isset($_SESSION['admin_id']) &&!isset($_SESSION['loggedIn']) ): ?>
			<div class = "signup">
			<div class ="block"><a href="form.php">Zarejestruj się</a></div>
		 	<div class="block"><a href="login.php">Zaloguj się</a></div>
		    </div>
<?php endif;?>
<?php
if(isset($_SESSION['loggedIn'])) :?>
<div class = "signup">
			<div class ="block"><a href="logout.php">Wyloguj się</a></div>
      <div class ="block"><a href="userPage.php">Ustawienia użytkownika</a></div>
      <div class ="block"><span>Witaj <?php echo $_SESSION['name'] ?></span></div>
</div>
<?php endif;?>
<?php
if(isset($_SESSION['admin_id'])) :?>
<div class = "signup">
			<div class ="block"><a href="logout.php">Wyloguj się</a></div>
      <div class ="block"><a href="adminpanel.php">Admin Panel</a></div>
      <div class ="block"><span>Witaj administratorze <?php echo $_SESSION['admin_id'] ?></span></div>
</div>
<?php endif;?>
