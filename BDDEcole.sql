CREATE DATABASE IF NOT EXISTS PHP_Ecole;

CREATE TABLE Compte
(
	identifiant_compte VARCHAR(30),
	mot_de_passe VARCHAR(50) NOT NULL,
	etat_dacces INT, 
	CONSTRAINT identifiant_personne_PK PRIMARY KEY(identifiant_compte)
);

CREATE TABLE Article
(
	identifiant_article INT PRIMARY KEY,
	titre VARCHAR(50),
	etat_article INT, -- 1 : a valider 2 : a édtier 3 : publié 
	comptes_concernes INT,
	nombre_visite INT,
	date_publication DATE,
	date_rappel DATE,
	texte VARCHAR(10000) -- Comprends toute la présentation 
);

CREATE TABLE Images
(
	nom_image VARCHAR(50),
	chemin_image VARCHAR(100)
);
