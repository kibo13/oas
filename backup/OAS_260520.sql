/*
 Navicat Premium Data Transfer

 Source Server         : kibo
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:8889
 Source Schema         : oas

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 26/05/2020 23:53:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for branches
-- ----------------------------
DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of branches
-- ----------------------------
INSERT INTO `branches` VALUES (1, 'ЖЭУ-1', '2020-05-22 18:11:33', '2020-05-22 18:11:33');
INSERT INTO `branches` VALUES (2, 'ЖЭУ-2', '2020-05-22 18:11:43', '2020-05-22 18:11:43');
INSERT INTO `branches` VALUES (3, 'ЖЭУ-3', '2020-05-22 18:11:49', '2020-05-22 18:11:49');
INSERT INTO `branches` VALUES (4, 'ЖЭУ-4', '2020-05-22 18:11:54', '2020-05-22 18:11:54');
INSERT INTO `branches` VALUES (5, 'ЖЭУ-5', '2020-05-22 18:12:00', '2020-05-22 18:12:00');
INSERT INTO `branches` VALUES (6, 'ЖЭУ-6', '2020-05-22 18:12:05', '2020-05-22 18:12:05');
INSERT INTO `branches` VALUES (7, 'ЖЭУ-7', '2020-05-22 18:12:16', '2020-05-22 18:12:16');
INSERT INTO `branches` VALUES (8, 'ЖЭУ-8', '2020-05-22 18:12:32', '2020-05-22 18:12:32');
INSERT INTO `branches` VALUES (9, 'ОАС', '2020-05-22 18:12:40', '2020-05-22 18:12:40');
INSERT INTO `branches` VALUES (10, 'Транспортный отдел', '2020-05-22 18:13:04', '2020-05-22 18:13:04');
INSERT INTO `branches` VALUES (11, 'Производственно-технический отдел', '2020-05-22 18:13:42', '2020-05-22 18:13:42');
INSERT INTO `branches` VALUES (12, 'Отдел главного энергетика', '2020-05-22 18:13:52', '2020-05-22 18:13:52');

-- ----------------------------
-- Table structure for defects
-- ----------------------------
DROP TABLE IF EXISTS `defects`;
CREATE TABLE `defects`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of defects
-- ----------------------------
INSERT INTO `defects` VALUES (1, 1, 'Электроснабжение', 'Нет фазы с ТП', '2020-05-26 18:02:38', '2020-05-26 18:02:38');
INSERT INTO `defects` VALUES (2, 1, 'Электроснабжение', 'Повышенное напряжение с ТП', '2020-05-26 18:08:09', '2020-05-26 18:08:09');
INSERT INTO `defects` VALUES (4, 2, 'Горячее водоснабжение', 'Стояк горячей воды', '2020-05-26 18:13:51', '2020-05-26 18:13:57');
INSERT INTO `defects` VALUES (5, 1, 'Электроснабжение', 'Перекос фаз во ВРУ', '2020-05-26 18:15:48', '2020-05-26 18:15:48');
INSERT INTO `defects` VALUES (6, 1, 'Электроснабжение', 'Обрыв фазы во ВРУ', '2020-05-26 18:16:03', '2020-05-26 18:16:03');
INSERT INTO `defects` VALUES (7, 1, 'Электроснабжение', 'Обрыв нуля во ВРУ', '2020-05-26 18:16:12', '2020-05-26 18:16:12');
INSERT INTO `defects` VALUES (8, 1, 'Электроснабжение', 'Обгоревшие губки', '2020-05-26 18:16:27', '2020-05-26 18:16:27');
INSERT INTO `defects` VALUES (9, 1, 'Электроснабжение', 'Сгоревшие предохранители', '2020-05-26 18:16:42', '2020-05-26 18:16:42');
INSERT INTO `defects` VALUES (10, 1, 'Электроснабжение', 'Обрыв стоячного провода', '2020-05-26 18:17:40', '2020-05-26 18:17:40');
INSERT INTO `defects` VALUES (11, 1, 'Электроснабжение', 'Обрыв фазы в РЩ', '2020-05-26 18:17:56', '2020-05-26 18:17:56');
INSERT INTO `defects` VALUES (12, 1, 'Электроснабжение', 'Обрыв нуля в РЩ', '2020-05-26 18:18:08', '2020-05-26 18:18:08');
INSERT INTO `defects` VALUES (13, 1, 'Электроснабжение', 'Сгоревшие пакетники', '2020-05-26 18:18:23', '2020-05-26 18:18:23');
INSERT INTO `defects` VALUES (14, 1, 'Электроснабжение', 'Сгоревшие автоматы', '2020-05-26 18:18:34', '2020-05-26 18:18:34');
INSERT INTO `defects` VALUES (15, 1, 'Электроснабжение', 'Выбит автомат', '2020-05-26 18:18:46', '2020-05-26 18:18:46');
INSERT INTO `defects` VALUES (16, 1, 'Электроснабжение', 'Слабый контакт нуля в РЩ', '2020-05-26 18:19:13', '2020-05-26 18:19:13');
INSERT INTO `defects` VALUES (17, 1, 'Электроснабжение', 'Слабый контакт в автомате РЩ', '2020-05-26 18:19:28', '2020-05-26 18:19:28');
INSERT INTO `defects` VALUES (18, 1, 'Электроснабжение', 'Слабый контакт скрутки в РЩ', '2020-05-26 18:19:56', '2020-05-26 18:19:56');
INSERT INTO `defects` VALUES (19, 1, 'Электроснабжение', 'Слабый контакт скрутки в квартире', '2020-05-26 18:20:08', '2020-05-26 18:20:08');
INSERT INTO `defects` VALUES (20, 1, 'Электроснабжение', 'Слабы контакт в электросчетчике', '2020-05-26 18:20:36', '2020-05-26 18:20:36');
INSERT INTO `defects` VALUES (21, 1, 'Электроснабжение', 'Украли электросчетчик', '2020-05-26 18:20:48', '2020-05-26 18:20:48');
INSERT INTO `defects` VALUES (22, 1, 'Электроснабжение', 'Обрыв провода от РЩ до квартиры', '2020-05-26 18:21:20', '2020-05-26 18:21:20');
INSERT INTO `defects` VALUES (23, 1, 'Электроснабжение', 'Прочее по электрике', '2020-05-26 18:21:35', '2020-05-26 18:21:35');
INSERT INTO `defects` VALUES (24, 2, 'Холодное водоснабжение', 'Подводка холодной воды', '2020-05-26 18:22:01', '2020-05-26 18:22:01');
INSERT INTO `defects` VALUES (25, 2, 'Холодное водоснабжение', 'Стояк холодной воды', '2020-05-26 18:22:22', '2020-05-26 18:22:22');
INSERT INTO `defects` VALUES (26, 2, 'Холодное водоснабжение', 'Неисправен кран холодной воды', '2020-05-26 18:23:21', '2020-05-26 18:23:21');
INSERT INTO `defects` VALUES (27, 2, 'Холодное водоснабжение', 'Розлив холодной воды', '2020-05-26 18:23:57', '2020-05-26 18:23:57');
INSERT INTO `defects` VALUES (28, 2, 'Горячее водоснабжение', 'Подводка горячей воды', '2020-05-26 18:24:21', '2020-05-26 18:24:21');
INSERT INTO `defects` VALUES (29, 2, 'Горячее водоснабжение', 'Верхний розлив горячей воды', '2020-05-26 18:24:51', '2020-05-26 18:24:51');
INSERT INTO `defects` VALUES (30, 2, 'Горячее водоснабжение', 'Нижний  розлив горячей воды', '2020-05-26 18:25:03', '2020-05-26 18:25:03');
INSERT INTO `defects` VALUES (31, 2, 'Горячее водоснабжение', 'Неисправен  кран горячей воды', '2020-05-26 18:25:17', '2020-05-26 18:25:17');
INSERT INTO `defects` VALUES (32, 2, 'Отопление', 'Стояк отопления', '2020-05-26 18:25:41', '2020-05-26 18:25:41');
INSERT INTO `defects` VALUES (33, 2, 'Отопление', 'Верхний розлив отопления', '2020-05-26 18:25:53', '2020-05-26 18:25:53');
INSERT INTO `defects` VALUES (34, 2, 'Отопление', 'Нижний розлив отопления', '2020-05-26 18:26:04', '2020-05-26 18:26:04');
INSERT INTO `defects` VALUES (35, 2, 'Отопление', 'Батарея', '2020-05-26 18:26:15', '2020-05-26 18:26:15');
INSERT INTO `defects` VALUES (36, 2, 'Канализация', 'Забита канализация в подвале', '2020-05-26 18:26:35', '2020-05-26 18:26:35');
INSERT INTO `defects` VALUES (37, 2, 'Канализация', 'Забита канализация в квартире', '2020-05-26 18:26:47', '2020-05-26 18:26:47');
INSERT INTO `defects` VALUES (38, 2, 'Канализация', 'Забита канализация по стояку', '2020-05-26 18:27:02', '2020-05-26 18:27:02');
INSERT INTO `defects` VALUES (39, 2, 'Прочие по сантехнике', 'Прочие по сантехнике', '2020-05-26 18:27:14', '2020-05-26 18:27:14');
INSERT INTO `defects` VALUES (40, 4, 'Элементы конструкции', 'Протекает кровля', '2020-05-26 18:27:28', '2020-05-26 18:27:28');
INSERT INTO `defects` VALUES (41, 4, 'Элементы конструкции', 'Нарушен тепловой контур подъезда', '2020-05-26 18:27:40', '2020-05-26 18:27:40');
INSERT INTO `defects` VALUES (42, 4, 'Элементы конструкции', 'Забит водосток', '2020-05-26 18:27:53', '2020-05-26 18:27:53');
INSERT INTO `defects` VALUES (43, 4, 'Элементы конструкции', 'Прочие по конструкции', '2020-05-26 18:28:02', '2020-05-26 18:28:02');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `organization_id` bigint(20) UNSIGNED NOT NULL,
  `street_id` bigint(20) UNSIGNED NOT NULL,
  `type_job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_off` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `date_on` datetime(0) NOT NULL,
  `date_off` datetime(0) NOT NULL,
  `num_home` int(11) NOT NULL,
  `num_corp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------
INSERT INTO `jobs` VALUES (1, 2, 3, 'Плановая', 'Горячая вода', 'Аварийно-восстановительные работы на водопроводных и канализационных сетях', '2020-03-11 10:00:00', '2020-03-11 15:00:00', 11, NULL, '2020-05-25 15:34:59', '2020-05-25 15:41:27');
INSERT INTO `jobs` VALUES (2, 2, 23, 'Аварийная', 'Холодная вода', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-02-13 10:00:00', '2020-02-13 12:30:00', 10, NULL, '2020-05-25 15:42:52', '2020-05-25 15:42:52');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (27, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (28, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (29, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (30, '2020_05_18_151945_create_roles_table', 1);
INSERT INTO `migrations` VALUES (31, '2020_05_18_152318_create_role_user_table', 1);
INSERT INTO `migrations` VALUES (32, '2020_05_19_182828_create_positions_table', 1);
INSERT INTO `migrations` VALUES (33, '2020_05_19_183118_create_streets_table', 1);
INSERT INTO `migrations` VALUES (34, '2020_05_19_183403_create_branches_table', 1);
INSERT INTO `migrations` VALUES (35, '2020_05_19_183422_create_workers_table', 1);
INSERT INTO `migrations` VALUES (36, '2020_05_21_165952_create_organizations_table', 1);
INSERT INTO `migrations` VALUES (39, '2020_05_24_165814_create_promisers_table', 2);
INSERT INTO `migrations` VALUES (40, '2020_05_24_165837_create_types_table', 2);
INSERT INTO `migrations` VALUES (41, '2020_05_25_064953_create_jobs_table', 3);
INSERT INTO `migrations` VALUES (43, '2020_05_26_171237_create_defects_table', 4);

-- ----------------------------
-- Table structure for organizations
-- ----------------------------
DROP TABLE IF EXISTS `organizations`;
CREATE TABLE `organizations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of organizations
-- ----------------------------
INSERT INTO `organizations` VALUES (1, 'ГУП ПЭО \"Байконурэнерго\"', NULL, '2020-05-24 10:24:52', '2020-05-24 10:24:52');
INSERT INTO `organizations` VALUES (2, 'ГУП ПО \"Горводоканал\"', NULL, '2020-05-25 15:18:29', '2020-05-25 15:18:29');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for positions
-- ----------------------------
DROP TABLE IF EXISTS `positions`;
CREATE TABLE `positions`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of positions
-- ----------------------------
INSERT INTO `positions` VALUES (1, 'Директор ГУП ЖХ', '2020-05-22 18:05:00', '2020-05-22 18:05:00');
INSERT INTO `positions` VALUES (2, 'Главный специалист', '2020-05-22 18:05:39', '2020-05-22 18:05:39');
INSERT INTO `positions` VALUES (3, 'Главный энергетик', '2020-05-22 18:05:48', '2020-05-22 18:05:48');
INSERT INTO `positions` VALUES (4, 'Главный инженер', '2020-05-22 18:06:01', '2020-05-22 18:06:01');
INSERT INTO `positions` VALUES (5, 'Главный механик', '2020-05-22 18:06:13', '2020-05-22 18:06:13');
INSERT INTO `positions` VALUES (6, 'Начальник', '2020-05-22 18:06:19', '2020-05-22 18:06:19');
INSERT INTO `positions` VALUES (7, 'Заместитель начальника', '2020-05-22 18:06:25', '2020-05-22 18:06:25');
INSERT INTO `positions` VALUES (8, 'Ведущий инженер', '2020-05-22 18:06:41', '2020-05-22 18:06:41');
INSERT INTO `positions` VALUES (9, 'Мастер', '2020-05-22 18:06:57', '2020-05-22 18:06:57');
INSERT INTO `positions` VALUES (10, 'Монтажник СТО', '2020-05-22 18:07:03', '2020-05-22 18:07:03');

-- ----------------------------
-- Table structure for promisers
-- ----------------------------
DROP TABLE IF EXISTS `promisers`;
CREATE TABLE `promisers`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `street_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `num_home` int(11) NOT NULL,
  `num_corp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `num_flat` int(11) NOT NULL,
  `date_on` date NOT NULL,
  `date_off` date NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of promisers
-- ----------------------------
INSERT INTO `promisers` VALUES (1, 8, 1, 7, NULL, 11, '2019-10-16', '2020-03-10', '2020-05-25 15:02:09', '2020-05-25 15:02:09');
INSERT INTO `promisers` VALUES (2, 14, 1, 13, NULL, 51, '2019-11-05', '2020-03-04', '2020-05-25 15:16:11', '2020-05-25 15:16:11');
INSERT INTO `promisers` VALUES (3, 29, 2, 7, NULL, 11, '2019-07-30', '2020-04-09', '2020-05-25 15:16:40', '2020-05-25 15:16:40');
INSERT INTO `promisers` VALUES (4, 32, 2, 15, NULL, 37, '2019-07-17', '2020-02-18', '2020-05-25 15:17:24', '2020-05-25 15:17:24');
INSERT INTO `promisers` VALUES (5, 5, 1, 17, NULL, 18, '2019-10-11', '2020-03-24', '2020-05-25 15:17:58', '2020-05-25 15:17:58');

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user`  (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  INDEX `role_user_user_id_foreign`(`user_id`) USING BTREE,
  INDEX `role_user_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES (1, 1);
INSERT INTO `role_user` VALUES (3, 1);
INSERT INTO `role_user` VALUES (4, 1);
INSERT INTO `role_user` VALUES (5, 1);
INSERT INTO `role_user` VALUES (6, 1);
INSERT INTO `role_user` VALUES (8, 1);
INSERT INTO `role_user` VALUES (6, 9);
INSERT INTO `role_user` VALUES (8, 9);
INSERT INTO `role_user` VALUES (4, 11);
INSERT INTO `role_user` VALUES (8, 11);
INSERT INTO `role_user` VALUES (5, 4);
INSERT INTO `role_user` VALUES (8, 4);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Администратор', 'admin', NULL, '2020-05-23 16:14:59');
INSERT INTO `roles` VALUES (3, 'Диспетчер ЖЭУ', 'disp_zheu', '2020-05-23 16:19:12', '2020-05-23 16:19:12');
INSERT INTO `roles` VALUES (4, 'Диспетчер ОАС', 'disp_oas', '2020-05-23 16:19:26', '2020-05-23 16:19:26');
INSERT INTO `roles` VALUES (5, 'Хэдхантер', 'hh', '2020-05-23 16:27:05', '2020-05-23 16:34:49');
INSERT INTO `roles` VALUES (6, 'Аудитор', 'audit', '2020-05-23 16:29:17', '2020-05-23 16:34:39');
INSERT INTO `roles` VALUES (8, 'Архивист', 'arch', '2020-05-24 17:34:18', '2020-05-24 17:34:18');

-- ----------------------------
-- Table structure for streets
-- ----------------------------
DROP TABLE IF EXISTS `streets`;
CREATE TABLE `streets`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of streets
-- ----------------------------
INSERT INTO `streets` VALUES (2, 'Королёва', '2020-05-22 18:34:26', '2020-05-22 18:34:26');
INSERT INTO `streets` VALUES (3, 'Ниточкина', '2020-05-22 18:34:34', '2020-05-22 18:34:34');
INSERT INTO `streets` VALUES (4, 'Янгеля', '2020-05-22 18:34:41', '2020-05-22 18:34:41');
INSERT INTO `streets` VALUES (5, '8 марта', '2020-05-22 18:34:49', '2020-05-22 18:34:49');
INSERT INTO `streets` VALUES (6, 'Глушко', '2020-05-22 18:34:56', '2020-05-22 18:34:56');
INSERT INTO `streets` VALUES (7, 'Горького', '2020-05-22 18:35:04', '2020-05-22 18:35:04');
INSERT INTO `streets` VALUES (8, 'Абая', '2020-05-22 18:35:09', '2020-05-22 18:35:09');
INSERT INTO `streets` VALUES (9, 'Пионерская', '2020-05-22 18:35:18', '2020-05-22 18:35:18');
INSERT INTO `streets` VALUES (10, '5 мкр', '2020-05-22 18:35:26', '2020-05-22 18:35:26');
INSERT INTO `streets` VALUES (11, '5А мкр', '2020-05-22 18:35:31', '2020-05-22 18:35:31');
INSERT INTO `streets` VALUES (12, '6 мкр', '2020-05-22 18:35:37', '2020-05-22 18:35:37');
INSERT INTO `streets` VALUES (13, '6А мкр', '2020-05-22 18:35:43', '2020-05-22 18:35:43');
INSERT INTO `streets` VALUES (14, '7 мкр', '2020-05-22 18:35:48', '2020-05-22 18:35:48');
INSERT INTO `streets` VALUES (15, 'Гагарина', '2020-05-22 18:36:27', '2020-05-22 18:36:27');
INSERT INTO `streets` VALUES (16, 'Набережная', '2020-05-22 18:36:37', '2020-05-22 18:36:37');
INSERT INTO `streets` VALUES (17, 'Комарова', '2020-05-22 18:36:58', '2020-05-22 18:36:58');
INSERT INTO `streets` VALUES (18, 'Титова', '2020-05-22 18:37:07', '2020-05-22 18:37:07');
INSERT INTO `streets` VALUES (19, 'Ленина', '2020-05-22 18:37:13', '2020-05-22 18:37:13');
INSERT INTO `streets` VALUES (20, 'Бармина', '2020-05-22 18:37:44', '2020-05-22 18:37:44');
INSERT INTO `streets` VALUES (21, 'Гвардейская', '2020-05-22 18:37:51', '2020-05-22 18:37:51');
INSERT INTO `streets` VALUES (22, 'Лейтенанта Шмидта', '2020-05-22 18:38:44', '2020-05-22 18:38:44');
INSERT INTO `streets` VALUES (23, 'Неделина', '2020-05-22 18:39:05', '2020-05-22 18:39:05');
INSERT INTO `streets` VALUES (24, 'Мира', '2020-05-22 18:39:37', '2020-05-22 18:39:37');
INSERT INTO `streets` VALUES (25, 'Школьная', '2020-05-22 18:40:03', '2020-05-22 18:40:03');
INSERT INTO `streets` VALUES (26, 'Октябрьская', '2020-05-22 18:40:10', '2020-05-22 18:40:10');
INSERT INTO `streets` VALUES (27, 'Осташёва', '2020-05-22 18:40:20', '2020-05-22 18:40:20');
INSERT INTO `streets` VALUES (28, 'Максимова', '2020-05-22 18:40:51', '2020-05-22 18:40:51');
INSERT INTO `streets` VALUES (29, 'Шубникова', '2020-05-22 18:41:03', '2020-05-22 18:41:03');
INSERT INTO `streets` VALUES (30, 'Советской Армии', '2020-05-22 18:42:18', '2020-05-22 18:42:18');
INSERT INTO `streets` VALUES (31, 'Новый', '2020-05-22 18:42:33', '2020-05-22 18:42:33');
INSERT INTO `streets` VALUES (32, 'Носова', '2020-05-22 18:43:59', '2020-05-22 18:43:59');
INSERT INTO `streets` VALUES (33, 'Авиационная', '2020-05-22 18:44:08', '2020-05-22 18:44:08');

-- ----------------------------
-- Table structure for types
-- ----------------------------
DROP TABLE IF EXISTS `types`;
CREATE TABLE `types`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of types
-- ----------------------------
INSERT INTO `types` VALUES (1, 'Электрика', 'elc', '2020-05-24 19:18:15', '2020-05-24 19:18:15');
INSERT INTO `types` VALUES (2, 'Сантехника', 'san', '2020-05-24 19:18:22', '2020-05-24 19:18:22');
INSERT INTO `types` VALUES (4, 'Конструкция', 'con', '2020-05-24 19:18:39', '2020-05-24 19:18:47');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@oas.ru', NULL, '$2y$10$2kJ10MtH68pwfCJNjM2O7uOXBs3vrdnkhM0wdNL4OFrF2GpPt4J7C', NULL, '2020-05-22 17:58:25', '2020-05-24 19:25:55');
INSERT INTO `users` VALUES (4, 'headhunter', 'headhunter@oas.ru', NULL, '$2y$10$ofadG64yIYQAV/Ud0bNo7OmsfSNUF3s6nb4VB3MHMgdWxcn95UieW', NULL, '2020-05-22 18:02:11', '2020-05-24 19:13:58');
INSERT INTO `users` VALUES (9, 'auditor', 'auditor@oas.ru', NULL, '$2y$10$A4seYpMqV/R6HTo1TcwpqOasEJlmKBcao063vOSBod7DVfnvNWoem', NULL, '2020-05-24 19:26:39', '2020-05-24 19:26:39');
INSERT INTO `users` VALUES (10, 'user', 'user@oas.ru', NULL, '$2y$10$6M0meACiwGIh1cPvitFwNur4PS/RacB0C1XEPviaRudhZlod3GtsS', NULL, '2020-05-24 19:31:16', '2020-05-24 19:31:16');
INSERT INTO `users` VALUES (11, 'operator_oas', 'operator_oas@oas.ru', NULL, '$2y$10$ZPvfIkVpVfFjxzNB.AArj.cBJFdtAXoKTlnm1zZQ/Vir/4ORI6sZi', NULL, '2020-05-25 15:00:20', '2020-05-25 15:00:20');

-- ----------------------------
-- Table structure for workers
-- ----------------------------
DROP TABLE IF EXISTS `workers`;
CREATE TABLE `workers`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `street_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mid_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `work_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `home_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mob_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `num_home` int(11) NOT NULL,
  `num_corp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `num_flat` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of workers
-- ----------------------------
INSERT INTO `workers` VALUES (1, 9, 6, 6, 'Иван', 'Иванов', 'Петрович', '5-55-40', '7-61-64', '+7-771-301-01-50', '2020-05-23 15:16:17', '2020-05-23 15:16:17', 4, NULL, 33);
INSERT INTO `workers` VALUES (2, 9, 9, 27, 'Анатолий', 'Сидоров', 'Анатольевич', '5-55-40', '6-10-33', '+7-776-878-10-10', '2020-05-23 15:27:02', '2020-05-25 15:15:36', 9, NULL, 12);
INSERT INTO `workers` VALUES (4, 9, 10, 15, 'Турсумбек', 'Оскаров', 'Жанболатович', '5-55-40', '6-22-21', '+7-776-301-27-27', '2020-05-23 15:35:02', '2020-05-24 14:12:27', 14, NULL, 25);
INSERT INTO `workers` VALUES (5, 9, 9, 14, 'Петр', 'Ким', 'Сергеевич', '4-44-44', '6-11-31', '+7-705-401-33-22', '2020-05-24 10:59:41', '2020-05-24 17:36:55', 9, NULL, 51);
INSERT INTO `workers` VALUES (6, 9, 9, 18, 'Роман', 'Кузнец', 'Николаевич', '5-11-12', '5-40-31', '+7-701-022-01-03', '2020-05-24 12:52:57', '2020-05-24 17:37:05', 2, NULL, 11);
INSERT INTO `workers` VALUES (7, 9, 10, 29, 'Иван', 'Абрамов', 'Андреевич', '5-01-03', '6-07-41', '+7-771-333-11-21', '2020-05-24 13:47:33', '2020-05-24 17:37:15', 11, NULL, 34);

SET FOREIGN_KEY_CHECKS = 1;
