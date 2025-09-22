DROP PROCEDURE IF EXISTS Sp_GetAllStands;

DELIMITER $$

CREATE PROCEDURE Sp_GetAllStands ()
BEGIN

    SELECT STAND.Id
          ,STAND.VerkoperId
          ,STAND.StandType
          ,STAND.Prijs
          ,STAND.VerhuurdStatus
          ,STAND.Omschrijving
          
    FROM Stand AS STAND;

END$$

DELIMITER ;
