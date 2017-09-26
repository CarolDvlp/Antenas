drop database IF EXISTS antenas;
create database IF NOT EXISTS antenas;
use antenas;

CREATE TABLE IF NOT EXISTS Sector (
  idSector INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nombreSector VARCHAR(50) NOT NULL,
  CONSTRAINT pk_sector PRIMARY KEY (idSector)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS Perfil (
  idPerfil INT UNSIGNED NOT NULL AUTO_INCREMENT,
  perfil VARCHAR(50) NOT NULL,
  CONSTRAINT pk_perfil PRIMARY KEY(idPerfil)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS Usuario (
  idUsuario INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  clave VARCHAR(50) NOT NUll,
  idPerfil INT UNSIGNED NOT NULL,
  CONSTRAINT pk_usuario PRIMARY KEY(idUsuario),
  CONSTRAINT fk_usuarioPerfil FOREIGN KEY (idPerfil) REFERENCES Perfil(idPerfil)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS Antena (
  idAntena INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  claveAntena VARCHAR(50) NOT NULL,
  ssid VARCHAR(50) NOT NULL,
  marca VARCHAR(50) NOT NULL,
  modelo VARCHAR(50) NOT NULL,
  ip VARCHAR(50) NOT NULL,
  mac VARCHAR(50) NOT NULL,
  ganancia VARCHAR(50) NOT NULL,
  canal VARCHAR(50) NOT NULL,
  latitud VARCHAR(100) NOT NULL,
  longitud VARCHAR(100) NOT NULL,
  idSector INT UNSIGNED NOT NUll,
  idUsuario INT UNSIGNED NOT NUll,
  CONSTRAINT pk_antena PRIMARY KEY(idAntena),
  CONSTRAINT fk_sectorAntena FOREIGN KEY (idSector) REFERENCES Sector(idSector),
  CONSTRAINT fk_usuarioAntena FOREIGN KEY (idUsuario) REFERENCES Usuario(idUsuario)
) ENGINE = InnoDB;
