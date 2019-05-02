<?php
require_once('../classes/Database.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = "'".$_POST['name']."'";
    $lastname = "'".$_POST['lastname']."'";
    $birthdate = "'".$_POST['birthdate']."'";
    $birthplace = "'".$_POST['birthplace']."'";
    $curp = "'".$_POST['curp']."'";
    $table = "student";
    $values = array($name, $lastname, $birthdate, $birthplace, $curp);
    $fields = array("name", "lastname", "birthdate", "birthplace", "curp", "address");

    if (isset($_POST['id'])){
      // UPDATE
      $id = $_POST['id'];
      update($fields, $values, $table, "idStudent", $id);
    }else{
      // INSERT
      insert($fields, $values, $table);
    }
}

 ?>
