DROP DATABASE IF EXISTS Sneakerness;
CREATE DATABASE Sneakerness;
USE Sneakerness;

CREATE TABLE Organisator (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(255) NOT NULL,
    Gebruikersnaam VARCHAR(100) NOT NULL UNIQUE,
    Wachtwoord VARCHAR(255) NOT NULL,
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL
);

INSERT INTO Organisator (Naam, Gebruikersnaam, Wachtwoord, Opmerking, Datumaangemaakt, Datumgewijzigd) VALUES
('Jan Jansen', 'jan.jansen', 'wachtwoord123', 'Hoofdorganisator', SYSDATE(6), SYSDATE(6)),
('Lisa de Vries', 'lisa.vries', 'geheim456', 'Assistent organisator', SYSDATE(6), SYSDATE(6));

-- 2. Bezoeker
CREATE TABLE Bezoeker (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL
);

INSERT INTO Bezoeker (Naam, Email, Opmerking, Datumaangemaakt, Datumgewijzigd) VALUES
('Peter Bakker', 'peter.bakker@email.com', 'VIP', SYSDATE(6), SYSDATE(6)),
('Sophie van Dam', 'sophie.vandam@email.com', 'Geen opmerking', SYSDATE(6), SYSDATE(6));

-- 3. Evenement
CREATE TABLE Evenement (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(255) NOT NULL,
    Datum DATE NOT NULL,
    Locatie VARCHAR(255),
    AantalTicketsPerTijdslot INT DEFAULT 0,
    BeschikbareStands INT DEFAULT 0,
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL
);

INSERT INTO Evenement (Naam, Datum, Locatie, AantalTicketsPerTijdslot, BeschikbareStands, Opmerking, Datumaangemaakt, Datumgewijzigd) VALUES
('Sneakerness Rotterdam 2025', '2025-10-01', 'Rotterdam Ahoy', 100, 50, 'Populair evenement', SYSDATE(6), SYSDATE(6)),
('Sneakerness Amsterdam 2025', '2025-11-15', 'RAI Amsterdam', 150, 60, 'Tweede editie', SYSDATE(6), SYSDATE(6));

-- 4. Prijs
CREATE TABLE Prijs (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Datum DATE NOT NULL,
    Tijdslot TIME NOT NULL,
    Tarief DECIMAL(10,2) NOT NULL,
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL
);

INSERT INTO Prijs (Datum, Tijdslot, Tarief, Opmerking, Datumaangemaakt, Datumgewijzigd) VALUES
('2025-10-01', '11:00:00', 25.00, 'Ochtendticket', SYSDATE(6), SYSDATE(6)),
('2025-10-01', '14:00:00', 30.00, 'Middagticket', SYSDATE(6), SYSDATE(6));

-- 5. Ticket
CREATE TABLE Ticket (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    BezoekerId INT NOT NULL,
    EvenementId INT NOT NULL,
    PrijsId INT NOT NULL,
    AantalTickets INT NOT NULL,
    Datum DATETIME DEFAULT NULL,
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL,
    FOREIGN KEY (BezoekerId) REFERENCES Bezoeker(Id),
    FOREIGN KEY (EvenementId) REFERENCES Evenement(Id),
    FOREIGN KEY (PrijsId) REFERENCES Prijs(Id)
);

INSERT INTO Ticket (BezoekerId, EvenementId, PrijsId, AantalTickets, Opmerking, Datum, Datumaangemaakt, Datumgewijzigd) VALUES
(1, 1, 1, 2, 'VIP-tickets', SYSDATE(6), SYSDATE(6), SYSDATE(6)),
(2, 1, 2, 1, 'Regulier ticket', SYSDATE(6), SYSDATE(6), SYSDATE(6));

-- 6. Verkoper
CREATE TABLE Verkoper (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(255) NOT NULL,
    SpecialeStatus BIT DEFAULT 0,
    VerkooptSoort VARCHAR(100),
    StandType ENUM('A','AA','AA+') DEFAULT 'A',
    Dagen ENUM('Eén','Twee') DEFAULT 'Eén',
    Logo VARCHAR(255),
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL
);

INSERT INTO Verkoper (Naam, SpecialeStatus, VerkooptSoort, StandType, Dagen, Opmerking, Datumaangemaakt, Datumgewijzigd) VALUES
('SneakerStore', b'1', 'Sneakers', 'AA', 'Twee', 'Partnerverkoper', SYSDATE(6), SYSDATE(6)),
('FoodCorner', b'0', 'Eten en Drinken', 'A', 'Eén', 'Normale verkoper', SYSDATE(6), SYSDATE(6));

-- 7. Stand
CREATE TABLE Stand (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    VerkoperId BIGINT UNSIGNED NOT NULL,
    StandType VARCHAR(50) NOT NULL,
    Prijs DECIMAL(10,2) NOT NULL CHECK (Prijs >= 0),
    VerhuurdStatus TINYINT(1) NOT NULL DEFAULT 0 CHECK (VerhuurdStatus IN (0,1)),
    Isactief TINYINT(1) NOT NULL DEFAULT 1 CHECK (Isactief IN (0,1)),
    created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO Stand (id, VerkoperId, StandType, Prijs, VerhuurdStatus, Isactief, created_at, updated_at) VALUES
(1, 1, 'AA', 500.00, 1, 1, SYSDATE(6), SYSDATE(6)),
(2, 2, 'A', 300.00, 0, 0, SYSDATE(6), SYSDATE(6));


-- 8. Contactpersoon
CREATE TABLE Contactpersoon (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Naam VARCHAR(255) NOT NULL,
    Telefoonnummer VARCHAR(50),
    Email VARCHAR(255),
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL
);

INSERT INTO Contactpersoon (Naam, Telefoonnummer, Email, Opmerking, Datumaangemaakt, Datumgewijzigd) VALUES
('Kees de Boer', '0612345678', 'kees.boer@email.com', 'Hoofd contactpersoon SneakerStore', SYSDATE(6), SYSDATE(6)),
('Anna de Wit', '0687654321', 'anna.wit@email.com', 'Contactpersoon FoodCorner', SYSDATE(6), SYSDATE(6));

-- 9. ContactPerVerkoper
CREATE TABLE ContactPerVerkoper (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    VerkoperId INT NOT NULL,
    ContactpersoonId INT NOT NULL,
    Isactief BOOLEAN DEFAULT TRUE,
    Opmerking TEXT,
    Datumaangemaakt DATETIME DEFAULT NULL,
    Datumgewijzigd DATETIME DEFAULT NULL,
    FOREIGN KEY (VerkoperId) REFERENCES Verkoper(Id),
    FOREIGN KEY (ContactpersoonId) REFERENCES Contactpersoon(Id)
);

INSERT INTO ContactPerVerkoper (VerkoperId, ContactpersoonId, Opmerking, Datumaangemaakt, Datumgewijzigd) VALUES
(1, 1, 'Kees de Boer is hoofdcontact', SYSDATE(6), SYSDATE(6)),
(2, 2, 'Anna de Wit is contactpersoon', SYSDATE(6), SYSDATE(6));



DROP PROCEDURE IF EXISTS Sp_GetAllLeveranciers;
DELIMITER $$

CREATE PROCEDURE Sp_GetAllStands ()
BEGIN
    SELECT STD.Id,
           STD.VerkoperId,
           STD.StandType,
           STD.Prijs,
           STD.VerhuurdStatus
    FROM Stand AS STD;
END$$

DELIMITER ;
