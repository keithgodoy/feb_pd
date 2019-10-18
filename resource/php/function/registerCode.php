<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/feb_pd/resource/php/db/config.php';
class register extends config{
    public $username;
    public $password;
    public $email;

public function __construct($username=null,$password=null,$email=null){
  $this->username = $username;
  $this->password = $password;
  $this->email = $email;
}

public function register(){
    $config = new config;
    $pdo = $config ->Con();
    $username = $this->username;
    $password = $this->password;
    $email = $this->email;
    $sql = "INSERT INTO `oct`(`username`, `password`, `email`) VALUES (?,?,?)";
    $data = $pdo->prepare($sql);
    $data->execute([$username,$password,$email]);
}
}
?>
