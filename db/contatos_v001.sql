CREATE TABLE IF NOT EXISTS `usuarios` (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL, 
senha VARCHAR(110),
email VARCHAR(100) UNIQUE,
token VARCHAR(255) DEFAULT NULL,
PRIMARY KEY (`id`)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `contatos_info` (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
telefone VARCHAR(100) NOT NULL,
email VARCHAR(100) UNIQUE,
PRIMARY KEY (`id`)
)ENGINE=InnoDB;

DROP TABLE `usuarios`;