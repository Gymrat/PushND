<?php

  class User {

    private $con;
    private $username;

    public function __construct($con, $username) {
        $this->con = $con;
        $this->username = $username;
    }  

    public function getUsername() {
        return $this->username;
    }

     public function getEmail() {
       $query = mysqli_query($this->con, "SELECT email FROM users WHERE ` userName`='$this->username'")or die("Error: ".mysqli_error($this->con));
      $row = mysqli_fetch_array($query);
        return $row['email'];
    }

    public function getFirstAndLastName() {
      $query = mysqli_query($this->con, "SELECT concat(`firstName`, ' ', `lastName`) AS 'name' FROM users WHERE ` userName`='$this->username'")or die("Error: ".mysqli_error($this->con));
      $row = mysqli_fetch_array($query);
      return $row['name'];

    }
  
  }
?>
