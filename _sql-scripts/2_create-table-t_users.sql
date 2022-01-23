-- run script as user: m290_lb02

-- t_ stands for table
USE m290_lb02;
CREATE TABLE `m290_lb02`.`t_users` ( 
    `id` INT NULL AUTO_INCREMENT, 
    `username` VARCHAR(45) NOT NULL , 
    `password` VARCHAR(32) NOT NULL , 
    `emailaddress` VARCHAR(120) NOT NULL , 
    `firstname` VARCHAR(50) NOT NULL , 
    `lastname` VARCHAR(50) NOT NULL , 
    `disabled` TINYINT NOT NULL DEFAULT '0' , 
    PRIMARY KEY (`id`)
); 