CREATE TABLE `gestioncompte`.`articles` (`id` INT NOT NULL AUTO_INCREMENT , `tire` VARCHAR(100) NOT NULL , `contenu` TEXT NOT NULL , `date_creation` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `gestioncompte`.`commentaires` (`id` INT NOT NULL AUTO_INCREMENT , `article_id` INT NOT NULL , `auteur` VARCHAR(100) NOT NULL , `contenu` TEXT NOT NULL , `date_creation` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
