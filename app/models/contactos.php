<?php

/**
 * Description of contactos
 * @author ferncastillo
 */

namespace App\Models;

class Contactos {

    public static function crear($data) {
        $sql = "INSERT INTO contactos(dt_inicio, id_usuario, id_tcontacto, id_tconsulta, telefono, comentario, dt_creacion) VALUES (:dt_inicio, :id_usuario, :id_tcontacto, :id_tconsulta, :telefono, :comentario, :dt_creacion)";
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
        $sql = "SELECT cnt.id, cnt.dt_inicio, cnt.id_usuario, usr.usuario, usr.nombre, usr.apellido, cnt.id_tcontacto, tcn.contacto, cnt.id_tconsulta, tcl.consulta, cnt.telefono, cnt.comentario, cnt.dt_creacion FROM contactos cnt LEFT JOIN usuarios usr ON usr.id = cnt.id_usuario LEFT JOIN tipo_contactos tcn ON tcn.id = cnt.id_tcontacto LEFT JOIN tipo_consultas tcl ON tcl.id = cnt.id_tconsulta WHERE cnt.id = :id";
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
   
    public static function read_byMe($data) {
        $sql = "SELECT cnt.id, cnt.dt_inicio, cnt.id_usuario, usr.usuario, usr.nombre, usr.apellido, cnt.id_tcontacto, tcn.contacto, cnt.id_tconsulta, tcl.consulta, cnt.telefono, cnt.comentario, cnt.dt_creacion FROM contactos cnt LEFT JOIN usuarios usr ON usr.id = cnt.id_usuario LEFT JOIN tipo_contactos tcn ON tcn.id = cnt.id_tcontacto LEFT JOIN tipo_consultas tcl ON tcl.id = cnt.id_tconsulta WHERE usr.usuario = :usuario AND cnt.dt_inicio >= :dt_inicio";
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
        $sql = "SELECT cnt.id, cnt.dt_inicio, cnt.id_usuario, usr.usuario, usr.nombre, usr.apellido, cnt.id_tcontacto, tcn.contacto, cnt.id_tconsulta, tcl.consulta, cnt.telefono, cnt.comentario, cnt.dt_creacion FROM contactos cnt LEFT JOIN usuarios usr ON usr.id = cnt.id_usuario LEFT JOIN tipo_contactos tcn ON tcn.id = cnt.id_tcontacto LEFT JOIN tipo_consultas tcl ON tcl.id = cnt.id_tconsulta";
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
        $sql = "UPDATE contactos SET dt_inicio = :dt_inicio, id_usuario = :id_usuario, id_tcontacto = :id_tcontacto, id_tconsulta = :id_tconsulta, telefono = :telefono, comentario = :comentario, dt_creacion = :dt_creacion WHERE id = :id";
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
        $sql = "DELETE FROM `contactos` WHERE id = :id";
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
