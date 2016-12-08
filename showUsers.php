<?php
require_once 'connect.php';

function showUsers()
{



$res=mysql_query("SELECT userId, userName, userSurname, userLogin, userEmail, userPass, userDOB FROM users");

     $sum=0; 
     $counter=0;
     echo 'Dane użytkowników: <br>';
	while ($user = mysql_fetch_array($res))
        {
			echo '<p>Imie: ' . $user['userName'] . '</p>';
			echo '<p>Nazwisko: ' . $user['userSurname'] . '</p>';
      echo '<p>Login: ' . $user['userLogin'] . '</p>';
      echo '<p>Date : '.$user['userDOB'].'</p>';
      echo '<p>Password: ' . $user['userPass'] . '</p>';
      echo '<p>E-mail: ' . $user['userEmail'] . '</p>';
     
			echo '<hr />';
      $sum+=$wiek;
      $counter++;
		}
   $avg= $sum/$counter;
  echo 'Srednia wieku wynosi: '.$avg.'<br>';
    $avg=(int)$avg;
  echo 'Srednia wieku rzutowana na int'.$avg;


 
  
}








?>
