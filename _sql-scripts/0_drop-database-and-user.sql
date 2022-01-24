-- run script as user: root

DROP USER 'm290_lb02'@'%'; -- user m290_lb02 löschen
DROP DATABASE IF EXISTS `m290_lb02`; -- datenbank m290_lb02 wenn existent löschen