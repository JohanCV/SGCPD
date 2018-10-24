<?php if(isset($_SESSION['register']) && $_SESSION['register']=='completo'):?>
    <div class="alert alert-success" role="alert">
        <strong>Docente creado correctamente</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register']=='fallido'): ?>
    <div class="alert alert-danger" role="alert">
        <strong>Docente no creado, Introduzca bien los datos</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php Utils::deleteSesion('register'); ?>

<form action="<?=base_url?>usuariocontroller/save" method="POST" class="form-signin">
    <div class="text-center mb-4">
        <img class="mb-4" src="<?=base_url?>assets/img/logodutic.png" alt="logoDutic" width="100" height="100">
        <h3>CREACION DE DOCENTES</h3>
    </div>

    <div class="form-label-group">
        <input type="texto" name="nombre" id="inputNombre" class="form-control" placeholder="Ingrese su Nombre" required="" autofocus="">
        <label for="inputNombre"></label>
    </div>

    <div class="form-label-group">
        <input type="texto" name="apellidos" id="inputApellido" class="form-control" placeholder="Ingrese sus Apellidos" required="" autofocus="">
        <label for="inputApellido"></label>
    </div>

    <div class="form-label-group">
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Ingrese su Correo Institucional" required="" autofocus="">
        <label for="inputEmail"></label>
    </div>

    <div class="form-label-group">
        <input type="text" name="dni" id="inputDNI" class="form-control" placeholder="Ingrese su DNI" required="">
        <label for="inputDNI"></label>
    </div>

    <button class="btn btn-lg btn-primary " type="submit">Registrar Usuario</button>
</form>