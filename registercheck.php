
<?php
/*
Funkcje sprawdzajace zwracaja 1 jesli wystapil blad, zero jesli nie
*/
session_start();
require("toptemplate.php");
require("connection.php");
const TEXTPATTERN='/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹĆŻ]*$/D';
const TEXTNUMBERPATTERN='/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹĆŻ0-9]{3,15}$/D';
const PASSWORDPATTERN='/^[a-zA-ZąćęłńóśźżĄĆĘŁŃÓŚŹĆŻ0-9]{5,12}$/D';
const DATEPATTERN='/^\d{4}\-\d{2}\-\d{2}$/';
const EMAILPATTERN='/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,8}$/D';
const TELPATTERN='/^[0-9]{9,13}$/D';
$errorCounter=0;

function hasEmptyFields()
{
if (isset($_POST["submit"])) {

   while (list ($klucz, $wartosc) = each ($_POST)) {
        $_SESSION[$klucz]=$_POST[$klucz];
        if (empty($wartosc))  
        {
        echo "<p style=\"color:red\">Musisz wypełnić wszystkie pola!</p>"; 
        return 1;        
        } 
}
}
echo "<p style =\"color:green\">Wypelniono wszystkie pola.</p>";
return 0;
}

function checkField($fieldName, $pattern)
{
 
   if(preg_match($pattern, $_POST[$fieldName]))
   {
   echo $fieldName.' poprawne <br>';
   return 0;
   }
   else
   {
   echo $fieldName.' niepoprawny format <br> ';
   return 1;
   }
} 
function comparePasswords($p1,$p2)
{
if ($p1!==$p2)
{
echo 'Hasla nie sa identyczne!!';
return 1;
}
else
{
return 0;
}
}

function wypiszModele()
{
if(isset($_POST['modele']))
{
  for($i=0; $i<count($_POST['modele']);$i++)
  {
  echo $_POST['modele'][$i].'<br />';
  }
}
else
{
  echo 'Nie wybrano preferowanych modeli <br />';
}
}

function dajIpGoscia()
{

 if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))  // jesli jest proxy
  {
  $ip =$_SERVER['HTTP_X_FORWARDED_FOR']; 
  }
        elseif (isset($_SERVER['HTTP_CLIENT_IP']))
        {
         $ip = $_SERVER['HTTP_CLIENT_IP']; 
        }   
            else
            {
            $ip=$_SERVER['REMOTE_ADDR'];
            }
      

$host = gethostbyaddr($ip);

return 'Adres IP: '.$ip. ' <br> Host: '.$host;
}

function showUser($user)
{
echo 'Wartosci formularza: <br />';
foreach ($user as $wartosc)
echo $wartosc.'<br />';
}

function insertUser($user,$connection)
{
    $connection->query("SET CHARACTER SET utf8");
    
$sql = "INSERT INTO users (imie,nazwisko,userlogin,haslo,date,email,telefon,wyksztalcenie)
VALUES ('$user[0]','$user[1]','$user[2]','$user[3]','$user[4]','$user[5]','$user[6]','$user[7]')";




if ($connection->query($sql) === TRUE) 
{
    echo 'Dodano usera <br />';
    session_destroy();
} 
else 
{
    echo "Error: " . $sql . "<br>" . $connection->error;
}
 
}


$errorCounter+=hasEmptyFields();
$errorCounter+=checkField('imie',TEXTPATTERN);
$errorCounter+=checkField('nazwisko',TEXTPATTERN);
$errorCounter+=checkField('userlogin',TEXTNUMBERPATTERN);
$errorCounter+=checkField('haslo',PASSWORDPATTERN);
$errorCounter+=comparePasswords($_POST['haslo'],$_POST['haslo_confirm']);
$errorCounter+=checkField('date',DATEPATTERN);
$errorCounter+=checkField('e-mail',EMAILPATTERN);
$errorCounter+=checkField('telefon',TELPATTERN);
if($errorCounter==0)
{
echo 'Formularz zaakceptowany <br /><br />';
$connection=connect('','user','','page');
$user=array ($_POST['imie'],$_POST['nazwisko'],$_POST['userlogin'],$_POST['haslo'],$_POST['date'],$_POST['e-mail'],$_POST['telefon'],$_POST['wyksztalcenie']);
showUser($user);
insertUser($user,$connection);



if (isset($connection))
mysqli_close($connection); 
// zamykam połączenie
}
else
{
echo'<p><a href=form.php>Powrót do formularza</a></p>';
}

wypiszModele();
echo dajIpGoscia();

require("downtemplate.php");

?>
