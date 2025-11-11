
INSERT INTO Generi (nome) VALUES ('Azione'),('Avventura'),('Combattimento'),('Commedia'),('Cyberpunk'),('Drammatico'),('Fantasy'),('Gioco'),('Horror'),('Josei'),('Magia'),('Mecha'),('Mistero'),('Musicale'),('Psicologico'),('Romantico'),('Sci-Fi'),('Seinen'),('Shoujo'),('Shounen'),('Slice of Life'),('Sovrannaturale'),('Storico');

INSERT INTO Anime(nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione)
VALUES('Oshi No Ko','Giapponese','Italiano','12 Aprile 2023','1 (Jap)','Doga Kobo','Musicale','11','24 min/ep','11','25','img/oshi.jpg',"Ai Hoshino è una giovane idol, che ha chiaro fin da subito cosa significhi fare parte del mondo dell'intrattenimento. Cosa traspare dietro le quinte dello sfavillante mondo dello spettacolo? Quanto ti spingeresti lontano per amore della tua idol preferita?");

INSERT INTO Anime(nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione)
VALUES('Jujutsu Kaisen','Italiano','No','2 Ottobre 2020','1 (Ita)','MAPPA','Shounen','24','23 min/ep','24','32','img/jujutsu.jpg',"Yuuji è un genio nella corsa, ma non ha nessun interesse a correre in cerchio su una pista. È felicissimo di far parte del club di ricerche sull'occulto, ma anche se ne fa parte solo per gioco le cose si fanno serie quando uno spirito vero si palesa a scuola. La vita si farà davvero strana alla Sugiwasa Town High School!");

INSERT INTO Anime(nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione)
VALUES('Spy x Family','Giapponese','Italiano','09 Aprile 2022','1 (Jap)','CloverWorks, Wit Studio','Slice of Life','12','24 min/ep','12','27','img/spy.jpg',"Twilight, una delle migliori spie al mondo, ha trascorso la vita ad affrontare missioni sotto copertura per rendere il mondo un posto migliore. Un giorno però riceve un compito particolarmente difficile, per riuscire nella sua nuova missione dovrà formare una famiglia temporanea e iniziare una nuova vita!");

INSERT INTO Anime(nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione)
VALUES('Sailor Moon Crystal','Italiano','No','05 Luglio 2014','1 (Ita)','Toei Animation','Shoujo','26','24 min/ep','26','45','img/sailor.jpg',"Nuovo anime di Sailor Moon per commemorare il 20° anniversario di Sailor Moon. Usagi Tsukino è una ragazza del secondo anno delle medie, un po goffa e piagnucolona, ma piena di energia. Un giorno incontra Luna, un gatto nero con una falce di luna sulla fronte, e si trasforma in Sailor Moon. Come paladina della giustizia, Usagi sembra avere la missione di trovare un cristallo d'argento assieme agli altri guardiani per proteggere la principessa.");

INSERT INTO Anime(nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione)
VALUES('Given','Giapponese','Italiano','12 Luglio 2019','1 (Jap)','Lerche','Musicale','11','22 min/ep','11','19','img/given.jpg',"Uenoyama trova ormai noiosi sia il basket, che la musica, mentre in precedenza li amava entrambi. Un giorno a scuola si imbatte in Mafuyu, intento a sonnecchiare su una scala abbracciato ad una chitarra dalle corde rotte. Uenoyama lo aiuta ad accordarla e, dal momento in cui mette le mani su quella chitarra, in Mafuyu scatta una scintilla, ne rimane completamente folgorato, tanto da chiedergli di aiutarlo ad imparare a suonare quello strumento. Quale sarà la risposta di Uenoyama?");

INSERT INTO Anime(nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione)
VALUES('L Attacco Dei Giganti','Italiano','No','07 Aprile 2013','1 (Ita)','Wit Studio','Shounen','25','24 min/ep','25','38','img/attack.jpg',"Diverse centinaia di anni fa, la razza umana fu quasi sterminata dai giganti. Si racconta di quanto questi fossero alti, privi di intelligenza e affamati di carne umana; peggio ancora, essi sembra divorassero umani più per piacere che per necessario sostentamento. Una piccola percentuale dell'umanità  però sopravvisse asserragliandosi in una città  circondata da mura estremamente alte, anche più alte del più grande di giganti. Elen è un adolescente che vive in questa città , dove non si vede un gigante da oltre un secolo. Ma presto un orrore indicibile si palesa alle sue porte, ed un gigante più grande di quanto si sia mai sentito narrare, appare dal nulla abbattendo le mura ed imperversando assieme ad altri suoi simili fra la popolazione. Elen, vinto il terrore iniziale, si ripromette di eliminare ogni singolo gigante, per vendicare l'umanità  tutta.");


UPDATE Anime
SET largeimg = "img/jujutsu.jpg"
WHERE nome = 'Jujutsu Kaisen';

INSERT INTO Immagine(ImgID, Img, AnimeID)
VALUES('1', 'img/oshinoko.jpg', '1');

INSERT INTO Immagine(ImgID, Img, AnimeID)
VALUES('2', 'img/jujutsukaisen.jpg', '2');

INSERT INTO Immagine(ImgID, Img, AnimeID)
VALUES('3', 'img/spyxfamily.jpg', '3');

INSERT INTO Immagine(ImgID, Img, AnimeID)
VALUES('4', 'img/sailormoon.jpg', '4');

INSERT INTO Immagine(ImgID, Img, AnimeID)
VALUES('5', 'img/givenbanner.jpg', '5');

INSERT INTO Immagine(ImgID, Img, AnimeID)
VALUES('6', 'img/attackontitan.jpg', '6');

