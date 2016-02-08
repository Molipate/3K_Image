DROP TABLE IF EXISTS membre;
DROP TABLE IF EXISTS video;
DROP TABLE IF EXISTS categorie;
DROP TABLE IF EXISTS text;
DROP TABLE IF EXISTS image;

CREATE TABLE image(
  idImage INT AUTO_INCREMENT,
  linkImage VARCHAR(100),
  PRIMARY KEY(idImage)
) ENGINE = InnoDB;

CREATE TABLE text(
  idText INT AUTO_INCREMENT,
  text TEXT,
  descText ENUM('video', 'membre', 'asso'),
  PRIMARY KEY(idText)
) ENGINE = InnoDB;

CREATE TABLE categorie(
  idCategorie INT AUTO_INCREMENT,
  nomCategorie VARCHAR(30),
  imageCategorie INT NOT NULL,
  PRIMARY KEY(idCategorie),
  CONSTRAINT fk_imageCategorie FOREIGN KEY(imageCategorie) REFERENCES image(idImage) ON DELETE CASCADE
) ENGINE = InnoDB;

CREATE TABLE video(
  idVideo INT AUTO_INCREMENT,
  titreVideo VARCHAR(100),
  linkVideo VARCHAR(200),
  dateVideo DATE,
  categorieVideo INT NOT NULL,
  descriptionVideo INT NOT NULL,
  PRIMARY KEY(idVideo),
  CONSTRAINT fk_categorieVideo FOREIGN KEY(categorieVideo) REFERENCES categorie(idCategorie),
  CONSTRAINT fk_descriptionVideo FOREIGN KEY(descriptionVideo) REFERENCES text(idText)
) ENGINE = InnoDB;

CREATE TABLE membre(
  idMembre INT AUTO_INCREMENT,
  nomMembre VARCHAR(15),
  prenomMembre VARCHAR(15),
  photoMembre INT NOT NULL,
  descriptionMembre INT NOT NULL,
  PRIMARY KEY(idMembre),
  CONSTRAINT fk_photoMembre FOREIGN KEY(photoMembre) REFERENCES image(idImage),
  CONSTRAINT fk_descriptionMembre FOREIGN KEY(descriptionMembre) REFERENCES text(idText)
) ENGINE = InnoDB;

CREATE TABLE projet (
  idProjet INT AUTO_INCREMENT,
  titreProjet VARCHAR(150),
  categorieProjet INT NOT NULL,
  descriptionProjet INT NOT NULL,
  PRIMARY KEY(idProjet),
  CONSTRAINT  fk_categorieProjet FOREIGN KEY(categorieProjet) REFERENCES categorie(idCategorie),
  CONSTRAINT  fk_descriptionProjet FOREIGN KEY(descriptionProjet) REFERENCES text(idText)
) ENGINE = InnoDB;