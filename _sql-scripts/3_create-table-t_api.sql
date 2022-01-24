-- run script as user: m290_lb02

-- t_ stands for table
USE m290_lb02; -- datenbank auswählen
CREATE TABLE `m290_lb02`.`t_api` ( 
    `id` INT NULL AUTO_INCREMENT, -- feld id mit automatischer zählung erstellen
    `secret` VARCHAR(50) NOT NULL ,  -- feld username mit max. 45 zeichen
    `description` VARCHAR(120) NOT NULL ,  -- feld passwort mit max. 32 zeichen, da md5 hash
    PRIMARY KEY (`id`)
); 

ALTER TABLE `t_api` ADD UNIQUE( `secret`); 