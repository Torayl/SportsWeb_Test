-- Script à exécuter pour obtenir la table USER --

CREATE TABLE "USER" (
"login" VARCHAR(80) NOT NULL,
"password" VARCHAR(80) NOT NULL,
"prenom" VARCHAR(50) NOT NULL,
"nom" VARCHAR(50) NOT NULL,
"sexe" BOOLEAN NOT NULL,
"date_naissance" DATE NOT NULL,
PRIMARY KEY ("login"));