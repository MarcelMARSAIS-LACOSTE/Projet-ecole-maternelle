CREATE DATABASE `PHP_Ecole` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
use `php_Ecole`;

CREATE USER 'u_php_Ecole'@'localhost' IDENTIFIED BY 'SJzEeqLb2HHeNYVV';
GRANT USAGE ON * . * TO 'u_php_Ecole'@'localhost' IDENTIFIED BY 'SJzEeqLb2HHeNYVV' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;
GRANT ALL PRIVILEGES ON `php_Ecole` . * TO 'u_php_Ecole'@'localhost';

CREATE USER 'comptetest'@'localhost' IDENTIFIED BY 'SJzEeqLb2HHeNYVV';
GRANT USAGE ON * . * TO 'comptetest'@'localhost' IDENTIFIED BY 'SJzEeqLb2HHeNYVV' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;
GRANT ALL PRIVILEGES ON `php_Ecole` . * TO 'comptetest'@'localhost';

CREATE TABLE Compte
(
	identifiant_compte VARCHAR(30),
	mot_de_passe VARCHAR(50) NOT NULL,
	etat_dacces INT, 
	CONSTRAINT identifiant_personne_PK PRIMARY KEY(identifiant_compte)
);

INSERT INTO compte VALUES("test_u", "test_u", 1);

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
