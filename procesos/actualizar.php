<?php session_start();

    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $crud = new Crud();
    $id = $_POST['id'];

    $datos = array(
        "nombre" => $_POST['nombre'],
        "primerApellido" => $_POST['primerApellido'],
        "segundoApellido" => $_POST['segundoApellido'],
        "fecha_nacimiento" => $_POST['fechaNacimiento'],
    );

    $respuesta = $crud->actualizar($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getmatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }
?>