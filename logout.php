<?PHP

session_start();

if(isset($_COOKIE['session_id']) && isset($_SESSION['admin_id'])){
   setcookie('session_id', session_id(), time() - 360, "/");
   unset($_SESSION['admin_id']);
}
session_destroy();

header("Location: x.php");

?>
