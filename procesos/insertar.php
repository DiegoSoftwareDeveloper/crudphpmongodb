<?php session_start();

    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $crud = new Crud();

    $datos = array(
        "nombre" => $_POST['nombre'],
        "primerApellido" => $_POST['primerApellido'],
        "segundoApellido" => $_POST['segundoApellido'],
        "fecha_nacimiento" => $_POST['fechaNacimiento'],
    );

    $respuesta = $crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }
?>