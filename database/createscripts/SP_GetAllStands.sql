DROP PROCEDURE IF EXISTS Sp_GetAllLeveranciers;
DELIMITER $$

CREATE PROCEDURE Sp_GetAllStands ()
BEGIN
    SELECT STD.Id,
           STD.VerkoperId,
           STD.StandType,
           STD.Prijs,
           STD.VerhuurdStatus,
           STD.Isactief,
           STD.Opmerking,
           STD.Datumaangemaakt,
           STD.Datumgewijzigd
    FROM Stand AS STD;
END$$

DELIMITER ;
