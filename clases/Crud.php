<?php
    class Crud extends Conexion {
        public function mostrarDatos(){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function obtenerDocumento($id){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $datos = $coleccion->findOne(
                                            array(
                                                '_id' => new MongoDB\BSON\ObjectId($id)
                                            )
                                        );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function insertarDatos($datos){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }

        public function eliminar($id)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->deleteOne(
                                                    array(
                                                        '_id' => new MongoDB\BSON\ObjectId($id)
                                                    )
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }

        public function actualizar($id, $datos)
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->personas;
                $respuesta = $coleccion->updateOne(
                                                ['_id' => new MongoDB\BSON\ObjectId($id)],
                                                ['$set' => $datos],
                                        );
                return $respuesta;
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }

        public function mensajesCrud($mensaje)
        {
            try {
                $msg = '';
                
                if ($mensaje == 'insert') {
                    $msg = 'swal("Excelente!","El registro se agrego con exito","success")';
                }elseif ($mensaje == 'update') {
                    $msg = 'swal("Excelente!","El registro se edito con exito","info")';
                }elseif ($mensaje == 'delete') {
                    $msg = 'swal("Excelente!","El registro se elimino con exito","warning")';
                }

                return $msg;
            } catch (\Throwable $th) {
                $th->getMessage();
            }
        }
    }
