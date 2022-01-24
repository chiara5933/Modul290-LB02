-- run script as user: m290_lb02

USE m290_lb02; -- datenbank auswählen
CREATE TABLE `m290_lb02`.`t_users` ( 
    `id` INT NULL AUTO_INCREMENT, -- feld id mit automatischer zählung erstellen
    `username` VARCHAR(45) NOT NULL ,  -- feld username mit max. 45 zeichen
    `password` VARCHAR(32) NOT NULL ,  -- feld passwort mit max. 32 zeichen, da md5 hash
    `emailaddress` VARCHAR(120) NOT NULL , -- feld emailadrress 
    `firstname` VARCHAR(50) NOT NULL ,  -- feld firstname
    `lastname` VARCHAR(50) NOT NULL ,  -- feld lastname
    `disabled` TINYINT NOT NULL DEFAULT '0' , -- feld disabled für status des users
    `createdat` datetime NOT NULL, -- feld createdat für erstellungsdatum
    PRIMARY KEY (`id`) -- id als primary key definieren
); 

ALTER TABLE `t_users` ADD UNIQUE( `username`); -- spalte "username" als unique definieren
ALTER TABLE `t_users` CHANGE `createdat` `createdat` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP; -- default für createdat als CURRENT_TIMESTAMP 