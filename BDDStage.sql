CREATE DATABASE IF NOT EXISTS PHP_Stage;

CREATE OR REPLACE TABLE Personne
(
	identifiant_personne VARCHAR(30),
	civilite VARCHAR(30),
	numtel NUMERIC(10,0),
	nom VARCHAR(30) NOT NULL,
	prenom VARCHAR(30) NOT NULL,
	mail VARCHAR(60) NOT NULL,
	qualité VARCHAR(25), 
	mot_de_passe VARCHAR(50) NOT NULL,
	CONSTRAINT identifiant_personne_PK PRIMARY KEY(identifiant_personne)
);

CREATE TABLE Etudiant 
(
	identifiant_personne VARCHAR(30) REFERENCES personne(identifiant_personne),
	date_naissance DATE,
	num_secu NUMERIC(12,0),
	mutuelle VARCHAR(50),
	adresse VARCHAR(100), 
	CP NUMERIC(5,0), 
	ville VARCHAR(50), 
	pays VARCHAR(50), 
	objectif VARCHAR(500),
	CONSTRAINT identifiant_personne_PK PRIMARY KEY(identifiant_personne)
);

CREATE TABLE Professionnel
(
	identifiant_personne VARCHAR(30) REFERENCES personne(identifiant_personne),
	identifiant_entreprise VARCHAR(50) REFERENCES Entreprise(identifiant_entreprise),
	CONSTRAINT identifiant_personne_PK PRIMARY KEY(identifiant_personne)
);

CREATE TABLE Stage
(
	identifiant_stage VARCHAR(30) PRIMARY KEY,
	intitulé VARCHAR(30),
	entreprise VARCHAR(50),
	adresse VARCHAR(100),
	ville VARCHAR(40),
	code_postal NUMERIC(5,0),
	pays VARCHAR(40),
	date_debut DATE,
	date_fin DATE,
	mission VARCHAR(1300)
);

CREATE TABLE valide
(
	identifiant_personne VARCHAR(30) REFERENCES Professionnel(identifiant_personne),
	identifiant_stage VARCHAR(30) REFERENCES Stage(identifiant_stage),
	CONSTRAINT identifiant_personne_PK PRIMARY KEY(identifiant_personne,identifiant_stage)
);

-- CREATE TABLE Entreprise
-- (
	-- identifiant_entreprise VARCHAR(50) PRIMARY KEY,
	-- effectif INTEGER,
	-- tel NUMERIC(10,0),
	-- adresse VARCHAR(100),
	-- ville VARCHAR(50),
	-- pays VARCHAR(50),
	-- activite VARCHAR(100)
-- );

