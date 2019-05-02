<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h2 class="title">Añadir un nuevo alumno</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                <a class="btn btn-sm btn-outline-secondary" href="<?=$url?>/students">Ver estudiantes</a>
                    <button class="btn btn-sm btn-outline-secondary"><span data-feather="plus-circle"></span></button>
                </div>
        </div>
    </div>

    <form action="" id="student_add">
        <div class="row">
            <div class="col-md-3">
                <h4>Información personal</h4>
                <label for="basic-url">Nombre</label>
                <div class="input-group mb-3">
                    <input type="text" name="student_name" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Roberto" required>
                </div>
                <label for="basic-url">Apellido</label>
                <div class="input-group mb-3">
                    <input type="text" name="student_lastname" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Téllez" required>
                </div>
                <label for="basic-url">Fecha de Nacimiento</label>
                <div class='input-group mb-3'>
                    <input type='date' name="student_date" class='form-control'  aria-describedby='basic-addon3' value='' required>
                </div>
                <label for="basic-url">Lugar de Nacimiento</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Estado</label>
                    </div>
                    <select class="custom-select" name="student_birth"  id="inputGroupSelect01" required>
                        <option selected>Escoja...</option>
                        <option value="MEX">Estado de México</option>
                        <option value="CMX">Ciudad de México</option>
                        <option value="MOR">Morelos</option>
                        <option value="XXX">Otro...</option>
                    </select>
                </div>
                <label for="basic-url">CURP</label>
                <div class="input-group mb-3">
                    <input type="text" name="student_curp" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. GOBJ990409HDFNSR06" maxlength="18" required>
                </div>
            </div>

            <div class="col-md-3 offset-1">
                <h4>Dirección</h4>
                <label for="basic-url">Calle y número</label>
                <div class="input-group mb-3">
                    <input type="text" name="student_street" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Av. Satélite 138" required>
                </div>
                <label for="basic-url">Municipio / Alcaldía / Delegación</label>
                <div class="input-group mb-3">
                    <input type="text" name="student_city" class="form-control" aria-describedby="basic-addon3" placeholder="ej. Naucalpan de Juárez" required>
                </div>
                <label for="basic-url">Estado</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Estado</label>
                    </div>
                    <select class="custom-select" name="student_state"  id="inputGroupSelect01" required>
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
                    <input type="text" name="student_zipcode" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. 06300" maxlength="5" required>
                </div>
                <label for="basic-url">Referencias</label>
                <div class="input-group mb-3">
                    <input type="text" name="student_refs" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. Puerta azul" required>
                </div>
                <label for="basic-url">Teléfono de contacto</label>
                <div class="input-group mb-3">
                    <input type="text" name="student_phone" class="form-control" aria-describedby="basic-addon3" placeholder="Ej. (55) 6709 2381" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" id="add">Añadir nuevo alumno</button>
            </div>
        </div>
    </form>
</main>
<script>
$("input[required], select[required]").attr("oninvalid", "this.setCustomValidity('Por favor, llena este campo.')");
$("input[required], select[required]").attr("oninput", "setCustomValidity('')");
$('#add').click(function () {
    event.preventDefault();
    var form = $('#student_add');
    var data = form.serializeArray();

    $.ajax({
        type: "POST",
        url: "http://localhost:8888/ymca-management/controllers/student.php",
        data: data,
        success: function (response) {
            alert("we got the data");
        },
        error: function(response) {
            alert("no data fam");
        }
        
    });
});
</script>
<script src="<?=$url?>/js/students/add.js"></script>