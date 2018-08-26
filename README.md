# php_basico

CREATE TABLE `tipos` (
	`id` INT(10) AUTO_INCREMENT NOT NULL,
	`name` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish_ci',
	`created_at` DATETIME NOT NULL,
	`updated_at` DATETIME NOT NULL,
	`deleted_at` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_spanish_ci'
ENGINE=InnoDB
;


CREATE TABLE `comentarios` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`fecha_crea` DATETIME NULL DEFAULT NULL,
	`name` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8_spanish_ci',
	`description` VARCHAR(500) NULL DEFAULT NULL COLLATE 'utf8_spanish_ci',
	`tipo_id` INT(10) NULL DEFAULT NULL,
	`created_at` DATETIME NULL DEFAULT NULL,
	`updated_at` DATETIME NULL DEFAULT NULL,
	`deleted_at` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	CONSTRAINT `FK_comentarios_tipos` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`)
)
COLLATE='utf8_spanish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;

