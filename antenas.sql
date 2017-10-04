drop database IF EXISTS antennas;
create database IF NOT EXISTS antennas;
use antennas;

CREATE TABLE IF NOT EXISTS Sector (
  sectorId INT UNSIGNED NOT NULL AUTO_INCREMENT,
  sector VARCHAR(50) NOT NULL,
  CONSTRAINT pk_sector PRIMARY KEY (sectorId)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS Profile(
  profileId INT UNSIGNED NOT NULL AUTO_INCREMENT,
  profile VARCHAR(50) NOT NULL,
  CONSTRAINT pk_perfil PRIMARY KEY(profileId)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS User (
  userId INT UNSIGNED NOT NULL AUTO_INCREMENT,
  userName VARCHAR(50) NOT NULL,
  userPass VARCHAR(50) NOT NUll,
  profileId INT UNSIGNED NOT NULL,
  CONSTRAINT pk_user PRIMARY KEY(userId),
  CONSTRAINT fk_userProfile FOREIGN KEY (ProfileId) REFERENCES Profile(profileId)
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS Antenna (
  antennaId INT UNSIGNED NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  pass VARCHAR(50) NOT NULL,
  ssid VARCHAR(50) NOT NULL,
  trademark VARCHAR(50) NOT NULL,
  model VARCHAR(50) NOT NULL,
  ip VARCHAR(50) NOT NULL,
  mac VARCHAR(50) NOT NULL,
  gain VARCHAR(50) NOT NULL,
  channel VARCHAR(50) NOT NULL,
  latitude VARCHAR(100) NOT NULL,
  longitude VARCHAR(100) NOT NULL,
  sectorId INT UNSIGNED NOT NUll,
  userId INT UNSIGNED NOT NUll,
  CONSTRAINT pk_antenna PRIMARY KEY(antennaId),
  CONSTRAINT fk_sectorAntenna FOREIGN KEY (sectorId) REFERENCES Sector(sectorId),
  CONSTRAINT fk_userAntenna FOREIGN KEY (userId) REFERENCES User(userId)
) ENGINE = InnoDB;
