<?php
require("connection.php");

function showUsers()
{
$connection=$conn;


$sql='SELECT * FROM users';

$wynik = @$connection-> query($sql);
if ($wynik === false){
	echo '<p>Zapytanie nie zostało wykonane poprawnie!</p>';
	$connection -> close();
}
else {
     $sum=0; 
     $counter=0;
     echo 'Dane użytkowników: <br>';
	while (($user = $wynik -> fetch_assoc()) !== null){
			echo '<p>Imie: ' . $user['imie'] . '</p>';
			echo '<p>Nazwisko: ' . $user['nazwisko'] . '</p>';
      echo '<p>Login: ' . $user['userlogin'] . '</p>';
      $wiek=date("Y-m-d")-$user['date'];
      echo 'Wiek usera: '.$wiek;
      echo '<p>Data ur: ' . $user['date'] . '</p>';
      echo '<p>E-mail: ' . $user['email'] . '</p>';
      echo '<p>Telefon: ' . $user['telefon'] . '</p>';
			echo '<hr />';
      $sum+=$wiek;
      $counter++;
		}
   $avg= $sum/$counter;
  echo 'Srednia wieku wynosi: '.$avg.'<br>';
    $avg=(int)$avg;
  echo 'Srednia wieku rzutowana na int'.$avg;
}

 echo $sTemp = '5';
 echo '<br>';
 echo $mVar = (string) $sTemp; // $mvar jest typu string (5)
  echo '<br>';
 echo $mVar = $mVar + 8; // $mvar staje się liczbą całkowitą (13)
  echo '<br>';
 echo $mVar = $mVar + 2.2; // $mvar staje się liczbą zmiennoprzecinkową (15.2)
  echo '<br>';
 echo $mVar = 'wynik: ' . $mVar; // $mvar staje się łańcuchem znaków (wynik: 15.2)
  echo '<br>';
 echo $mVar = 3 + '5abcd'; // $mvar staje się liczbą całkowitą (8)
  echo '<br>';

 $arr=array();
 
  for($i=0;$i<100;$i++)
  {
  $arr[$i]=rand();
  }
  $counter=0;
  $countparzyste=0;
  while($counter<40)
  {
  $counter++;
  echo '['.key($arr).'] '.current($arr).'<br>';
  if (current($arr)%2==0)
  {
   echo 'parzysta <br>';
   $countparzyste++;
  }
  else
  {
  if ($countparzyste>5)
   {
   echo 'Parzystych >5 ->reset <br>';
   reset($arr);
   $countparzyste=0;
   }
 
  }
  next($arr);
  }
  
  echo '<br>';
  echo '<br>';
$str = 'foo      o';
$str = preg_replace('/\s\s+/', ' ', $str);
echo $str;
   
 
  
  
}








?>
