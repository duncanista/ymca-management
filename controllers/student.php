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

    if (isset($_POST['id'])) {
        // UPDATE
        $id = $_POST['id'];
        update($fields, $values, $table, "idStudent", $id);
    } else {
        // INSERT
        $id = insert($fields, $values, $table);

        $address_table = "address";
        $address_values = array($id, $street, $city, $state, $zipcode, $refs, $phone);
        $address_fields = array("idStudent", "street", "city", "state", "zipcode", "reference", "contact");
        insert($address_fields, $address_values, $address_table);
        $status_table = "status_student";
        $status_values = array($id, "1", "'2019-12-01'");
        $status_fields = array("idStudent", "studentStatus", "limitDate");
        insert($status_fields, $status_values, $status_table);
    }
}else{
    //
}
?>
