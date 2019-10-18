<?php
class config{
    private $user = 'root';
    private $password = '';
    public $pdo = null;

    public function Con(){
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=oct_pd', $this->user, $this->password);
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
        }
        return $this->pdo;
    }
}

?>
