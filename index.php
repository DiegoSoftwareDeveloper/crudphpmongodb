<?php
    require_once "./clases/Conexion.php";
    require_once "./clases/Crud.php";
    $crud = new Crud();
    $datos = $crud->mostrarDatos(); 
?>

<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2>CRUD PHP con MongoDB</h2>
                    <a href="./agregar.php" class="btn btn-primary">
                        <i class="fa-solid fa-user-plus">Agregar nuevo usuario</i>
                    </a>
                    <hr>
                    <table class="table table-hover table-responsive table-sm table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($datos as $item) {
                            ?>
                            <tr>
                                <td><?php echo $item->nombre; ?></td>
                                <td><?php echo $item->primerApellido; ?></td>
                                <td><?php echo $item->segundoApellido; ?></td>
                                <td><?php echo $item->fecha_nacimiento; ?></td>
                                <td class="text-center">
                                    <form action="./actualizar.php" method="post">
                                    <input type="text" hidden value="<?php echo $item->_id; ?>" name="id"/>
                                        <button class="btn btn-warning">
                                            <i class="fa-solid fa-user-pen"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="text-center">
                                    <form action="./eliminar.php" method="post">
                                        <input type="text" hidden value="<?php echo $item->_id ?>" name="id"/>
                                        <button class="btn btn-danger">
                                            <i class="fa-solid fa-user-xmark"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>