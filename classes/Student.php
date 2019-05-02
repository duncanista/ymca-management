<?php
require_once('Database.php');

class Student{
    public static $fields = array("idStudent", "name", "lastname", "birthdate", "curp", "address");

    public function __construct(){
    }

    public function displayAllStudents($result){
        $fields = array("idStudent", "name", "lastname", "birthdate", "curp", "birthplace", "status");
        while ($row = $result->fetch_assoc()) {
            echo  "<tr>";
            for ($i = 0; $i < count($fields); $i++) {
                  if($fields[$i] != "status"){
                        echo "<td>" . $row[$fields[$i]]. "</td>";
                  }else{
                        $status = $row[$fields[6]];
                        $class = "info";
                        switch ($status):
                              case "Registrado":
                                    $class = "success";
                              break;
                              case "Baja temporal":
                                    $class = "warning";
                              break;
                              case "Baja definitiva":
                                    $class = "danger";
                              break;
                              default:
                              break;
                        endswitch;
                        echo "<td><span class='badge badge-".$class."'>".$status."</span></td>";
                  }
            }
            $id = $row["idStudent"];
            $name = $row["name"];
            $lastname = $row["lastname"];
            $birthdate = $row["birthdate"];
            $birthplace = $row["birthplace"];
            $curp = $row["curp"];
            $status = $row["status"];
            echo "
            <td>

                  <a href='#' class='badge badge-warning' data-toggle='modal' data-target='#modifyModal$id'>Modificar</a>
                  <a href='#' class='badge badge-danger' data-toggle='modal' data-target='#deleteModal$id'>Borrar</a>
            </td>
                  <!-- Modify -->
                  <div class='modal fade' id='modifyModal$id' tabindex='-1' role='dialog' aria-labelledby='modifyModal$id'
                        aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-scrollable' role='document'>
                        <div class='modal-content'>
                              <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalScrollableTitle'>Modificar alumno - $id</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                              </div>
                              <div class='modal-body'>
                                    <form class='' action='' method='post'>
                                    <input name='id' type='hidden' class='form-control' aria-describedby='basic-addon3' value='$id'>

                                    <label for='basic-url'>Nombre</label>
                                    <div class='input-group mb-3'>
                                          <input name='name' type='text' class='form-control' aria-describedby='basic-addon3'
                                                value='$name'>
                                    </div>
                                    <label for='basic-url'>Apellidos</label>
                                    <div class='input-group mb-3'>
                                          <input name='lastname' type='text' class='form-control' aria-describedby='basic-addon3'
                                                value='$lastname'>
                                    </div>
                                    <label for='basic-url'>Fecha de Nacimiento</label>
                                    <div class='input-group mb-3'>
                                          <input name='birthdate' type='date' class='form-control' aria-describedby='basic-addon3'
                                                value='$birthdate'>
                                    </div>
                                    <label for='basic-url'>Lugar de Nacimiento</label>
                                    <div class='input-group mb-3'>
                                          <input name='birthplace' type='text' class='form-control' aria-describedby='basic-addon3'
                                                value='$birthplace'>
                                    </div>
                                    <label for='basic-url'>CURP</label>
                                    <div class='input-group mb-3'>
                                          <input name='curp' type='text' class='form-control' aria-describedby='basic-addon3'
                                                value='$curp'>
                                    </div>
                                    <label for='basic-url'>Puesto</label>
                                    <div class='input-group mb-3'>
                                          <div class='input-group-prepend'>
                                                <label class='input-group-text' for='inputGroupSelect01'>Trabajo</label>
                                          </div>
                                          <select class='custom-select' id='inputGroupSelect01'>
                                                <option selected>Escoja...</option>
                                                <option value='1'>Trabajador</option>
                                                <option value='2'>No trabaja</option>
                                                <option value='3'>Quizá trabaja</option>
                                          </select>
                                    </div>
                              </div>
                              <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cerrar</button>
                                    <input type='submit' class='btn btn-principal btn-sm' name='' value='Guardar Cambios'>
                              </div>
                              </form>

                        </div>
                        </div>
                  </div>
                  <!-- Delete-->
                  <div class='modal fade' id='deleteModal$id' tabindex='-1' role='dialog' aria-labelledby='deleteModal$id'
                        aria-hidden='true'>
                        <div class='modal-dialog' role='document'>
                        <div class='modal-content'>
                              <div class='modal-header'>
                                    <h5 class='modal-title' id='exampleModalLabel'>Borrar alumno - $id</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                              </div>
                              <div class='modal-body'>
                                    ¿Estás seguro que quieres borrar este alumno?
                              </div>
                              <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cambio de planes</button>
                                    <button type='button' class='btn btn-danger btn-sm'>Borrar alumno</button>
                              </div>
                        </div>
                        </div>
                  </div>
            </td>";
            echo "</tr>";
        }
    }
}
