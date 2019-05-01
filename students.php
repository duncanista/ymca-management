<?php include "./header/head.php"; ?>
<?php include "./header/navbar.php"; ?>
<?php require_once 'classes/Database.php'; ?>
<?php require_once 'classes/Student.php'; ?>
<?php

  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = "'".$_POST['name']."'";
    $lastname = "'".$_POST['lastname']."'";
    $birthdate = "'".$_POST['birthdate']."'";
    $birthplace = "'".$_POST['birthplace']."'";
    $curp = "'".$_POST['curp']."'";
    $table = "student";

    if(isset($_POST['id'])){
      // UPDATE
      $id = $_POST['id'];
      $student = new Student();
      $values = array($name, $lastname, $birthdate, $birthplace, $curp);
      $fields = array("name", "lastname", "birthdate", "birthplace", "curp", "address");
      update($fields, $values, $table,"idStudent", $id);
    }
    else{
      // INSERT
    }
  }
 ?>

<div class="container-fluid">
      <div class="row">
            <?php $students = true; ?>
            <?php include "./header/sidebar.php"; ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h2 class="title">ALUMNOS</h2>
                        <div class="btn-toolbar mb-2 mb-md-0">
                              <div class="btn-group mr-2">
                                    <button class="btn btn-sm btn-outline-secondary" data-toggle='modal' data-target='#addModal'>Dar de alta</button>

                                    <button class="btn btn-sm btn-outline-secondary"><span data-feather="plus-circle"></span></button>
                              </div>
                        </div>
                  </div>
                  <?php echo "<!-- Add -->
                  <div class='modal fade' id='addModal' tabindex='-1' role='dialog' aria-labelledby='modifyModal' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-scrollable' role='document'>
                              <div class='modal-content'>
                                    <div class='modal-header'>
                                          <h5 class='modal-title' id='exampleModalScrollableTitle'>Agregar alumno </h5>
                                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                          </button>
                                    </div>
                                    <div class='modal-body'>
                                    <form class='' action='' method='post'>
                                    <label for='basic-url'>Nombre</label>
                                    <div class='input-group mb-3'>
                                          <input type='text' class='form-control'  aria-describedby='basic-addon3' value=''>
                                    </div>
                                    <label for='basic-url'>Apellidos</label>
                                    <div class='input-group mb-3'>
                                          <input type='text' class='form-control'  aria-describedby='basic-addon3' value=''>
                                    </div>
                                    <label for='basic-url'>Fecha de Nacimiento</label>
                                    <div class='input-group mb-3'>
                                          <input type='date' class='form-control'  aria-describedby='basic-addon3' value=''>
                                    </div>
                                    <label for='basic-url'>Lugar de Nacimiento</label>
                                    <div class='input-group mb-3'>
                                          <input type='text' class='form-control'  aria-describedby='basic-addon3' value=''>
                                    </div>
                                    <label for='basic-url'>CURP</label>
                                    <div class='input-group mb-3'>
                                          <input type='text' class='form-control'  aria-describedby='basic-addon3' value=''>
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
                                    <input type='submit' class= 'btn btn-principal btn-sm' name='' value='Guardar Cambios'>
                              </div>
                                    </form>

                              </div>
                        </div>
                  </div>"; ?>
                  <div class="table-responsive">
                        <table class="table table-striped table-sm">
                              <thead>
                                    <tr>
                                          <th>ID</th>
                                          <th>Nombre</th>
                                          <th>Apellido</th>
                                          <th>Fecha de Nacimiento</th>
                                          <th>Lugar de Nacimiento</th>
                                          <th>CURP</th>
                                          <th>Acciones</th>
                                    </tr>
                              </thead>
                              <tbody>

                                  <?php
                                    $students = new Student();
                                    $result = selectAll("student");
                                    $students->displayAllStudents($result);
                                  ?>


                              </tbody>
                        </table>
                  </div>
                </main>
            </div>
            <div class="row">

            </div>
      </div>


      <?php include "./footer/foot.php"; ?>
