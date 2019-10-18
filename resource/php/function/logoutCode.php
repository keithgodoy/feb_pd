<?php
class logoutCode{
public function logout(){
if(isset($_GET['logout'])){
  session_destroy();
  header("Location: login.php");
}
}
}
?>
