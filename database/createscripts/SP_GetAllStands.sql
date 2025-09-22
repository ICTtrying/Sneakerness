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
