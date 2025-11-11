CREATE DATABASE Rent_An_Anime;
USE Rent_An_Anime;

CREATE TABLE Cliente
(
	email VARCHAR(64) NOT NULL,
	password CHAR(60) NOT NULL,
	nome VARCHAR(32) NOT NULL,
	cognome VARCHAR(32) NOT NULL,
	comune VARCHAR(32) NOT NULL,
	provincia CHAR(2) NOT NULL,
	indirizzo VARCHAR(64) NOT NULL,
	cap CHAR(5) NOT NULL,
	telefono VARCHAR(10),
	codfiscale CHAR(16),
	PRIMARY KEY (email)
);

CREATE TABLE Generi
(
	nome VARCHAR(32) NOT NULL,
	PRIMARY KEY (nome)
);

CREATE TABLE Anime
(
	ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nome VARCHAR(32) NOT NULL,
	audio VARCHAR(32) NOT NULL,
	sottotitoli VARCHAR(32) NOT NULL,
	data_uscita VARCHAR(32) NOT NULL,
	stagione VARCHAR(32) NOT NULL,
	studio VARCHAR(32) NOT NULL,
	genere VARCHAR(32) NOT NULL,
	episodi VARCHAR(32) NOT NULL,
	durata VARCHAR(32) NOT NULL,
	quantita INT UNSIGNED NOT NULL,
	prezzo INT UNSIGNED NOT NULL,
	smallimg VARCHAR(256),
	descrizione VARCHAR(1024),
	PRIMARY KEY (ID),
	FOREIGN KEY (genere) REFERENCES Generi(nome)
);

CREATE TABLE Ordine
(
	ID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	cliente VARCHAR(64) NOT NULL,
	nominativo VARCHAR(64) NOT NULL,
	indirizzo VARCHAR(128) NOT NULL,
	tipospedizione VARCHAR(32) NOT NULL,
	costospedizione INT UNSIGNED NOT NULL,
	totale INT UNSIGNED NOT NULL,
	data datetime NOT NULL,
	stato VARCHAR(32) NOT NULL,
	PRIMARY KEY (ID),
	FOREIGN KEY (cliente) REFERENCES Cliente(email)
);

CREATE TABLE ProdottoOrdine
(
	ordine INT UNSIGNED NOT NULL,
	prodotto INT UNSIGNED NOT NULL,
	quantita INT UNSIGNED NOT NULL,
	prezzo INT UNSIGNED NOT NULL,
	totale INT UNSIGNED NOT NULL,
	FOREIGN KEY (ordine) REFERENCES ordine(ID),
	FOREIGN KEY (prodotto) REFERENCES Anime(ID)
);

CREATE TABLE Carrello
(
	cliente VARCHAR(64) NOT NULL,
	prodotto INT UNSIGNED NOT NULL,
	quantita INT UNSIGNED NOT NULL,
	FOREIGN KEY (cliente) REFERENCES Cliente(email),
	FOREIGN KEY (prodotto) REFERENCES Anime(ID)
);

CREATE TABLE Immagine 
(
	ImgID INT UNSIGNED NOT NULL AUTO_INCREMENT,
	Img VARCHAR(256),
	AnimeID INT UNSIGNED NOT NULL,
	PRIMARY KEY (ImgID),
	FOREIGN KEY (AnimeID) REFERENCES Anime(ID)
);