<?php include "./header/head.php"; ?>
<?php include "./header/navbar.php"; ?>
<div class="container-fluid">
      <div class="row">
            <?php $users = true; ?>
            <?php include "./header/sidebar.php"; ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h2 class="title">USUARIOS</h2>
                        <div class="btn-toolbar mb-2 mb-md-0">
                              <div class="btn-group mr-2">
                                    <button class="btn btn-sm btn-outline-secondary">Dar de alta</button>
                                    <button class="btn btn-sm btn-outline-secondary"><span data-feather="plus-circle"></span></button>
                              </div>
                        </div>
                  </div>
                  <div class="table-responsive">
                        <table class="table table-striped table-sm">
                              <thead>
                                    <tr>
                                          <th>ID</th>
                                          <th>Nombre</th>
                                          <th>Puesto</th>
                                          <th>Edad</th>
                                          <th>Acciones</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <?php
                                    $users = array("1"=>array("name"=>"Roberto Téllez", "job"=>"Trabajador", "age"=>"19"),
                                    "2"=>array("name"=>"Irving Fuentes", "job"=>"Trabajador", "age"=>"20"),
                                    "3"=>array("name"=>"Natalia Meraz", "job"=>"Trabajadora", "age"=>"21"),
                                    "4"=>array("name"=>"Joaquín Ríos", "job"=>"Trabajador", "age"=>"19"));
                                    foreach ($users as $id => $data):
                                          ?>
                                          <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $data["name"]; ?></td>
                                                <td><?php echo $data["job"]; ?></td>
                                                <td><?php echo $data["age"]; ?></td>
                                                <td>
                                                      <a href="#" class="badge badge-warning" data-toggle="modal" data-target="#modifyModal<?php echo $id;?>">Modificar</a>
                                                      <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#deleteModal<?php echo $id;?>">Borrar</a>

                                                      <!-- Modify -->
                                                      <div class="modal fade" id="modifyModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="modifyModal<?php echo $id;?>" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h5 class="modal-title" id="exampleModalScrollableTitle">Modificar usuario - <?php echo $id;?></h5>
                                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                              </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                              <label for="basic-url">Nombre</label>
                                                                              <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control"  aria-describedby="basic-addon3" value="<?php echo $data["name"]; ?>">
                                                                              </div>
                                                                              <label for="basic-url">Puesto</label>
                                                                              <div class="input-group mb-3">
                                                                                    <div class="input-group-prepend">
                                                                                          <label class="input-group-text" for="inputGroupSelect01">Trabajo</label>
                                                                                    </div>
                                                                                    <select class="custom-select" id="inputGroupSelect01">
                                                                                          <option selected>Escoja...</option>
                                                                                          <option value="1">Trabajador</option>
                                                                                          <option value="2">No trabaja</option>
                                                                                          <option value="3">Quizá trabaja</option>
                                                                                    </select>
                                                                              </div>
                                                                              <label for="basic-url">Edad</label>
                                                                              <div class="input-group mb-3">
                                                                                    <input type="text" class="form-control" aria-describedby="basic-addon3" value="<?php echo $data["age"]; ?>">
                                                                              </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                                                                              <button type="button" class="btn btn-primary btn-sm">Guardar cambios</button>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                      <!-- Delete-->
                                                      <div class="modal fade" id="deleteModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal<?php echo $id;?>" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <h5 class="modal-title" id="exampleModalLabel">Borrar usuario - <?php echo $id;?></h5>
                                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                              </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                              ¿Estás seguro que quieres borrar este usuario?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cambio de planes</button>
                                                                              <button type="button" class="btn btn-danger btn-sm">Borrar usuario</button>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </td>
                                          </tr>
                                    <?php endforeach; ?>
                              </tbody>
                        </table>
                  </div>
                  </main
            </div>
      </div>
      <?php include "./footer/foot.php"; ?>
