DROP TABLE IF EXISTS video;
DROP TABLE IF EXISTS categorie;

CREATE TABLE categorie (
  idCategorie INT AUTO_INCREMENT,
  nomCategorie VARCHAR(30),
  link_image VARCHAR(50),
  PRIMARY KEY(idCategorie)
) Engine = InnoDB;

CREATE TABLE video (
  idVideo INT AUTO_INCREMENT,
  titreVideo VARCHAR(100),
  linkVideo VARCHAR(200),
  description TEXT,
  dateSortie DATE,
  categorieVideo INT,
  CONSTRAINT fk_categorieVideo FOREIGN KEY(categorieVideo) REFERENCES categorie(idCategorie),
  PRIMARY KEY(idVideo)
) Engine = InnoDB;

CREATE TABLE membre (
  idMembre INT AUTO_INCREMENT,
  nomMembre VARCHAR(10),
  prenomMembre VARCHAR(10),
  link_photo VARCHAR(50),
  descriptionMembre TEXT,
  PRIMARY KEY(idMembre)
) Engine = InnoDB;