USE `archival`;

ALTER TABLE `codedpapers` ADD `is_review` BOOLEAN NOT NULL DEFAULT FALSE;

ALTER TABLE `studies` ADD `reviewed_id` INT NULL DEFAULT NULL AFTER `codedpaper_id` ;
ALTER TABLE `studies` ADD INDEX ( `reviewed_id` ) ;
ALTER TABLE `studies` ADD FOREIGN KEY ( `reviewed_id` ) REFERENCES `studies` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;

ALTER TABLE `tests` ADD `reviewed_id` INT NULL DEFAULT NULL AFTER `study_id` ;
ALTER TABLE `tests` ADD INDEX ( `reviewed_id` ) ;
ALTER TABLE `tests` ADD FOREIGN KEY ( `reviewed_id` ) REFERENCES `tests` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT ;