<?php

namespace App\Models;

class Usuarios {

    public static function crear($data) {
        $sql = "INSERT INTO usuarios(usuario, nombre, apellido, id_perfil, calve)  VALUES(:usuario, :nombre, :apellido, :id_perfil, :calve)";
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
        $sql = "SELECT us.id, us.usuario, us.nombre, us.apellido, us.id_perfil, pf.perfil, us.calve FROM usuarios us LEFT JOIN perfiles pf ON pf.id = us.id_perfil WHERE id = :id";
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
        $sql = "SELECT us.id, us.usuario, us.nombre, us.apellido, us.id_perfil, pf.perfil, us.calve FROM usuarios us LEFT JOIN perfiles pf ON pf.id = us.id_perfil";
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

    public static function read_filter($data) {
        $sql = "SELECT us.id, us.usuario, us.nombre, us.apellido, us.id_perfil, pf.perfil, us.calve FROM usuarios us LEFT JOIN perfiles pf ON pf.id = us.id_perfil WHERE id = :id";
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

    public static function update($data) {
        $sql = "UPDATE usuarios SET usuario=:usuario, nombre=:nombre, apellido=:apellido, id_perfil=:id_perfil WHERE id = :id";
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
        $sql = "DELETE FROM usuarios WHERE id = :id";
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
