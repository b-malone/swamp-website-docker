
-- `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) 
-- values (3, , 1, Report, category-report, 2020-01-08 04:10:56, 2020-01-08 04:10:56)

CREATE TABLE IF NOT EXISTS forge.categories (
	`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	`name` varchar(48) NOT NULL,
	`slug` varchar(48),
	`order` int(10) unsigned NOT NULL DEFAULT 1,
	`created_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
	`updated_at` datetime NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;

--   KEY `qual_id` (`qual_id`),
--   CONSTRAINT `user_qual_doc_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),