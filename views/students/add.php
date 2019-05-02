<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h2 class="title">Añadir un nuevo alumno</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <button class="btn btn-sm btn-outline-secondary" data-toggle='modal' data-target='#addModal'>Dar de alta</button>
                    <button class="btn btn-sm btn-outline-secondary"><span data-feather="plus-circle"></span></button>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <h4>Información personal</h4>
            <label for="basic-url">Nombre</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Roberto">
            </div>
            <label for="basic-url">Apellido</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Téllez">
            </div>
            <label for="basic-url">Fecha de Nacimiento</label>
            <div class='input-group mb-3'>
                <input type='date' class='form-control'  aria-describedby='basic-addon3' value=''>
            </div>
            <label for="basic-url">CURP</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. GOBJ990409HDFNSR06">
            </div>
        </div>

        <div class="col-md-3 offset-1">
            <h4>Dirección</h4>
            <label for="basic-url">Calle y número</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Av. Satélite 138">
            </div>
            <label for="basic-url">Municipio / Alcaldía / Delegación</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Naucalpan de Juárez">
            </div>
            <label for="basic-url">Fecha de Nacimiento</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="ej. 1999-04-09">
            </div>
            <label for="basic-url">Lugar de Nacimiento</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Estado</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Escoja...</option>
                    <option value="MEX">Estado de México</option>
                    <option value="CMX">Ciudad de México</option>
                    <option value="MOR">Morelos</option>
                    <option value="XXX">Otro...</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <h4>&nbsp;</h4>
            <label for="basic-url">Código Postal</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. 06300">
            </div>
            <label for="basic-url">Referencias</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. Puerta azul">
            </div>
            <label for="basic-url">Teléfono de contacto</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. (55) 6709 2381">
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
</main>