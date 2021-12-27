CREATE TABLE IF NOT EXISTS usuarios(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(25) NOT NULL UNIQUE,
    id_perfil int not null,
    clave varchar(90)
);
CREATE TABLE IF NOT EXISTS perfiles (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    perfil varchar(50) not null UNIQUE,
);

CREATE TABLE IF NOT EXISTS roles (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    rol varchar(50) not null UNIQUE,
    descripcion text 
);

CREATE TABLE IF NOT EXISTS permisos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_perfil int not null,
    id_rol int not null,
);