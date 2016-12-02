<?php
function connect($mysql_server,$mysql_admin,$mysql_pass,$mysql_db) {
    
    $connection=mysqli_connect($mysql_server, $mysql_admin, $mysql_pass,$mysql_db)
    or die('Brak połączenia z serwerem MySQL.');
    // łączymy się z bazą danych
    if (isset($connection))
    return $connection;
    
} 




?>
