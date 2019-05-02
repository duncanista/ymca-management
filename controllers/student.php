<?php
$path = dirname(dirname(__FILE__));
$con = "/classes/Database.php";
require_once($path . $con);

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = "'" . $_POST['student_name'] . "'";
    $lastname = "'" . $_POST['student_lastname'] . "'";
    $birthdate = "'" . $_POST['student_date'] . "'";
    $birthplace = "'" . $_POST['student_birth'] . "'";
    $curp = "'" . $_POST['student_curp'] . "'";
    $table = "student";
    $values = array($name, $lastname, $birthdate, $birthplace, $curp);
    $fields = array("name", "lastname", "birthdate", "birthplace", "curp");

    if (isset($_POST['id'])) {
        // UPDATE
        $id = $_POST['id'];
        update($fields, $values, $table, "idStudent", $id);
    } else {
        // INSERT
        insert($fields, $values, $table);
    }
}else{
    //
}
?>
