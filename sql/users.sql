-- FlexiAPI Generated SQL for 'users' endpoint
-- Generated on: 2025-10-22 14:16:28

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(255) NOT NULL,
  `Age` VARCHAR(255) NOT NULL,
  `Password` VARCHAR(255) NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE INDEX `idx_users_Name` ON `users` (`Name`);
CREATE INDEX `idx_users_Age` ON `users` (`Age`);
