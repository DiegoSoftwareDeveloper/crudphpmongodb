<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Agregar nuevo usuario</h2>
                    <form action="./procesos/insertar.php" method="post">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required/>
                        <label for="primerApellido">Primer Apellido</label>
                        <input type="text" class="form-control" id="primerApellido" name="primerApellido" required/>
                        <label for="segundoApellido">Segundo Apellido</label>
                        <input type="text" class="form-control" id="segundoApellido" name="segundoApellido"/>
                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required/>
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>