<?php
include_once("./partials/config.php");

class Contact {
    private $host="localhost";
    private $user="root";
    private $db="contact";
    public $mysqli;

    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->db,) ;
    }

    public function contact_us($data) {
        $name=$data['name'];
        $email=$data['email'];
        $text=$data['text'];

        $q="insert into contact_us name='$name', email='$email', text='$text'";

        return $this->mysqli->query($q);
    }

}


?>