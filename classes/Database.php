<?php
require_once('config/config.php');

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
function selectStudents(){
    global $conn;
    $sql = "SELECT s.idStudent, s.name, s.lastname, s.birthdate, s.curp, e.name AS birthplace, t.name AS status
    FROM student AS s 
    INNER JOIN address AS a ON a.idStudent = s.idStudent 
    INNER JOIN states AS e ON e.idState = a.state
    INNER JOIN status_student AS u ON u.idStudent = s.idStudent
    INNER JOIN statusTypes AS t ON t.idStatus = u.studentStatus";
    return $conn->query($sql);
}

function insert($fields, $values, $table)
{
    global $conn;
    $sqlFields = formatParams($fields);

    $sqlValues = formatParams($values);

    $sql = "INSERT INTO $table ($sqlFields) VALUES($sqlValues)";
    return $conn->query($sql);
}

function update($fields, $values, $table, $idField, $id){
    global $conn;
    $params = "";
    for ($i = 0 ;$i < count($fields)-1; $i++) {
        $params .= $fields[$i]."=".$values[$i].",";
    }
    echo "llegué";
    $sql = "UPDATE $table SET $params WHERE $idField=$id";
    return $conn->query($sql);
}

function delete($table, $idField, $id){
    global $conn;
    $sql = "DELETE FROM $table WHERE $idField=$id";
    return $conn->query($sql);
}
