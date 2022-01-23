-- run script as user: root

CREATE DATABASE m290_lb02; -- datenbank erstellen
GRANT ALL ON m290_lb02.* to 'm290_lb02'@'%' identified by 'cg8yz6sb2kd1zv2ar7tn'; -- user erstellen, password setzen und berechtigungen zuweisen