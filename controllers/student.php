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

    $street = "'" . $_POST['student_street'] . "'";
    $city = "'" . $_POST['student_city'] . "'";
    $state = "'" . $_POST['student_state'] . "'";
    $zipcode = "'" . $_POST['student_zipcode'] . "'";
    $refs = "'" . $_POST['student_refs'] . "'";
    $phone = "'" . $_POST['student_phone'] . "'";


    $table = "student";
    $values = array($name, $lastname, $birthdate, $birthplace, $curp);
    $fields = array("name", "lastname", "birthdate", "birthplace", "curp");

    $address_table = "address";
    $address_fields = array("idStudent", "street", "city", "state", "zipcode", "reference", "contact");

    $status_table = "status_student";
    $status_fields = array("idStudent", "studentStatus", "limitDate");

    if (isset($_POST['id'])) {
        // UPDATE
        $id = $_POST['id'];
        $status = $_POST["student_status"];
        $address_values = array($id, $street, $city, $state, $zipcode, $refs, $phone);
        $status_values = array($id, $status, "NOW()");
        update($fields, $values, $table, "idStudent", $id);
        update($address_fields, $address_values, $address_table, "idStudent", $id);
        update($status_fields, $status_values, $status_table, "idStudent", $id);
        
    } else {
        // INSERT
        $id = insert($fields, $values, $table);

        
        $address_values = array($id, $street, $city, $state, $zipcode, $refs, $phone);
        insert($address_fields, $address_values, $address_table);
        
        $status_values = array($id, "1", "'2019-12-01'");
        insert($status_fields, $status_values, $status_table);
    }
}else{
    //
}
?>
