<?php
require_once('Database.php');

class Student{
    public static $fields = array("idStudent", "name", "lastname", "birthdate", "curp", "address");

    public function __construct(){
    }

    public function displayAllStudents($result){
        $fields = array("idStudent", "name", "lastname", "birthdate", "curp", "birthplace", "status");
        $class = "";
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
            $birthplace_state = $row["idState"];
            $curp = $row["curp"];
            $street = $row["street"];
            $city = $row["city"];
            $state = $row["state"];
            $zipcode = $row["zipcode"];
            $refs = $row["reference"];
            $phone = $row["contact"];
            $status = $row["status"];
            $status_id = $row["idStatus"];
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
                                    <h5 class='modal-title' id='exampleModalScrollableTitle'>Modificar alumno - $name $lastname</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                              </div>
                              <div class='modal-body'>
                                    <form class='update_form'  action=''>
                                          <input type='hidden' value='$id' name='id'>
                                          <h4>Estatus</h4>
                                          <label for='basic-url'>Estatus de usuario</label>
                                          <div class='input-group mb-3'>
                                                <div class='input-group-prepend'>
                                                      <label class='input-group-text badge-$class' for='inputGroupSelect01'></label>
                                                </div>
                                                <select class='custom-select'  name='student_status'  id='inputGroupSelect01' required>
                                                      <option selected value='$status_id'>$status</option>
                                                      <option value='1'>Registro</option>
                                                      <option value='2'>Baja temporal</option>
                                                      <option value='3'>Baja definitiva</option>
                                                </select>
                                          </div>
                                          <h4>Información personal</h4>
                                          <label for='basic-url'>Nombre</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_name' value='$name' class='form-control' aria-describedby='basic-addon3' placeholder='ej. Roberto' required>
                                          </div>
                                          <label for='basic-url'>Apellido</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_lastname' value='$lastname' class='form-control' aria-describedby='basic-addon3' placeholder='ej. Téllez' required>
                                          </div>
                                          <label for='basic-url'>Fecha de Nacimiento</label>
                                          <div class='input-group mb-3'>
                                                <input type='date' name='student_date' value='$birthdate' class='form-control'  aria-describedby='basic-addon3' value='' required>
                                          </div>
                                          <label for='basic-url'>Lugar de Nacimiento</label>
                                          <div class='input-group mb-3'>
                                                <div class='input-group-prepend'>
                                                      <label class='input-group-text' for='inputGroupSelect01'>Estado</label>
                                                </div>
                                                <select class='custom-select'  name='student_birth'  id='inputGroupSelect01' required>
                                                      <option selected value='$birthplace_state'>$birthplace</option>
                                                      <option value='MEX'>Estado de México</option>
                                                      <option value='CMX'>Ciudad de México</option>
                                                      <option value='MOR'>Morelos</option>
                                                      <option value='XXX'>Otro...</option>
                                                </select>
                                          </div>
                                          <label for='basic-url'>CURP</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_curp' value='$curp' class='form-control' aria-describedby='basic-addon3' placeholder='Ej. GOBJ990409HDFNSR06' maxlength='18' required>
                                          </div>
                                          <h4>Dirección</h4>
                                          <label for='basic-url'>Calle y número</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_street' value='$street' class='form-control' aria-describedby='basic-addon3' placeholder='ej. Av. Satélite 138' required>
                                          </div>
                                          <label for='basic-url'>Municipio / Alcaldía / Delegación</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_city' value='$city' class='form-control' aria-describedby='basic-addon3' placeholder='ej. Naucalpan de Juárez' required>
                                          </div>
                                          <label for='basic-url'>Estado</label>
                                          <div class='input-group mb-3'>
                                                <div class='input-group-prepend'>
                                                      <label class='input-group-text' for='inputGroupSelect01'>Estado</label>
                                                </div>
                                                <select class='custom-select' name='student_state'  id='inputGroupSelect01' required>
                                                      <option selected value='$state'>$birthplace</option>
                                                      <option value='MEX'>Estado de México</option>
                                                      <option value='CMX'>Ciudad de México</option>
                                                      <option value='MOR'>Morelos</option>
                                                      <option value='XXX'>Otro...</option>
                                                </select>
                                          </div>
                                          <label for='basic-url'>Código Postal</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_zipcode' value='$zipcode' class='form-control' aria-describedby='basic-addon3' placeholder='Ej. 06300' maxlength='5' required>
                                          </div>
                                          <label for='basic-url'>Referencias</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_refs' value='$refs' class='form-control' aria-describedby='basic-addon3' placeholder='Ej. Puerta azul' required>
                                          </div>
                                          <label for='basic-url'>Teléfono de contacto</label>
                                          <div class='input-group mb-3'>
                                                <input type='text' name='student_phone' value='$phone' class='form-control' aria-describedby='basic-addon3' placeholder='Ej. (55) 6709 2381' required>
                                          </div>
                                    
                              </div>
                              <div class='modal-footer'>
                                    <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cerrar</button>
                                    <input type='submit' class='btn btn-principal btn-sm btn-success update' name='' value='Guardar Cambios'>
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
                                    <h5 class='modal-title' id='exampleModalLabel'>Borrar alumno - $name $lastname</h5>
                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                              </div>
                              <div class='modal-body'>
                                    ¿Estás seguro que quieres borrar este alumno?
                              </div>
                              <div class='modal-footer'>
                                    <input type='hidden' value='$id' class='delete-id'>
                                    <button type='button' class='btn btn-secondary btn-sm' data-dismiss='modal'>Cambio de planes</button>
                                    <button type='button' class='btn btn-danger btn-sm delete'>Borrar alumno</button>
                              </div>
                        </div>
                        </div>
                  </div>
            </td>";
            echo "</tr>";
        }
    }
}
