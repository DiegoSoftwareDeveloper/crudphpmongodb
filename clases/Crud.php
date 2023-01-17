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
    }
