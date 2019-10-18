<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resource/php/db/config.php';
session_start();
class updateCode extends config{
  public function __construct($oldpassword=null,$newpassword=null){
    $this->oldpassword = $oldpassword;
    $this->newpassword = $newpassword;
  }

public function update(){
    $config = new config;
    $pdo = $config ->Con();
    $username2 = $_SESSION['username'];
    $oldpassword = $this->oldpassword;
    $sql = "SELECT * FROM `oct` WHERE `username` = '$username2'";
    $data = $pdo->prepare($sql);
    $data->execute();
    $rows = $data->fetchAll(PDO::FETCH_OBJ);
    foreach ($rows as $row) {
      $password = $row->password;
    }
  if ($oldpassword == $password) {
    $newpassword = $this->newpassword;
    $sql = "UPDATE `oct` SET `password` = '$newpassword' WHERE `username` = '$username2'";
    $data=$pdo->prepare($sql);
    $data->execute();
  }
}
}
?>
