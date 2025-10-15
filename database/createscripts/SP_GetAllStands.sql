DROP PROCEDURE IF EXISTS Sp_GetAllStands;
DELIMITER $$

CREATE PROCEDURE Sp_GetAllStands ()
BEGIN
    SELECT STD.Id,
           STD.VerkoperId,
           STD.StandType,
           STD.Prijs,
           STD.VerhuurdStatus,
           v.Naam AS VerkoperNaam
    FROM Stand AS STD
    JOIN Verkoper v ON STD.VerkoperId = v.Id;
END$$

DELIMITER ;
