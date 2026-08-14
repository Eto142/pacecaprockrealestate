-- SQL Commands to update the server DB
-- Run this in your database management tool (e.g., phpMyAdmin)

-- 1. Create the 'admins' table
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. Insert the default Admin user
-- Email: admin@caprock.com
-- Password: password
INSERT INTO `admins` (`name`, `email`, `password`, `created_at`, `updated_at`) VALUES
('Admin', 'admin@caprock.com', '$2y$10$.aP/1/p0C.V5C/j5C/h5..e4oKoEa3Ro9llC/.og/at2.uheWG/igi', NOW(), NOW());
/* Note: The password hash above is for 'password' using Laravel's default Bcrypt settings. 
   If it doesn't work, you might need to generate a new hash using `php artisan tinker` on your server: 
   echo Hash::make('password');
*/
