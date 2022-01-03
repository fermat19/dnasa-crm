<?php

/**
 * Description of tipoconsultas
 * @author ferncastillo
 */

namespace App\Models;

class tipoconsultas {
    public static function crear($data) {
        $sql = "INSERT INTO tipo_consultas(consulta)  VALUES(:consulta)";
        try {
            $cn = \Core\Models::instance();
            $res = $cn->consulta($sql, $data);
            if ($res) {
                $result = [
                    "response" => true,
                    "class" => "success",
                    "title" => "Datos Registrados",
                    "message" => "Los datos se han registrado satisfactoriamente",
                    "data" => $res
                ];
            } else {
                $result = [
                    "response" => false,
                    "class" => "info",
                    "title" => "Sin datos",
                    "message" => "Transacción exitosa, datos no han sido registrados",
                    "data" => $res
                ];
            }
            $cn->cerrar();
        } catch (\PDOException $e) {
            $result = [
                "response" => false,
                "class" => "Error!",
                "title" => "Error al insertar datos",
                "message" => $e->getMessage(),
                "data" => $e->getCode()
            ];
        }
        return $result;
        die();
    }

    public static function read_one($data) {
        $sql = "SELECT * FROM tipo_consultas WHERE id = :id";
        try {
            $cn = \Core\Models::instance();
            $res = $cn->consulta($sql, $data);
            if ($res) {
                $result = [
                    "response" => true,
                    "class" => "success",
                    "title" => "Datos Obtenidos",
                    "message" => "Se han obtenido los datos solicitados",
                    "data" => $res
                ];
            } else {
                $result = [
                    "response" => false,
                    "class" => "info",
                    "title" => "Sin datos",
                    "message" => "No se han obtenido los datos",
                    "data" => $res
                ];
            }
            $cn->cerrar();
        } catch (\PDOException $e) {
            $result = [
                "response" => false,
                "class" => "danger",
                "title" => "Error al intentar obtener los datos",
                "message" => $e->getMessage(),
                "data" => $e->getCode()
            ];
        }
        return $result;
        die();
    }

    public static function read_all() {
        $sql = "SELECT * FROM tipo_consultas";
        try {
            $cn = \Core\Models::instance();
            $res = $cn->consulta($sql);
            if ($res) {
                $result = [
                    "response" => true,
                    "class" => "success",
                    "title" => "Datos Obtenidos",
                    "message" => "Se han obtenido los datos solicitados",
                    "data" => $res
                ];
            } else {
                $result = [
                    "response" => false,
                    "class" => "info",
                    "title" => "Sin datos",
                    "message" => "No se han obtenido los datos",
                    "data" => $res
                ];
            }
            $cn->cerrar();
        } catch (\PDOException $e) {
            $result = [
                "response" => false,
                "class" => "danger",
                "title" => "Error al intentar obtener los datos",
                "message" => $e->getMessage(),
                "data" => $e->getCode()
            ];
        }
        return $result;
        die();
    }

    public static function update($data) {
        $sql = "UPDATE tipo_consultas SET consulta=:consulta WHERE id = :id";
        try {
            $cn = \Core\Models::instance();
            $res = $cn->consulta($sql, $data);
            if ($res) {
                $result = [
                    "response" => true,
                    "class" => "success",
                    "title" => "Datos Obtenidos",
                    "message" => "Se han obtenido los datos solicitados",
                    "data" => $res
                ];
            } else {
                $result = [
                    "response" => false,
                    "class" => "info",
                    "title" => "Sin datos",
                    "message" => "No se han obtenido los datos",
                    "data" => $res
                ];
            }
            $cn->cerrar();
        } catch (\PDOException $e) {
            $result = [
                "response" => false,
                "class" => "danger",
                "title" => "Error al intentar obtener los datos",
                "message" => $e->getMessage(),
                "data" => $e->getCode()
            ];
        }
        return $result;
        die();
    }

    public static function delete($data) {
        $sql = "DELETE FROM tipo_consultas WHERE id = :id";
        try {
            $cn = \Core\Models::instance();
            $res = $cn->consulta($sql, $data);
            if ($res) {
                $result = [
                    "response" => true,
                    "class" => "success",
                    "title" => "Datos Obtenidos",
                    "message" => "Se han obtenido los datos solicitados",
                    "data" => $res
                ];
            } else {
                $result = [
                    "response" => false,
                    "class" => "info",
                    "title" => "Sin datos",
                    "message" => "No se han obtenido los datos",
                    "data" => $res
                ];
            }
            $cn->cerrar();
        } catch (\PDOException $e) {
            $result = [
                "response" => false,
                "class" => "danger",
                "title" => "Error al intentar obtener los datos",
                "message" => $e->getMessage(),
                "data" => $e->getCode()
            ];
        }
        return $result;
        die();
    }
}
