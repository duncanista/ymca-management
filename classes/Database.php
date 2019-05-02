<?php
$path = dirname(dirname(__FILE__));
$con = "/config/config.php";
require_once($path . $con);


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function formatParams($params){
    $sqlParams = "";
    for ($i=0; $i<count($params)-1; $i++) {
        $sqlParams .= $params[$i] . ",";
    }
    $sqlParams .= $params[count($params)-1];
    return $sqlParams;
}

function simpleQuery($sql){
    global $conn;
    return $conn->query($sql);
}

function selectAll($table){
    global $conn;
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    if ($result->num_rows >= 1) {
        return $result;
    }
}

function select($fields, $table){
    global $conn;
    $sqlFields = formatParams($fields);
    $sql = "SELECT $sqlFields FROM $table";
    return $conn->query($sql);
}

function selectByFielf($table, $field, $value){
    global $conn;
    $sqlFields = formatParams($fields);
    $sql = "SELECT * FROM $table WHERE $field='$value'";
    return $conn->query($sql);
}

function selectStudents(){
    global $conn;
    $sql = "SELECT s.idStudent, s.name, s.lastname, s.birthdate, s.curp, e.name AS birthplace, t.name AS status
    FROM student AS s
    INNER JOIN address AS a ON a.idStudent = s.idStudent
    INNER JOIN states AS e ON e.idState = a.state
    INNER JOIN status_student AS u ON u.idStudent = s.idStudent
    INNER JOIN status_types AS t ON t.idStatus = u.studentStatus
    ORDER BY s.idStudent";
    return $conn->query($sql);
}

function insert($fields, $values, $table)
{
    global $conn;
    $sqlFields = formatParams($fields);

    $sqlValues = formatParams($values);

    $sql = "INSERT INTO $table ($sqlFields) VALUES($sqlValues)";
    if($result = $conn->query($sql)){
        $id =  $conn->insert_id;

        return $id;
    }
    else {
      http_response_code(400);
    }
}

function update($fields, $values, $table, $idField, $id){
    global $conn;
    $params = "";
    for ($i = 0 ;$i < count($fields)-2; $i++) {
        $params .= $fields[$i]."=".$values[$i].",";
    }
    $params .= $fields[$i]."=".$values[$i];
    $sql = "UPDATE $table SET $params WHERE $idField=$id";
    echo $sql;
    if($result = $conn->query($sql)){
      echo "Éxito";
      return $result;
    }
    else {
      http_response_code(400);
    }
}

function delete($table, $idField, $id){
    global $conn;
    $sql = "DELETE FROM $table WHERE $idField=$id";
    return $conn->query($sql);
}
?>
