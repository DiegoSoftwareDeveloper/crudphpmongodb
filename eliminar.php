<?php 
    include "./clases/Conexion.php"; 
    include "./clases/Crud.php"; 
    include "./header.php"; 

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);  
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="fondoCardDelete card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Eliminar usuario</h2>
                    <table class="table table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Fecha de nacimiento</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $datos->nombre;?></td>
                                <td><?php echo $datos->primerApellido;?></td>
                                <td><?php echo $datos->segundoApellido;?></td>
                                <td><?php echo $datos->fecha_nacimiento;?></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="alert alert-danger" role="alert">
                        <p>Esta seguro de que desea eliminar este usuario?</p>
                        <p>Una vez eliminado no podrá recuperarlo</p>
                    </div>
                    <form action="./procesos/eliminar.php" method="post">
                        <input type="text" hidden value="<?php echo $datos->_id; ?>" name="id"/>
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-user-xmark"></i>Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>