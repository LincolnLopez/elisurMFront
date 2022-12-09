SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS elisur;

USE elisur;

DROP TABLE IF EXISTS failed_jobs;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS migrations;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO migrations VALUES("1","2014_10_12_000000_create_users_table","1");
INSERT INTO migrations VALUES("2","2014_10_12_100000_create_password_resets_table","1");
INSERT INTO migrations VALUES("3","2019_08_19_000000_create_failed_jobs_table","1");
INSERT INTO migrations VALUES("4","2019_12_14_000001_create_personal_access_tokens_table","1");
INSERT INTO migrations VALUES("5","2022_12_06_050104_create_permission_tables","1");



DROP TABLE IF EXISTS model_has_permissions;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS model_has_roles;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO model_has_roles VALUES("1","App\\Models\\User","1");
INSERT INTO model_has_roles VALUES("2","App\\Models\\User","2");
INSERT INTO model_has_roles VALUES("3","App\\Models\\User","3");



DROP TABLE IF EXISTS password_resets;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS permissions;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO permissions VALUES("1","ver-usuario","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("2","crear-usuario","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("3","editar-usuario","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("4","borrar-usuario","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("5","ver-rol","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("6","crear-rol","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("7","editar-rol","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("8","borrar-rol","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("9","ver-empleados","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("10","crear-empleados","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("11","editar-empleados","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("12","borrar-empleados","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("13","ver-clientes","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("14","crear-clientes","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("15","editar-clientes","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("16","borrar-clientes","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("17","ver-articulo","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("18","crear-articulo","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("19","editar-articulo","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("20","borrar-articulo","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("21","ver-inventarios","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("22","crear-inventarios","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("23","editar-inventarios","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("24","borrar-inventarios","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("25","ver-inventarioH","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("26","crear-inventarioH","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("27","editar-inventarioH","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("28","borrar-inventarioH","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("29","ver-ticket","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("30","crear-ticket","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("31","editar-ticket","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("32","borrar-ticket","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("33","ver-presupuesto","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("34","crear-presupuesto","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("35","editar-presupuesto","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("36","borrar-presupuesto","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("37","ver-reportes","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("38","crear-reportes","web","2022-12-07 02:38:06","2022-12-07 02:38:06");
INSERT INTO permissions VALUES("39","ver-bitacora","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("40","ver-presupuestoUsuario","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("41","crear-presupuestoUsuario","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("42","editar-presupuestoUsuario","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("43","borrar-presupuestoUsuario","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("44","ver-encuesta","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("45","crear-encuesta","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("46","editar-encuesta","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("47","ver-Solicitudes_cliente","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("48","crear-Solicitudes_cliente","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("49","ver-bolsatrabajoEmpleado","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("50","crear-bolsatrabajoEmpleado","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("51","editar-bolsatrabajoEmpleado","web","2022-12-07 02:38:07","2022-12-07 02:38:07");
INSERT INTO permissions VALUES("52","borrar-bolsatrabajoEmpleado","web","2022-12-07 02:38:07","2022-12-07 02:38:07");



DROP TABLE IF EXISTS personal_access_tokens;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS role_has_permissions;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO role_has_permissions VALUES("1","1");
INSERT INTO role_has_permissions VALUES("2","1");
INSERT INTO role_has_permissions VALUES("3","1");
INSERT INTO role_has_permissions VALUES("4","1");
INSERT INTO role_has_permissions VALUES("5","1");
INSERT INTO role_has_permissions VALUES("6","1");
INSERT INTO role_has_permissions VALUES("7","1");
INSERT INTO role_has_permissions VALUES("8","1");
INSERT INTO role_has_permissions VALUES("9","1");
INSERT INTO role_has_permissions VALUES("10","1");
INSERT INTO role_has_permissions VALUES("11","1");
INSERT INTO role_has_permissions VALUES("12","1");
INSERT INTO role_has_permissions VALUES("13","1");
INSERT INTO role_has_permissions VALUES("14","1");
INSERT INTO role_has_permissions VALUES("15","1");
INSERT INTO role_has_permissions VALUES("16","1");
INSERT INTO role_has_permissions VALUES("17","1");
INSERT INTO role_has_permissions VALUES("18","1");
INSERT INTO role_has_permissions VALUES("19","1");
INSERT INTO role_has_permissions VALUES("20","1");
INSERT INTO role_has_permissions VALUES("21","1");
INSERT INTO role_has_permissions VALUES("22","1");
INSERT INTO role_has_permissions VALUES("23","1");
INSERT INTO role_has_permissions VALUES("24","1");
INSERT INTO role_has_permissions VALUES("25","1");
INSERT INTO role_has_permissions VALUES("26","1");
INSERT INTO role_has_permissions VALUES("27","1");
INSERT INTO role_has_permissions VALUES("28","1");
INSERT INTO role_has_permissions VALUES("29","1");
INSERT INTO role_has_permissions VALUES("30","1");
INSERT INTO role_has_permissions VALUES("31","1");
INSERT INTO role_has_permissions VALUES("32","1");
INSERT INTO role_has_permissions VALUES("33","1");
INSERT INTO role_has_permissions VALUES("34","1");
INSERT INTO role_has_permissions VALUES("35","1");
INSERT INTO role_has_permissions VALUES("36","1");
INSERT INTO role_has_permissions VALUES("37","1");
INSERT INTO role_has_permissions VALUES("38","1");
INSERT INTO role_has_permissions VALUES("39","1");
INSERT INTO role_has_permissions VALUES("40","1");
INSERT INTO role_has_permissions VALUES("40","2");
INSERT INTO role_has_permissions VALUES("40","3");
INSERT INTO role_has_permissions VALUES("41","1");
INSERT INTO role_has_permissions VALUES("41","2");
INSERT INTO role_has_permissions VALUES("41","3");
INSERT INTO role_has_permissions VALUES("42","1");
INSERT INTO role_has_permissions VALUES("42","2");
INSERT INTO role_has_permissions VALUES("42","3");
INSERT INTO role_has_permissions VALUES("43","1");
INSERT INTO role_has_permissions VALUES("43","2");
INSERT INTO role_has_permissions VALUES("43","3");
INSERT INTO role_has_permissions VALUES("44","1");
INSERT INTO role_has_permissions VALUES("44","2");
INSERT INTO role_has_permissions VALUES("45","1");
INSERT INTO role_has_permissions VALUES("45","2");
INSERT INTO role_has_permissions VALUES("46","1");
INSERT INTO role_has_permissions VALUES("46","2");
INSERT INTO role_has_permissions VALUES("47","1");
INSERT INTO role_has_permissions VALUES("47","2");
INSERT INTO role_has_permissions VALUES("48","1");
INSERT INTO role_has_permissions VALUES("48","2");
INSERT INTO role_has_permissions VALUES("49","1");
INSERT INTO role_has_permissions VALUES("49","3");
INSERT INTO role_has_permissions VALUES("50","1");
INSERT INTO role_has_permissions VALUES("50","3");
INSERT INTO role_has_permissions VALUES("51","1");
INSERT INTO role_has_permissions VALUES("51","3");
INSERT INTO role_has_permissions VALUES("52","1");
INSERT INTO role_has_permissions VALUES("52","3");



DROP TABLE IF EXISTS roles;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO roles VALUES("1","Administrador","web","2022-12-07 02:41:22","2022-12-07 02:41:22");
INSERT INTO roles VALUES("2","Cliente","web","2022-12-07 02:42:28","2022-12-07 02:42:28");
INSERT INTO roles VALUES("3","Empleado","web","2022-12-07 02:43:29","2022-12-07 02:43:29");



DROP TABLE IF EXISTS tbl_articulos;

CREATE TABLE `tbl_articulos` (
  `cod_articulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_articulo` varchar(150) NOT NULL,
  `descripcion_articulo` varchar(250) NOT NULL,
  `precio_articulo` decimal(10,2) NOT NULL,
  `estado_articulo` enum('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `cod_categoria` bigint(20) NOT NULL,
  PRIMARY KEY (`cod_articulo`),
  KEY `fk_articulo_categoria_idx` (`cod_categoria`),
  CONSTRAINT `fk_articulo_categoria` FOREIGN KEY (`cod_categoria`) REFERENCES `tbl_categorias` (`cod_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

INSERT INTO tbl_articulos VALUES("1","Tela","Tela de cuero","200.00","ACTIVO","2022-10-21 20:12:40","1");
INSERT INTO tbl_articulos VALUES("2"," otrsssafdsfds cosa"," mas","1120.00","ACTIVO","2022-10-31 23:03:33","1");
INSERT INTO tbl_articulos VALUES("4","ddd"," sss","200.00","ACTIVO","2022-11-02 22:48:45","1");
INSERT INTO tbl_articulos VALUES("5","Tela de weyaaa","Tela de cuero de hombre y mujer","200.00","ACTIVO","2022-11-04 14:02:28","1");
INSERT INTO tbl_articulos VALUES("6","PROBANDO BITACORA2","PROBANDO BITACORA2","500.00","INACTIVO","2022-11-23 14:24:35","1");
INSERT INTO tbl_articulos VALUES("7","fdfdfd","null","11.00","ACTIVO","2022-11-30 23:55:27","1");
INSERT INTO tbl_articulos VALUES("8","null","121","100.00","ACTIVO","2022-12-01 00:01:33","1");



DROP TABLE IF EXISTS tbl_bitacora;

CREATE TABLE `tbl_bitacora` (
  `cod_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `operacion` varchar(100) NOT NULL,
  `modificado` datetime NOT NULL,
  `tabla` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_bitacora`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8mb4;

INSERT INTO tbl_bitacora VALUES("1","root@localhost","INSERTO","2022-11-23 14:24:35","ARTICULOS");
INSERT INTO tbl_bitacora VALUES("2","root@localhost","INSERTO","2022-11-23 15:22:07","USUARIOS");
INSERT INTO tbl_bitacora VALUES("3","root@localhost","ACTUALIZO","2022-11-23 16:43:58","USUARIOS");
INSERT INTO tbl_bitacora VALUES("4","root@localhost","ACTUALIZO","2022-11-23 17:09:07","ARTICULOS");
INSERT INTO tbl_bitacora VALUES("5","root@localhost","ACTUALIZO","2022-11-23 19:13:42","USUARIOS");
INSERT INTO tbl_bitacora VALUES("6","root@localhost","REGISTRO","2022-11-24 21:19:48","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("7","root@localhost","ACTUALIZO","2022-11-24 21:27:38","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("8","root@localhost","ACTUALIZO","2022-11-24 21:29:01","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("9","root@localhost","REGISTRO","2022-11-24 21:36:42","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("10","root@localhost","ACTUALIZO","2022-11-24 21:39:31","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("11","root@localhost","ACTUALIZO","2022-11-24 21:42:17","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("12","root@localhost","REGISTRO","2022-11-26 21:50:52","CLIENTE");
INSERT INTO tbl_bitacora VALUES("13","root@localhost","APERTURO","2022-11-28 21:42:21","TICKET");
INSERT INTO tbl_bitacora VALUES("14","root@localhost","ACTUALIZO","2022-11-28 21:48:48","TICKET");
INSERT INTO tbl_bitacora VALUES("15","root@localhost","CREO","2022-11-28 22:25:12","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("16","root@localhost","CREO","2022-11-28 22:34:06","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("17","root@localhost","CREO","2022-11-28 22:34:50","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("18","root@localhost","CREO","2022-11-28 22:39:56","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("19","root@localhost","CREO","2022-11-28 22:42:08","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("20","root@localhost","CREO","2022-11-28 22:54:42","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("21","root@localhost","CREO","2022-11-28 22:55:42","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("22","root@localhost","CREO","2022-11-28 22:58:31","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("23","root@localhost","ACTUALIZO","2022-11-29 00:11:07","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("24","root@localhost","DESACTIVO","2022-11-29 00:11:49","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("25","root@localhost","DESACTIVO","2022-11-29 00:12:02","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("26","root@localhost","DESACTIVO","2022-11-29 00:12:15","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("27","root@localhost","CREO","2022-11-29 00:37:46","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("28","root@localhost","ACTUALIZO","2022-11-29 00:38:22","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("29","root@localhost","ACTUALIZO","2022-11-29 00:38:36","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("30","root@localhost","ACTUALIZO","2022-11-29 00:53:29","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("31","root@localhost","ACTUALIZO","2022-11-29 00:54:34","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("32","root@localhost","ACTUALIZO","2022-11-29 00:54:34","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("33","root@localhost","ACTUALIZO","2022-11-29 00:55:11","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("34","root@localhost","DESACTIVO","2022-11-29 00:55:28","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("35","root@localhost","DESACTIVO","2022-11-29 00:55:36","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("36","root@localhost","ACTUALIZO","2022-11-29 00:56:07","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("37","root@localhost","ACTUALIZO","2022-11-29 00:58:26","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("38","root@localhost","ACTUALIZO","2022-11-29 00:58:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("39","root@localhost","ACTUALIZO","2022-11-29 00:59:00","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("40","root@localhost","CREO","2022-11-29 23:37:55","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("41","root@localhost","CREO","2022-11-29 23:39:08","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("42","root@localhost","ACTUALIZO","2022-11-30 15:55:28","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("43","root@localhost","APERTURO","2022-11-30 16:13:18","TICKET");
INSERT INTO tbl_bitacora VALUES("44","root@localhost","ACTUALIZO","2022-11-30 17:08:55","TICKET");
INSERT INTO tbl_bitacora VALUES("45","root@localhost","ACTUALIZO","2022-11-30 17:10:08","TICKET");
INSERT INTO tbl_bitacora VALUES("46","root@localhost","ACTUALIZO","2022-11-30 17:58:31","TICKET");
INSERT INTO tbl_bitacora VALUES("47","root@localhost","ACTUALIZO","2022-11-30 18:04:18","TICKET");
INSERT INTO tbl_bitacora VALUES("48","root@localhost","ACTUALIZO","2022-11-30 18:05:26","TICKET");
INSERT INTO tbl_bitacora VALUES("49","root@localhost","ACTUALIZO","2022-11-30 18:08:04","TICKET");
INSERT INTO tbl_bitacora VALUES("50","root@localhost","ACTUALIZO","2022-11-30 18:09:24","TICKET");
INSERT INTO tbl_bitacora VALUES("51","root@localhost","ACTUALIZO","2022-11-30 18:09:31","TICKET");
INSERT INTO tbl_bitacora VALUES("52","root@localhost","ACTUALIZO","2022-11-30 18:25:33","TICKET");
INSERT INTO tbl_bitacora VALUES("53","root@localhost","ACTUALIZO","2022-11-30 18:25:40","TICKET");
INSERT INTO tbl_bitacora VALUES("54","root@localhost","ACTUALIZO","2022-11-30 18:26:02","TICKET");
INSERT INTO tbl_bitacora VALUES("55","root@localhost","ACTUALIZO","2022-11-30 18:26:58","TICKET");
INSERT INTO tbl_bitacora VALUES("56","root@localhost","ACTUALIZO","2022-11-30 18:27:34","TICKET");
INSERT INTO tbl_bitacora VALUES("57","root@localhost","ACTUALIZO","2022-11-30 18:27:39","TICKET");
INSERT INTO tbl_bitacora VALUES("58","root@localhost","ACTUALIZO","2022-11-30 18:29:01","TICKET");
INSERT INTO tbl_bitacora VALUES("59","root@localhost","ACTUALIZO","2022-11-30 18:29:06","TICKET");
INSERT INTO tbl_bitacora VALUES("60","root@localhost","ACTUALIZO","2022-11-30 18:34:53","TICKET");
INSERT INTO tbl_bitacora VALUES("61","root@localhost","ACTUALIZO","2022-11-30 19:10:05","TICKET");
INSERT INTO tbl_bitacora VALUES("62","root@localhost","ACTUALIZO","2022-11-30 19:10:11","TICKET");
INSERT INTO tbl_bitacora VALUES("63","root@localhost","ACTUALIZO","2022-11-30 19:10:28","TICKET");
INSERT INTO tbl_bitacora VALUES("64","root@localhost","ACTUALIZO","2022-11-30 19:10:55","TICKET");
INSERT INTO tbl_bitacora VALUES("65","root@localhost","ACTUALIZO","2022-11-30 19:11:02","TICKET");
INSERT INTO tbl_bitacora VALUES("66","root@localhost","ACTUALIZO","2022-11-30 19:13:40","TICKET");
INSERT INTO tbl_bitacora VALUES("67","root@localhost","ACTUALIZO","2022-11-30 19:16:10","TICKET");
INSERT INTO tbl_bitacora VALUES("68","root@localhost","ACTUALIZO","2022-11-30 19:19:24","TICKET");
INSERT INTO tbl_bitacora VALUES("69","root@localhost","ACTUALIZO","2022-11-30 19:21:06","TICKET");
INSERT INTO tbl_bitacora VALUES("70","root@localhost","ACTUALIZO","2022-11-30 19:23:41","TICKET");
INSERT INTO tbl_bitacora VALUES("71","root@localhost","ACTUALIZO","2022-11-30 19:27:23","TICKET");
INSERT INTO tbl_bitacora VALUES("72","root@localhost","ACTUALIZO","2022-11-30 19:31:09","TICKET");
INSERT INTO tbl_bitacora VALUES("73","root@localhost","ACTUALIZO","2022-11-30 19:35:01","TICKET");
INSERT INTO tbl_bitacora VALUES("74","root@localhost","ACTUALIZO","2022-11-30 19:35:46","TICKET");
INSERT INTO tbl_bitacora VALUES("75","root@localhost","ACTUALIZO","2022-11-30 19:37:07","TICKET");
INSERT INTO tbl_bitacora VALUES("76","root@localhost","ACTUALIZO","2022-11-30 19:39:17","TICKET");
INSERT INTO tbl_bitacora VALUES("77","root@localhost","ACTUALIZO","2022-11-30 19:39:23","TICKET");
INSERT INTO tbl_bitacora VALUES("78","root@localhost","ACTUALIZO","2022-11-30 19:39:27","TICKET");
INSERT INTO tbl_bitacora VALUES("79","root@localhost","ACTUALIZO","2022-11-30 19:40:12","TICKET");
INSERT INTO tbl_bitacora VALUES("80","root@localhost","ACTUALIZO","2022-11-30 19:40:16","TICKET");
INSERT INTO tbl_bitacora VALUES("81","root@localhost","ACTUALIZO","2022-11-30 19:40:21","TICKET");
INSERT INTO tbl_bitacora VALUES("82","root@localhost","ACTUALIZO","2022-11-30 19:40:25","TICKET");
INSERT INTO tbl_bitacora VALUES("83","root@localhost","ACTUALIZO","2022-11-30 19:40:29","TICKET");
INSERT INTO tbl_bitacora VALUES("84","root@localhost","ACTUALIZO","2022-11-30 19:40:33","TICKET");
INSERT INTO tbl_bitacora VALUES("85","root@localhost","ACTUALIZO","2022-11-30 19:43:57","TICKET");
INSERT INTO tbl_bitacora VALUES("86","root@localhost","ACTUALIZO","2022-11-30 19:44:02","TICKET");
INSERT INTO tbl_bitacora VALUES("87","root@localhost","APERTURO","2022-11-30 20:02:32","TICKET");
INSERT INTO tbl_bitacora VALUES("88","root@localhost","ACTUALIZO","2022-11-30 20:05:57","TICKET");
INSERT INTO tbl_bitacora VALUES("89","root@localhost","ACTUALIZO","2022-11-30 20:06:04","TICKET");
INSERT INTO tbl_bitacora VALUES("90","root@localhost","ACTUALIZO","2022-11-30 20:06:09","TICKET");
INSERT INTO tbl_bitacora VALUES("91","root@localhost","ACTUALIZO","2022-11-30 20:06:17","TICKET");
INSERT INTO tbl_bitacora VALUES("92","root@localhost","ACTUALIZO","2022-11-30 20:06:22","TICKET");
INSERT INTO tbl_bitacora VALUES("93","root@localhost","INSERTO","2022-11-30 23:55:27","ARTICULOS");
INSERT INTO tbl_bitacora VALUES("94","root@localhost","INSERTO","2022-12-01 00:01:33","ARTICULOS");
INSERT INTO tbl_bitacora VALUES("95","root@localhost","CREO","2022-12-01 03:36:53","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("96","root@localhost","CREO","2022-12-01 14:09:21","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("97","root@localhost","ACTUALIZO","2022-12-01 14:50:57","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("98","root@localhost","ACTUALIZO","2022-12-01 16:01:37","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("99","root@localhost","REGISTRO","2022-12-01 16:02:18","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("100","root@localhost","ACTIVO","2022-12-01 16:02:42","CLIENTE");
INSERT INTO tbl_bitacora VALUES("101","root@localhost","ACTIVO","2022-12-01 16:02:59","CLIENTE");
INSERT INTO tbl_bitacora VALUES("102","root@localhost","REGISTRO","2022-12-01 16:03:33","CLIENTE");
INSERT INTO tbl_bitacora VALUES("103","root@localhost","ACTIVO","2022-12-01 16:03:56","CLIENTE");
INSERT INTO tbl_bitacora VALUES("104","root@localhost","ACTUALIZO","2022-12-01 16:05:50","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("105","root@localhost","ACTUALIZO","2022-12-01 16:11:33","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("106","root@localhost","APERTURO","2022-12-01 20:58:30","TICKET");
INSERT INTO tbl_bitacora VALUES("107","root@localhost","APERTURO","2022-12-01 22:11:52","TICKET");
INSERT INTO tbl_bitacora VALUES("108","root@localhost","APERTURO","2022-12-01 22:16:57","TICKET");
INSERT INTO tbl_bitacora VALUES("109","root@localhost","ACTUALIZO","2022-12-02 15:02:00","TICKET");
INSERT INTO tbl_bitacora VALUES("110","root@localhost","ACTUALIZO","2022-12-02 15:04:14","TICKET");
INSERT INTO tbl_bitacora VALUES("111","root@localhost","ACTUALIZO","2022-12-02 15:04:38","TICKET");
INSERT INTO tbl_bitacora VALUES("112","root@localhost","ACTUALIZO","2022-12-02 15:14:15","TICKET");
INSERT INTO tbl_bitacora VALUES("113","root@localhost","ACTUALIZO","2022-12-02 15:14:24","TICKET");
INSERT INTO tbl_bitacora VALUES("114","root@localhost","ACTUALIZO","2022-12-02 15:16:51","TICKET");
INSERT INTO tbl_bitacora VALUES("115","root@localhost","ACTUALIZO","2022-12-02 15:30:39","TICKET");
INSERT INTO tbl_bitacora VALUES("116","root@localhost","ACTUALIZO","2022-12-02 15:31:01","TICKET");
INSERT INTO tbl_bitacora VALUES("117","root@localhost","ACTUALIZO","2022-12-02 15:37:43","TICKET");
INSERT INTO tbl_bitacora VALUES("118","root@localhost","ACTUALIZO","2022-12-02 15:37:47","TICKET");
INSERT INTO tbl_bitacora VALUES("119","root@localhost","ACTUALIZO","2022-12-02 15:37:52","TICKET");
INSERT INTO tbl_bitacora VALUES("120","root@localhost","ACTUALIZO","2022-12-02 15:37:56","TICKET");
INSERT INTO tbl_bitacora VALUES("121","root@localhost","ACTUALIZO","2022-12-02 15:37:59","TICKET");
INSERT INTO tbl_bitacora VALUES("122","root@localhost","ACTUALIZO","2022-12-02 15:38:04","TICKET");
INSERT INTO tbl_bitacora VALUES("123","root@localhost","ACTUALIZO","2022-12-02 15:42:09","TICKET");
INSERT INTO tbl_bitacora VALUES("124","root@localhost","ACTUALIZO","2022-12-02 15:43:42","TICKET");
INSERT INTO tbl_bitacora VALUES("125","root@localhost","ACTUALIZO","2022-12-02 15:43:55","TICKET");
INSERT INTO tbl_bitacora VALUES("126","root@localhost","ACTUALIZO","2022-12-02 15:48:52","TICKET");
INSERT INTO tbl_bitacora VALUES("127","root@localhost","ACTUALIZO","2022-12-02 16:06:21","TICKET");
INSERT INTO tbl_bitacora VALUES("128","root@localhost","ACTUALIZO","2022-12-02 16:16:05","TICKET");
INSERT INTO tbl_bitacora VALUES("129","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("130","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("131","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("132","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("133","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("134","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("135","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("136","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("137","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("138","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("139","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("140","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("141","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("142","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("143","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("144","root@localhost","DESACTIVO","2022-12-02 16:31:33","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("145","root@localhost","APERTURO","2022-12-02 16:41:20","TICKET");
INSERT INTO tbl_bitacora VALUES("146","root@localhost","ACTUALIZO","2022-12-02 16:43:09","TICKET");
INSERT INTO tbl_bitacora VALUES("147","root@localhost","ACTUALIZO","2022-12-02 16:44:07","TICKET");
INSERT INTO tbl_bitacora VALUES("148","root@localhost","APERTURO","2022-12-02 16:44:25","TICKET");
INSERT INTO tbl_bitacora VALUES("149","root@localhost","ACTUALIZO","2022-12-02 16:45:33","TICKET");
INSERT INTO tbl_bitacora VALUES("150","root@localhost","ACTUALIZO","2022-12-02 16:45:33","TICKET");
INSERT INTO tbl_bitacora VALUES("151","root@localhost","ACTUALIZO","2022-12-02 16:45:48","TICKET");
INSERT INTO tbl_bitacora VALUES("152","root@localhost","ACTUALIZO","2022-12-02 16:46:08","TICKET");
INSERT INTO tbl_bitacora VALUES("153","root@localhost","ACTUALIZO","2022-12-02 16:49:04","TICKET");
INSERT INTO tbl_bitacora VALUES("154","root@localhost","ACTUALIZO","2022-12-02 16:49:16","TICKET");
INSERT INTO tbl_bitacora VALUES("155","root@localhost","ACTUALIZO","2022-12-02 16:50:08","TICKET");
INSERT INTO tbl_bitacora VALUES("156","root@localhost","ACTUALIZO","2022-12-02 16:50:10","TICKET");
INSERT INTO tbl_bitacora VALUES("157","root@localhost","APERTURO","2022-12-02 16:54:24","TICKET");
INSERT INTO tbl_bitacora VALUES("158","root@localhost","ACTUALIZO","2022-12-02 16:54:44","TICKET");
INSERT INTO tbl_bitacora VALUES("159","root@localhost","ACTUALIZO","2022-12-02 16:56:01","TICKET");
INSERT INTO tbl_bitacora VALUES("160","root@localhost","ACTUALIZO","2022-12-02 16:57:16","TICKET");
INSERT INTO tbl_bitacora VALUES("161","root@localhost","ACTUALIZO","2022-12-02 16:59:32","TICKET");
INSERT INTO tbl_bitacora VALUES("162","root@localhost","ACTUALIZO","2022-12-02 17:01:06","TICKET");
INSERT INTO tbl_bitacora VALUES("163","root@localhost","ACTUALIZO","2022-12-02 17:02:31","TICKET");
INSERT INTO tbl_bitacora VALUES("164","root@localhost","ACTUALIZO","2022-12-02 17:10:07","TICKET");
INSERT INTO tbl_bitacora VALUES("165","root@localhost","ACTUALIZO","2022-12-02 17:10:26","TICKET");
INSERT INTO tbl_bitacora VALUES("166","root@localhost","ACTUALIZO","2022-12-02 17:10:41","TICKET");
INSERT INTO tbl_bitacora VALUES("167","root@localhost","ACTUALIZO","2022-12-02 17:14:51","TICKET");
INSERT INTO tbl_bitacora VALUES("168","root@localhost","ACTUALIZO","2022-12-02 17:14:54","TICKET");
INSERT INTO tbl_bitacora VALUES("169","root@localhost","ACTUALIZO","2022-12-02 17:15:22","TICKET");
INSERT INTO tbl_bitacora VALUES("170","root@localhost","ACTUALIZO","2022-12-02 17:15:30","TICKET");
INSERT INTO tbl_bitacora VALUES("171","root@localhost","ACTUALIZO","2022-12-02 17:15:38","TICKET");
INSERT INTO tbl_bitacora VALUES("172","root@localhost","ACTUALIZO","2022-12-02 17:17:39","TICKET");
INSERT INTO tbl_bitacora VALUES("173","root@localhost","ACTUALIZO","2022-12-02 17:17:43","TICKET");
INSERT INTO tbl_bitacora VALUES("174","root@localhost","ACTUALIZO","2022-12-02 17:25:16","TICKET");
INSERT INTO tbl_bitacora VALUES("175","root@localhost","ACTUALIZO","2022-12-02 17:26:15","TICKET");
INSERT INTO tbl_bitacora VALUES("176","root@localhost","ACTUALIZO","2022-12-02 17:26:21","TICKET");
INSERT INTO tbl_bitacora VALUES("177","root@localhost","ACTUALIZO","2022-12-02 17:26:33","TICKET");
INSERT INTO tbl_bitacora VALUES("178","root@localhost","ACTUALIZO","2022-12-02 17:28:00","TICKET");
INSERT INTO tbl_bitacora VALUES("179","root@localhost","ACTUALIZO","2022-12-02 17:28:00","TICKET");
INSERT INTO tbl_bitacora VALUES("180","root@localhost","ACTUALIZO","2022-12-02 17:28:00","TICKET");
INSERT INTO tbl_bitacora VALUES("181","root@localhost","ACTUALIZO","2022-12-02 17:29:05","TICKET");
INSERT INTO tbl_bitacora VALUES("182","root@localhost","ACTUALIZO","2022-12-02 17:30:26","TICKET");
INSERT INTO tbl_bitacora VALUES("183","root@localhost","ACTUALIZO","2022-12-02 17:31:33","TICKET");
INSERT INTO tbl_bitacora VALUES("184","root@localhost","ACTUALIZO","2022-12-02 17:31:56","TICKET");
INSERT INTO tbl_bitacora VALUES("185","root@localhost","ACTUALIZO","2022-12-02 17:31:56","TICKET");
INSERT INTO tbl_bitacora VALUES("186","root@localhost","ACTUALIZO","2022-12-02 17:31:56","TICKET");
INSERT INTO tbl_bitacora VALUES("187","root@localhost","APERTURO","2022-12-02 17:33:25","TICKET");
INSERT INTO tbl_bitacora VALUES("188","root@localhost","APERTURO","2022-12-02 17:33:26","TICKET");
INSERT INTO tbl_bitacora VALUES("189","root@localhost","APERTURO","2022-12-02 17:33:27","TICKET");
INSERT INTO tbl_bitacora VALUES("190","root@localhost","ACTUALIZO","2022-12-02 17:37:30","TICKET");
INSERT INTO tbl_bitacora VALUES("191","root@localhost","ACTUALIZO","2022-12-02 17:38:54","TICKET");
INSERT INTO tbl_bitacora VALUES("192","root@localhost","ACTUALIZO","2022-12-02 17:39:01","TICKET");
INSERT INTO tbl_bitacora VALUES("193","root@localhost","ACTUALIZO","2022-12-02 17:39:05","TICKET");
INSERT INTO tbl_bitacora VALUES("194","root@localhost","CREO","2022-12-02 17:40:57","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("195","root@localhost","ACTUALIZO","2022-12-03 02:24:25","TICKET");
INSERT INTO tbl_bitacora VALUES("196","root@localhost","CREO","2022-12-03 02:26:23","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("197","root@localhost","ACTUALIZO","2022-12-03 02:27:40","TICKET");
INSERT INTO tbl_bitacora VALUES("198","root@localhost","CREO","2022-12-03 02:28:46","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("199","root@localhost","CREO","2022-12-03 19:29:55","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("200","root@localhost","CREO","2022-12-03 19:32:06","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("201","root@localhost","ACTUALIZO","2022-12-03 19:33:17","TICKET");
INSERT INTO tbl_bitacora VALUES("202","root@localhost","ACTUALIZO","2022-12-03 19:33:20","TICKET");
INSERT INTO tbl_bitacora VALUES("203","root@localhost","ACTUALIZO","2022-12-03 19:40:00","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("204","root@localhost","ACTUALIZO","2022-12-03 19:40:29","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("205","root@localhost","ACTUALIZO","2022-12-03 19:40:49","SOLICITUD");
INSERT INTO tbl_bitacora VALUES("206","root@localhost","ACTUALIZO","2022-12-03 19:41:07","USUARIOS");
INSERT INTO tbl_bitacora VALUES("207","root@localhost","ACTUALIZO","2022-12-03 19:41:22","EMPLEADO");
INSERT INTO tbl_bitacora VALUES("208","root@localhost","ACTIVO","2022-12-03 19:41:33","CLIENTE");



DROP TABLE IF EXISTS tbl_categorias;

CREATE TABLE `tbl_categorias` (
  `cod_categoria` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`cod_categoria`),
  UNIQUE KEY `nombre_categoria_UNIQUE` (`nombre_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

INSERT INTO tbl_categorias VALUES("1","Tapiceria","2022-10-21 20:12:04");
INSERT INTO tbl_categorias VALUES("3","Tdssddsasdsla","2022-11-02 22:52:24");
INSERT INTO tbl_categorias VALUES("4","","2022-11-02 22:35:26");
INSERT INTO tbl_categorias VALUES("11","cxzcxz","2022-11-02 22:47:19");
INSERT INTO tbl_categorias VALUES("16","XDaddddddXdsaD","2022-11-02 22:51:27");
INSERT INTO tbl_categorias VALUES("21","dsad","2022-11-02 23:06:59");
INSERT INTO tbl_categorias VALUES("22","DD","2022-11-02 23:07:43");



DROP TABLE IF EXISTS tbl_clientes;

CREATE TABLE `tbl_clientes` (
  `cod_cliente` bigint(20) NOT NULL AUTO_INCREMENT,
  `dni_cliente` varchar(20) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellidos_cliente` varchar(50) NOT NULL,
  `direccion_cliente` varchar(250) NOT NULL,
  `rtn_cliente` varchar(20) NOT NULL,
  `telefono_cliente` varchar(30) NOT NULL,
  `correo_cliente` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `estado_cliente` enum('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
  `cod_tipo_cliente` bigint(20) NOT NULL,
  PRIMARY KEY (`cod_cliente`),
  UNIQUE KEY `dni_cliente_UNIQUE` (`dni_cliente`),
  KEY `fk_cliente_tipo_idx` (`cod_tipo_cliente`),
  CONSTRAINT `fk_cliente_tipo` FOREIGN KEY (`cod_tipo_cliente`) REFERENCES `tbl_tipos_clientes` (`cod_tipo_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO tbl_clientes VALUES("1","080120323","SE","MAREZ","2GFD4RS4","3123312","null","no","2022-10-30 16:58:20","ACTIVO","1");
INSERT INTO tbl_clientes VALUES("2","080120020323","JOSE","MARTINEZ","2GFDSF44RS4","312312312","","0","2022-11-02 22:53:41","INACTIVO","1");
INSERT INTO tbl_clientes VALUES("3","0801200203","JOSE","MARTINEZ","2GFDSF44RS4","312312312","","0","2022-11-02 22:53:49","INACTIVO","1");
INSERT INTO tbl_clientes VALUES("4","08012NNCVFGFG0323","LINAWEBO","MANREZ","2GFDN4RS4","312CVN3312","22222","0","2022-11-21 17:36:55","ACTIVO","1");
INSERT INTO tbl_clientes VALUES("6","08012CV0323","SCVE","MAREZ","2GFD4RS4","312CV3312","","0","2022-11-21 17:55:37","INACTIVO","1");
INSERT INTO tbl_clientes VALUES("7","08012NNCV0323","SCNNVE","MANREZ","2GFDN4RS4","312CVN3312","22222","llincoln1992@yahoo.es","2022-11-21 17:55:54","ACTIVO","1");
INSERT INTO tbl_clientes VALUES("8","v","v","fg","fgh","fgh","fgh","fgh","2022-11-26 21:50:52","INACTIVO","1");
INSERT INTO tbl_clientes VALUES("9","1111111","Jonatan","Cabrera gomez","Villa Santa margarita, Tegucigalpa","15011111211","96743777","llincoln","2022-12-01 16:03:33","ACTIVO","1");



DROP TABLE IF EXISTS tbl_compras;

CREATE TABLE `tbl_compras` (
  `cod_compra` bigint(20) NOT NULL AUTO_INCREMENT,
  `descripcion_compra` varchar(250) NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `cod_proveedor` bigint(20) NOT NULL,
  PRIMARY KEY (`cod_compra`),
  KEY `fk_compra_proveedor_idx` (`cod_proveedor`),
  CONSTRAINT `fk_compra_proveedor` FOREIGN KEY (`cod_proveedor`) REFERENCES `tbl_proveedores` (`cod_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tbl_compras VALUES("1","Se compran tantas pelotas al por ma","2022-11-02 15:47:27","1");
INSERT INTO tbl_compras VALUES("2","Se compran tantasVCVC pelotas al por ma","2022-11-02 17:07:56","1");
INSERT INTO tbl_compras VALUES("3","Se compran tantas pelotas al por ma","2022-11-02 17:14:26","1");
INSERT INTO tbl_compras VALUES("4","Se compran tantas pelotas al por ma","2022-11-02 17:21:23","1");
INSERT INTO tbl_compras VALUES("5","Se compran tantas pelotas al por ma","2022-11-02 17:21:32","1");
INSERT INTO tbl_compras VALUES("6","Se compran tantas pelotas al por ma","2022-11-02 17:23:05","1");



DROP TABLE IF EXISTS tbl_compras_articulos;

CREATE TABLE `tbl_compras_articulos` (
  `cod_compra_articulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_compra` bigint(20) NOT NULL,
  `cod_articulo` bigint(20) NOT NULL,
  `cantidad_articulo` int(11) NOT NULL,
  `precio_articulo` decimal(10,2) NOT NULL,
  `total_articulo` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cod_compra_articulo`),
  KEY `fk_compras_compras_idx` (`cod_compra`),
  KEY `fk_compras_articulos_idx` (`cod_articulo`),
  CONSTRAINT `fk_compras_articulos` FOREIGN KEY (`cod_articulo`) REFERENCES `tbl_articulos` (`cod_articulo`),
  CONSTRAINT `fk_compras_compras` FOREIGN KEY (`cod_compra`) REFERENCES `tbl_compras` (`cod_compra`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tbl_compras_articulos VALUES("1","1","1","2","10.00","20.00");
INSERT INTO tbl_compras_articulos VALUES("2","2","1","11","200.00","2200.00");
INSERT INTO tbl_compras_articulos VALUES("3","3","1","11","200.00","2200.00");
INSERT INTO tbl_compras_articulos VALUES("4","4","1","11","200.00","2200.00");
INSERT INTO tbl_compras_articulos VALUES("5","5","1","11","200.00","2200.00");
INSERT INTO tbl_compras_articulos VALUES("6","6","1","11","200.00","2200.00");



DROP TABLE IF EXISTS tbl_empleados;

CREATE TABLE `tbl_empleados` (
  `cod_empleado` bigint(20) NOT NULL AUTO_INCREMENT,
  `DNI_EMPLEADO` varchar(20) NOT NULL,
  `nombre_empleado` varchar(50) NOT NULL,
  `apellidos_empleado` varchar(50) NOT NULL,
  `sexo_empleado` enum('H','M') NOT NULL,
  `estado_civil_empleado` enum('S','C','U') NOT NULL,
  `edad_empleado` int(11) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado_empleado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO tbl_empleados VALUES("1","2332432","lincoln Lopez ","LOP","H","S","30","223232","dcddprueba24noviembre@gmail.es","INACTIVO");
INSERT INTO tbl_empleados VALUES("2","15011999999","Jonatan","Cabrera","H","","20","96743777","Elmanolo@yahoo.es","ACTIVO");
INSERT INTO tbl_empleados VALUES("3","2332432","lin ","apellido","M","S","12","","","ACTIVO");
INSERT INTO tbl_empleados VALUES("4","2332432","linKINK ","LOP","M","S","30","223232","dcddprueba24noviembre@gmail.es","INACTIVO");
INSERT INTO tbl_empleados VALUES("5","15011999999","prueba24LIN","prueba","H","S","30","97979797","llincoln@yahoo.es","INACTIVO");
INSERT INTO tbl_empleados VALUES("6","2332432","linKINK ","LOP","M","S","12","223232","lincolnprueba@gmail.com","ACTIVO");
INSERT INTO tbl_empleados VALUES("7","1111","Jonatan","Cabrera","H","","20","96743777","llloiililili","ACTIVO");



DROP TABLE IF EXISTS tbl_encuesta;

CREATE TABLE `tbl_encuesta` (
  `cod_pregunta` bigint(20) NOT NULL AUTO_INCREMENT,
  `p1` enum('Eficiente','Regular','Deficiente') NOT NULL,
  `p2` enum('Eficiente','Regular','Deficiente') NOT NULL,
  `p3` enum('Eficiente','Regular','Deficiente') NOT NULL,
  `p4` enum('Eficiente','Regular','Deficiente') NOT NULL,
  `p5` enum('Eficiente','Regular','Deficiente') NOT NULL,
  `p6` enum('Eficiente','Regular','Deficiente') NOT NULL,
  `p7` varchar(250) NOT NULL,
  PRIMARY KEY (`cod_pregunta`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

INSERT INTO tbl_encuesta VALUES("19","Deficiente","Deficiente","Regular","Deficiente","Regular","Eficiente","ddd");
INSERT INTO tbl_encuesta VALUES("20","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("21","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("22","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("23","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("24","Deficiente","Deficiente","Regular","Deficiente","Regular","Eficiente","ddd");
INSERT INTO tbl_encuesta VALUES("25","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("26","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("27","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("28","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("29","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("30","","","","","","","null");
INSERT INTO tbl_encuesta VALUES("31","Eficiente","","","","","Eficiente","GFGFGF");
INSERT INTO tbl_encuesta VALUES("32","Regular","","","","Regular","Eficiente","Todo masizo");
INSERT INTO tbl_encuesta VALUES("33","Eficiente","Regular","Regular","Eficiente","Regular","Regular","zz");
INSERT INTO tbl_encuesta VALUES("34","Eficiente","Eficiente","Eficiente","Eficiente","","","gfg");
INSERT INTO tbl_encuesta VALUES("35","Eficiente","Regular","Regular","Eficiente","Eficiente","Eficiente","vg");
INSERT INTO tbl_encuesta VALUES("36","Eficiente","Eficiente","Regular","Regular","Regular","Regular","fg");



DROP TABLE IF EXISTS tbl_estados;

CREATE TABLE `tbl_estados` (
  `cod_estado` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`cod_estado`),
  UNIQUE KEY `nombre_estado_UNIQUE` (`nombre_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tbl_estados VALUES("1","NUEVO","2022-12-02 16:37:56");
INSERT INTO tbl_estados VALUES("2","EN PROCESO","2022-12-02 16:37:56");
INSERT INTO tbl_estados VALUES("3","FINALIZADO","2022-12-02 16:38:24");
INSERT INTO tbl_estados VALUES("4","CANCELADO","2022-12-02 16:38:24");



DROP TABLE IF EXISTS tbl_inventario_herramientas;

CREATE TABLE `tbl_inventario_herramientas` (
  `COD_HERRAMIENTA` bigint(20) NOT NULL AUTO_INCREMENT,
  `NOMBRE_HERRAMIENTA` varchar(100) NOT NULL,
  `DESCRIPCION_HERRAMIENTA` varchar(250) NOT NULL,
  `NUM_EXISTENCIA` int(20) NOT NULL,
  `FECHA_INGRESO` datetime NOT NULL DEFAULT current_timestamp(),
  `FECHA_MODIFICACION` datetime NOT NULL DEFAULT current_timestamp(),
  `COD_EMPLEADO` bigint(20) NOT NULL,
  `ESTADO` enum('ACTIVO','INACTIVO') NOT NULL,
  PRIMARY KEY (`COD_HERRAMIENTA`),
  KEY `COD_EMPLEADO` (`COD_EMPLEADO`),
  CONSTRAINT `tbl_inventario_herramientas_ibfk_1` FOREIGN KEY (`COD_EMPLEADO`) REFERENCES `tbl_empleados` (`cod_empleado`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO tbl_inventario_herramientas VALUES("1","PALAS de jardin","PALA DE MADERAMARCA TRUPER SEGUNDA GEN","10","2022-10-30 18:46:01","2022-10-30 18:46:01","1","ACTIVO");
INSERT INTO tbl_inventario_herramientas VALUES("2","CARRETA DE METAL","PALA DE MADERA , MARCA TRUPER","4","2022-10-30 18:46:20","2022-10-30 18:46:20","1","INACTIVO");
INSERT INTO tbl_inventario_herramientas VALUES("3","PALA","PALA DE MADERAMARCA TRUPER","2","2022-11-22 15:19:19","2022-11-22 15:19:19","1","INACTIVO");
INSERT INTO tbl_inventario_herramientas VALUES("5","cepillode madera","cepillo de madera de mango de hierro","2","2022-11-22 17:35:36","2022-11-22 17:35:36","1","INACTIVO");



DROP TABLE IF EXISTS tbl_inventarios;

CREATE TABLE `tbl_inventarios` (
  `cod_inventario` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_articulo` bigint(20) NOT NULL,
  `cantidad_articulo` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_modificacion` datetime NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`cod_inventario`),
  KEY `fk_inventario_articulo_idx` (`cod_articulo`),
  CONSTRAINT `fk_inventarios_articulo` FOREIGN KEY (`cod_articulo`) REFERENCES `tbl_articulos` (`cod_articulo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO tbl_inventarios VALUES("3","1","12","2022-10-22 20:24:22","2022-11-22 00:09:50","INACTIVO");
INSERT INTO tbl_inventarios VALUES("4","1","100","2022-11-04 17:23:22","2022-11-22 01:07:29","");
INSERT INTO tbl_inventarios VALUES("6","1","1","2022-11-22 01:05:59","2022-11-22 01:05:59","");
INSERT INTO tbl_inventarios VALUES("7","4","11","2022-11-22 18:56:51","2022-11-22 18:56:51","ACTIVO");



DROP TABLE IF EXISTS tbl_permisos;

CREATE TABLE `tbl_permisos` (
  `cod_permiso` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_rol` bigint(20) NOT NULL,
  `editar_usuarios` int(11) NOT NULL,
  `ver_inventario` int(11) NOT NULL,
  `asignar_trabajo` int(11) NOT NULL,
  `cerrar_actividad_asignada` int(11) NOT NULL,
  `solicitar_presupuesto` int(11) NOT NULL,
  `generar_reportes` int(11) NOT NULL,
  `reportes_fallas` int(11) NOT NULL,
  PRIMARY KEY (`cod_permiso`),
  KEY `cod_rol` (`cod_rol`),
  CONSTRAINT `tbl_permisos_ibfk_1` FOREIGN KEY (`cod_rol`) REFERENCES `tbl_roles` (`cod_rol`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO tbl_permisos VALUES("1","1","1","1","1","1","1","1","1");



DROP TABLE IF EXISTS tbl_proveedores;

CREATE TABLE `tbl_proveedores` (
  `cod_proveedor` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(150) NOT NULL,
  `banco_proveedor` varchar(50) NOT NULL,
  `cuenta_proveedor` varchar(50) NOT NULL,
  `telefono_proveedor` bigint(20) NOT NULL,
  `extension_proveedor` int(11) NOT NULL,
  `celular_proveedor` bigint(20) NOT NULL,
  `contacto_proveedor` varchar(150) NOT NULL,
  `cargo_contacto` varchar(150) NOT NULL,
  `direccion_proveedor` varchar(250) NOT NULL,
  `pais_proveedor` varchar(150) NOT NULL,
  `ciudad_proveedor` varchar(150) NOT NULL,
  `correo_proveedor` varchar(150) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `estado_proveedor` enum('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`cod_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO tbl_proveedores VALUES("1","COPECO","BANTRAB","21212212","9502222","500","99998888","12121","20","Col la cantasia","El salvador","San Salvador","copeco@gmail.com","2022-10-12 22:08:50","ACTIVO");
INSERT INTO tbl_proveedores VALUES("2","Dimaco","Occidente","0801080111","22222222","201","99998886","12121","11","COlonia la Alambra","Guatemala","Guatemala","dimaco@gmail.com","2022-10-12 22:08:50","ACTIVO");
INSERT INTO tbl_proveedores VALUES("3","dasd","asda","asdas","9999","0","999999","asdas","asdas","asdasd","asdas","asdas","asdas","2022-11-04 18:09:14","INACTIVO");
INSERT INTO tbl_proveedores VALUES("4","copeco","bantrab","21212212","9502222","500","99998888","12121","20","col la cantasia","el salvador","san salvador","copeco@gmail.com","2022-11-04 18:48:14","INACTIVO");



DROP TABLE IF EXISTS tbl_reporte_fallas;

CREATE TABLE `tbl_reporte_fallas` (
  `COD_REPORTE_FALLA` bigint(20) NOT NULL AUTO_INCREMENT,
  `COD_SERVICIO` bigint(20) NOT NULL,
  `NOMBRE` varchar(200) NOT NULL,
  `TELEFONO` varchar(30) NOT NULL,
  `CORREO_ELECTRONICO` varchar(100) NOT NULL,
  `TEMA` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(250) NOT NULL,
  `UBICACION` varchar(250) NOT NULL,
  `FECHA_CREACION` datetime NOT NULL DEFAULT current_timestamp(),
  `FECHA_MODIFICACION` datetime NOT NULL DEFAULT current_timestamp(),
  `cod_estado` enum('NUEVO','EN PROCESO','FINALIZADO','CANCELADO') NOT NULL,
  `cod_empleado` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`COD_REPORTE_FALLA`),
  KEY `COD_SERVICIO` (`COD_SERVICIO`),
  KEY `cod_empleado` (`cod_empleado`),
  CONSTRAINT `tbl_reporte_fallas_ibfk_1` FOREIGN KEY (`COD_SERVICIO`) REFERENCES `tbl_servicios` (`cod_servicio`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tbl_reporte_fallas VALUES("1","4","Lincoln lOPEZ paz","99999999","llincoln1992@yahoo.es","repello","se necesita repellar una casa en col lo alamos etc etc","San Cristobal","2022-12-02 16:41:20","2022-12-03 02:27:40","EN PROCESO","0");
INSERT INTO tbl_reporte_fallas VALUES("2","3","Jonatan","99999999","llincoln1992@yahoo.es","repello","se necesita repellar una casa en col lo alamos etc etc","Tegucigalpa","2022-12-02 16:44:25","2022-12-02 16:59:32","EN PROCESO","0");
INSERT INTO tbl_reporte_fallas VALUES("3","1","dfdf","999999999","llincoln1992@yahoo.es","asd","asda","asdasd","2022-12-02 16:54:24","2022-12-02 16:54:44","EN PROCESO","0");
INSERT INTO tbl_reporte_fallas VALUES("4","1","Lincoln","99999999","llincoln1992@yahoo.es","repello","se necesita repellar una casa en col lo alamos etc etc","Tegucigalpa","2022-12-02 17:33:25","2022-12-02 17:33:25","CANCELADO","0");
INSERT INTO tbl_reporte_fallas VALUES("5","1","Lincoln","99999999","llincoln1992@yahoo.es","repello","se necesita repellar una casa en col lo alamos etc etc","Tegucigalpa","2022-12-02 17:33:26","2022-12-02 17:33:26","EN PROCESO","0");
INSERT INTO tbl_reporte_fallas VALUES("6","1","Lincoln","99999999","llincoln1992@yahoo.es","repello","se necesita repellar una casa en col lo alamos etc etc","Tegucigalpa","2022-12-02 17:33:27","2022-12-02 17:33:27","EN PROCESO","0");



DROP TABLE IF EXISTS tbl_respuestas;

CREATE TABLE `tbl_respuestas` (
  `cod_respuesta` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_pregunta` bigint(20) NOT NULL,
  `respuesta` enum('Eficiente','Regular','Deficiente','') NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`cod_respuesta`),
  KEY `id_pregunta` (`cod_pregunta`),
  CONSTRAINT `tbl_respuestas_ibfk_2` FOREIGN KEY (`cod_pregunta`) REFERENCES `tbl_encuesta` (`cod_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tbl_roles;

CREATE TABLE `tbl_roles` (
  `cod_rol` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_modificacion` datetime NOT NULL DEFAULT current_timestamp(),
  `estado_rol` enum('ACTIVO','INACTIVO') NOT NULL,
  PRIMARY KEY (`cod_rol`),
  UNIQUE KEY `nombre_rol_UNIQUE` (`nombre_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO tbl_roles VALUES("1","Administrador","2022-11-03 23:29:00","2022-11-22 23:18:12","ACTIVO");
INSERT INTO tbl_roles VALUES("2","Empleado","2022-11-03 23:31:00","2022-11-22 23:18:12","ACTIVO");
INSERT INTO tbl_roles VALUES("3","Cliente","2022-10-22 19:22:15","2022-11-22 23:18:12","ACTIVO");
INSERT INTO tbl_roles VALUES("4","SECRETARIA","2022-10-22 19:28:40","2022-11-22 23:18:12","ACTIVO");
INSERT INTO tbl_roles VALUES("9","CLIENTEMMMM","2022-11-03 23:31:43","2022-11-22 23:18:12","ACTIVO");
INSERT INTO tbl_roles VALUES("10","SUPERADMINZ","2022-11-03 23:32:21","2022-11-22 23:18:12","INACTIVO");
INSERT INTO tbl_roles VALUES("11","SECREPRUEgggggBA","2022-11-10 20:12:46","2022-11-22 23:18:12","ACTIVO");
INSERT INTO tbl_roles VALUES("12","SECREPRUEgggggBATOEKN","2022-11-16 09:53:37","2022-11-22 23:18:12","INACTIVO");
INSERT INTO tbl_roles VALUES("13","PROBANDO50","2022-11-22 23:36:39","2022-11-22 23:38:20","ACTIVO");



DROP TABLE IF EXISTS tbl_servicios;

CREATE TABLE `tbl_servicios` (
  `cod_servicio` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(100) NOT NULL,
  `precio_servicio` decimal(10,2) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `estado_servicio` enum('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`cod_servicio`),
  UNIQUE KEY `nombre_servicio_UNIQUE` (`nombre_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO tbl_servicios VALUES("1","Aire Acondicionado","5000.00","2022-10-12 22:18:20","ACTIVO");
INSERT INTO tbl_servicios VALUES("2","Construcción","2300.00","2022-10-12 22:18:20","ACTIVO");
INSERT INTO tbl_servicios VALUES("3","Electricidad","5000.00","2022-10-31 14:39:09","ACTIVO");
INSERT INTO tbl_servicios VALUES("4","Monitoreo CCTV","0.00","2022-12-01 14:16:18","ACTIVO");
INSERT INTO tbl_servicios VALUES("5","Pintura","5000.00","2022-10-31 18:39:58","ACTIVO");
INSERT INTO tbl_servicios VALUES("6","Planta Telefonica","0.00","2022-12-01 14:14:52","ACTIVO");
INSERT INTO tbl_servicios VALUES("7","Sistema de Seguridad","5000.00","2022-11-14 22:59:34","ACTIVO");
INSERT INTO tbl_servicios VALUES("8","Tabla Yeso","5000.00","2022-11-16 10:35:24","ACTIVO");



DROP TABLE IF EXISTS tbl_solicitudes;

CREATE TABLE `tbl_solicitudes` (
  `COD_SOLICITUD` bigint(20) NOT NULL AUTO_INCREMENT,
  `FECHA_SOLICITUD` datetime NOT NULL DEFAULT current_timestamp(),
  `NOMBRE` varchar(20) NOT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL,
  `TELEFONO` varchar(50) NOT NULL,
  `CORREO_ELECTRONICO` varchar(50) NOT NULL,
  `TIPO_SOLICITANTE` enum('EMPRESA','CASA') NOT NULL,
  `TELEFONO_OPCIONAL` varchar(50) NOT NULL,
  `DIRECCION_SOLICITANTE` varchar(250) NOT NULL,
  `NOMBRE_E_C` varchar(50) DEFAULT NULL,
  `RTN_DNI` varchar(40) DEFAULT NULL,
  `CIUDAD` varchar(100) NOT NULL,
  `COD_SERVICIO` bigint(20) NOT NULL,
  `DESCRIPCION_SOLICITUD` varchar(250) NOT NULL,
  `COD_ESTADO` bigint(20) NOT NULL,
  PRIMARY KEY (`COD_SOLICITUD`),
  KEY `COD_SERVICIO` (`COD_SERVICIO`),
  KEY `COD ESTADO` (`COD_ESTADO`),
  CONSTRAINT `tbl_solicitudes_ibfk_1` FOREIGN KEY (`COD_SERVICIO`) REFERENCES `tbl_servicios` (`cod_servicio`) ON UPDATE CASCADE,
  CONSTRAINT `tbl_solicitudes_ibfk_2` FOREIGN KEY (`COD_ESTADO`) REFERENCES `tbl_estados` (`cod_estado`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO tbl_solicitudes VALUES("28","2022-12-02 17:40:57","Lincoln Noé","López Cabrera","9789999999","llincoln1992@yahoo.es","EMPRESA","97823825","Villa Santa margarita, casa 2 , bloque e.","micasa","1118881111","2","2","Un airesito bien fresco en mi chola azul","2");
INSERT INTO tbl_solicitudes VALUES("29","2022-12-03 02:26:23","Lincoln Noé","López Cabrera","97823825","llincoln1992@yahoo.es","EMPRESA","97823825","Villa Santa margarita, casa 2 , bloque e.","micasa","1501111111","Tegucigalpa","1","Un airesito bien fresco en mi chola azul","1");
INSERT INTO tbl_solicitudes VALUES("30","2022-12-03 02:28:46","Lincoln Noé","López Cabrera","97823825","llincoln1992@yahoo.es","EMPRESA","97823825","Villa Santa margarita, casa 2 , bloque e.","micasa","1501111111","Tegucigalpa","1","Necesito instlar un aire en mi casita pero para hoy","1");
INSERT INTO tbl_solicitudes VALUES("31","2022-12-03 19:29:55","Lincoln Noé","López Cabrera","97823825","llincoln1992@yahoo.es","EMPRESA","97823825","Villa Santa margarita, casa 2 , bloque e.","micasa","null","Tegucigalpa","2","Un airesito bien fresco en mi chola de color verde","1");
INSERT INTO tbl_solicitudes VALUES("32","2022-12-03 19:32:06","Lincoln Noé","López Cabrera","97823825","llincoln1992@yahoo.es","EMPRESA","97823825","Villa Santa margarita, casa 2 , bloque e.","micasa","11111111111111","1","6","Un airesito bien fresco en mi chola de color rosa","1");



DROP TABLE IF EXISTS tbl_tipos_clientes;

CREATE TABLE `tbl_tipos_clientes` (
  `cod_tipo_cliente` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_cliente` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `ESTADO` enum('ACTIVO','INACTIVO') NOT NULL,
  PRIMARY KEY (`cod_tipo_cliente`),
  UNIQUE KEY `nombre_tipo_cliente_UNIQUE` (`nombre_tipo_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

INSERT INTO tbl_tipos_clientes VALUES("1","Premium","2022-10-12 21:51:58","INACTIVO");
INSERT INTO tbl_tipos_clientes VALUES("2","Nuevo","2022-10-12 21:51:58","ACTIVO");
INSERT INTO tbl_tipos_clientes VALUES("3","DEPRUEBAZ","2022-11-03 17:50:24","INACTIVO");
INSERT INTO tbl_tipos_clientes VALUES("4","DEPRUEBA2","2022-11-03 17:59:50","ACTIVO");
INSERT INTO tbl_tipos_clientes VALUES("5","dasdsd","2022-11-04 00:17:58","ACTIVO");
INSERT INTO tbl_tipos_clientes VALUES("6","probando solo eso","2022-11-04 14:58:28","INACTIVO");



DROP TABLE IF EXISTS tbl_usuarios;

CREATE TABLE `tbl_usuarios` (
  `cod_usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(100) NOT NULL,
  `correo_usuario` varchar(150) NOT NULL,
  `password_usuario` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp(),
  `estado_usuario` enum('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO',
  `cod_rol` bigint(20) NOT NULL,
  PRIMARY KEY (`cod_usuario`),
  UNIQUE KEY `correo_usuario_UNIQUE` (`correo_usuario`),
  KEY `fk_usuario_rol_idx` (`cod_rol`),
  CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`cod_rol`) REFERENCES `tbl_roles` (`cod_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

INSERT INTO tbl_usuarios VALUES("1","Linking923232assdssdsdsdssd","llincodfddln@yahoo.es","asdasdasda","2022-10-30 18:01:12","INACTIVO","1");
INSERT INTO tbl_usuarios VALUES("3","Manolo200222","manolo2002@yahoo.es","Onepiece123@","2022-11-01 21:44:57","ACTIVO","1");
INSERT INTO tbl_usuarios VALUES("6","Lincoln92","llincoln1992@yahoo.es","asdasdasdas","2022-11-01 22:08:44","ACTIVO","1");
INSERT INTO tbl_usuarios VALUES("7","LincoSSln92","llincoSSln1992@yahoo.es","asdSDasdasda","2022-11-01 22:39:55","INACTIVO","3");
INSERT INTO tbl_usuarios VALUES("11","LincoSSggln92","llincoSSlngg1992@yahoo.es","asdSDasdasda","2022-11-07 18:19:40","INACTIVO","3");
INSERT INTO tbl_usuarios VALUES("13","LincoSSfgfgggln92","llincoSSlngg1gfg992@yahoo.es","asdSDasdasda","2022-11-07 18:53:38","INACTIVO","3");
INSERT INTO tbl_usuarios VALUES("14","Linffkiffng92","llincffofdfddln@yahoo.es","asdaffsdasda","2022-11-16 11:57:00","INACTIVO","3");
INSERT INTO tbl_usuarios VALUES("15","LincoSSssfgfgggln92","llincoSSsslngg1gfg992@yahoo.es","asdSDasdasda","2022-11-16 20:57:47","INACTIVO","3");
INSERT INTO tbl_usuarios VALUES("16","LiSSssfgfgggln92","lloSSsslngg1gfg992@yahoo.es","asdSDasdasda","2022-11-16 20:59:37","INACTIVO","3");
INSERT INTO tbl_usuarios VALUES("17","LiSSssfghjhjfgggln92","lloSSshjhjhjhjslngg1gfg992@yahoo.es","asdSDasdasda","2022-11-20 00:03:48","INACTIVO","3");
INSERT INTO tbl_usuarios VALUES("18","LiSSssfhjhjghjhjfgggln92","hjhhjh@yahoo.es","asdSDasdasda","2022-11-20 00:03:54","ACTIVO","3");
INSERT INTO tbl_usuarios VALUES("21","LiSSghghssfhjhjghjhjfgggln92","hjhhjhghgh@yahoo.es","asdSDasdasda","2022-11-20 00:47:10","ACTIVO","3");
INSERT INTO tbl_usuarios VALUES("27","probandonoviembre","hjhhasdsyahoo.es","asdSDasdasda","2022-11-20 00:58:28","ACTIVO","3");
INSERT INTO tbl_usuarios VALUES("29","dfdf","dfdf@yahoo.es","asdasd","2022-11-20 01:10:08","ACTIVO","3");
INSERT INTO tbl_usuarios VALUES("30","prueba","asdasda","asdasd","2022-11-20 01:10:34","ACTIVO","3");
INSERT INTO tbl_usuarios VALUES("31","prueba2","asdasd@yahoo.es","asdasdasdasdasda","2022-11-20 01:14:29","ACTIVO","3");
INSERT INTO tbl_usuarios VALUES("34","probandfo","sdasdsadasd","asdasdasd","2022-11-20 01:56:22","ACTIVO","1");
INSERT INTO tbl_usuarios VALUES("35","Linsys","llincoln1992@gmail.com","Onepiece123@","2022-11-23 09:13:14","ACTIVO","1");
INSERT INTO tbl_usuarios VALUES("36","PROBANDO50","llincoSSSln1992@yahoo.es","Onepiece123@","2022-11-23 15:22:07","ACTIVO","1");



DROP TABLE IF EXISTS tbl_ventas;

CREATE TABLE `tbl_ventas` (
  `cod_venta` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha_venta` datetime DEFAULT current_timestamp(),
  `COD_SERVICIO` bigint(20) NOT NULL,
  `cod_cliente` bigint(20) NOT NULL,
  `cod_usuario` bigint(20) NOT NULL,
  `cod_estado` bigint(20) NOT NULL,
  PRIMARY KEY (`cod_venta`),
  KEY `fk_ventas_cliente_idx` (`cod_cliente`),
  KEY `fk_ventas_usuario_idx` (`cod_usuario`),
  KEY `fk_ventas_estado_idx` (`cod_estado`),
  KEY `COD_SERVICIO` (`COD_SERVICIO`),
  CONSTRAINT `fk_ventas_cliente` FOREIGN KEY (`cod_cliente`) REFERENCES `tbl_clientes` (`cod_cliente`),
  CONSTRAINT `fk_ventas_estado` FOREIGN KEY (`cod_estado`) REFERENCES `tbl_estados` (`cod_estado`),
  CONSTRAINT `fk_ventas_usuario` FOREIGN KEY (`cod_usuario`) REFERENCES `tbl_usuarios` (`cod_usuario`),
  CONSTRAINT `tbl_ventas_ibfk_1` FOREIGN KEY (`COD_SERVICIO`) REFERENCES `tbl_servicios` (`cod_servicio`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS tbl_ventas_detalle;

CREATE TABLE `tbl_ventas_detalle` (
  `cod_venta_detalle` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_venta` bigint(20) NOT NULL,
  `DESCRIPCION` varchar(250) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cod_venta_detalle`),
  KEY `fk_ventas_venta_idx` (`cod_venta`),
  CONSTRAINT `fk_ventas_ventas` FOREIGN KEY (`cod_venta`) REFERENCES `tbl_ventas` (`cod_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES("1","Elisur HN","elisurelisur19@gmail.com","","$2y$10$OMmMwS4naMPSaux63EM7PuQhp1FsOzfqRI8K/tDu/eyZdK7VaErMC","","2022-12-07 02:40:23","2022-12-07 02:40:23");
INSERT INTO users VALUES("2","Elisur Cliente","llincoln1992@outlook.es","","$2y$10$LKZoXknPgDp/AMByzVLlV.16NZi4HWww44Ir8nqKS9KsTNgoEw1MW","","2022-12-07 02:44:39","2022-12-07 02:44:39");
INSERT INTO users VALUES("3","Elisur Empleado","llincoln1992@yahoo.es","","$2y$10$h6pz7/PZrI2L6p.FtiJavemrpzWnik2DuJGDlCLqyZGeqiUOATx06","","2022-12-07 02:45:04","2022-12-07 02:45:04");



SET FOREIGN_KEY_CHECKS=1;