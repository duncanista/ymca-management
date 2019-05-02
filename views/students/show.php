<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h2 class="title">Alumnos registrados.</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="<?=$url?>/students/add">Dar de alta</a>

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
                    <th>Apellidos</th>
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

        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Dar de alta usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label for="basic-url">Nombre</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon3"
                                placeholder="ej. Roberto">
                        </div>
                        <label for="basic-url">Apellido</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon3"
                                placeholder="ej. Téllez">
                        </div>
                        <label for="basic-url">Fecha de Nacimiento</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon3"
                                placeholder="ej. 1999-04-09">
                        </div>
                        <label for="basic-url">Lugar de Nacimiento</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Ciudad</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Escoja...</option>
                                <option value="1">Estado de México</option>
                                <option value="2">Ciudad de México</option>
                                <option value="3">Otro...</option>
                            </select>
                        </div>
                        <label for="basic-url">CURP</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-describedby="basic-addon3"
                                placeholder="Ej. GOBJ990409HDFNSR06">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary btn-sm">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
