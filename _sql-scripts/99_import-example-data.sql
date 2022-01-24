-- run script as user: m290_lb02

USE m290_lb02;

-- example user
-- username: maxmustermann
-- password: Sommer2020
INSERT INTO `t_users` 
    (`id`, `username`, `password`, `emailaddress`, `firstname`, `lastname`, `disabled`, `createdat`) VALUES 
    (NULL, 'maxmustermann', '62767e547fd5280353c4c1336fb1b62c', 'max@mustermann.ch', 'Max', 'Mustermann', '0', '2022-01-23 22:37:38');