<?php
  require_once('../config/config.php');

  $conn = new mysqli($servername, $username, $password);

  if ($conn->connect_error) {
    die($conn->connect_error);
  }

  function simpleQuery($sql){
    return $conn->query($sql);
  }

  function selectAll($table){
    $sql = "SELECT * FROM $table";
    return $conn->query();
  }

  function select($fields, $table){
    $sqlFields = "";
    for($i=0; $i<count($fields)-1; $i++){
      $sqlFields .= $field . ",";
    }
    $sqlFields .= $fields[count($fields)-1];

    $sql = "SELECT $sqlFields FROM $table";
    return $conn->query();
  }

  function insert($fields, $values, $table){
    $sqlFields = "";
    for($i=0; $i<count($fields)-1; $i++){
      $sqlFields .= $fields[$i] . ",";
    }
    $sqlFields .= $fields[count($fields)-1];

    $sqlValues = "";
    for($i=0; $i<count($values)-1; $i++){
      $sqlValues .= $values[$i] . ",";
    }
    $sqlValues .= $values[count($values)-1];

    $sql = "INSERT INTO $table ($fields) VALUES($values)";
    return $conn->query();
  }

  function update($fields, $values, $table, $idField, $id){
    $params = "";
    for( $i = 0 ;$i < count($fields)-1; $i++){
      $params .= $fields[$i]."=".$values[$i].",";
    }
    $sql = "UPDATE $table SET $params WHERE $idField=$id";
    return $conn->query();
  }

  function delete($table, $idField, $id){
    $sql = "DELETE FROM $table WHERE $idField=$id";
    return $conn->query($sql);
  }

 ?>
