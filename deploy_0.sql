ALTER TABLE `codedpapers` ADD `is_review` BOOLEAN NOT NULL DEFAULT FALSE;
ALTER TABLE `studies` ADD `reviewed_id` INT NULL DEFAULT NULL AFTER `codedpaper_id` ;