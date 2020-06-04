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

 Date: 04/06/2020 14:04:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for address_plot
-- ----------------------------
DROP TABLE IF EXISTS `address_plot`;
CREATE TABLE `address_plot`  (
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `plot_id` bigint(20) UNSIGNED NOT NULL,
  INDEX `address_plot_address_id_foreign`(`address_id`) USING BTREE,
  INDEX `address_plot_plot_id_foreign`(`plot_id`) USING BTREE,
  CONSTRAINT `address_plot_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `address_plot_plot_id_foreign` FOREIGN KEY (`plot_id`) REFERENCES `plots` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of address_plot
-- ----------------------------
INSERT INTO `address_plot` VALUES (1, 8);
INSERT INTO `address_plot` VALUES (2, 8);
INSERT INTO `address_plot` VALUES (3, 8);
INSERT INTO `address_plot` VALUES (4, 8);
INSERT INTO `address_plot` VALUES (5, 8);
INSERT INTO `address_plot` VALUES (6, 8);
INSERT INTO `address_plot` VALUES (7, 8);
INSERT INTO `address_plot` VALUES (8, 8);
INSERT INTO `address_plot` VALUES (9, 8);
INSERT INTO `address_plot` VALUES (10, 8);
INSERT INTO `address_plot` VALUES (11, 8);
INSERT INTO `address_plot` VALUES (12, 8);
INSERT INTO `address_plot` VALUES (13, 8);
INSERT INTO `address_plot` VALUES (14, 8);
INSERT INTO `address_plot` VALUES (15, 8);
INSERT INTO `address_plot` VALUES (16, 8);
INSERT INTO `address_plot` VALUES (17, 8);
INSERT INTO `address_plot` VALUES (18, 8);
INSERT INTO `address_plot` VALUES (19, 8);
INSERT INTO `address_plot` VALUES (20, 8);
INSERT INTO `address_plot` VALUES (21, 8);
INSERT INTO `address_plot` VALUES (22, 8);
INSERT INTO `address_plot` VALUES (23, 8);
INSERT INTO `address_plot` VALUES (24, 8);
INSERT INTO `address_plot` VALUES (25, 8);
INSERT INTO `address_plot` VALUES (26, 8);
INSERT INTO `address_plot` VALUES (27, 8);
INSERT INTO `address_plot` VALUES (28, 8);
INSERT INTO `address_plot` VALUES (29, 8);
INSERT INTO `address_plot` VALUES (30, 8);
INSERT INTO `address_plot` VALUES (31, 8);
INSERT INTO `address_plot` VALUES (32, 8);
INSERT INTO `address_plot` VALUES (33, 8);
INSERT INTO `address_plot` VALUES (34, 8);
INSERT INTO `address_plot` VALUES (35, 8);
INSERT INTO `address_plot` VALUES (36, 8);
INSERT INTO `address_plot` VALUES (37, 8);
INSERT INTO `address_plot` VALUES (38, 8);
INSERT INTO `address_plot` VALUES (39, 8);
INSERT INTO `address_plot` VALUES (40, 9);
INSERT INTO `address_plot` VALUES (41, 9);
INSERT INTO `address_plot` VALUES (42, 8);
INSERT INTO `address_plot` VALUES (43, 8);
INSERT INTO `address_plot` VALUES (44, 8);
INSERT INTO `address_plot` VALUES (45, 8);
INSERT INTO `address_plot` VALUES (46, 8);
INSERT INTO `address_plot` VALUES (47, 8);
INSERT INTO `address_plot` VALUES (48, 9);
INSERT INTO `address_plot` VALUES (49, 9);
INSERT INTO `address_plot` VALUES (50, 9);
INSERT INTO `address_plot` VALUES (51, 9);
INSERT INTO `address_plot` VALUES (52, 9);
INSERT INTO `address_plot` VALUES (53, 9);
INSERT INTO `address_plot` VALUES (54, 9);
INSERT INTO `address_plot` VALUES (55, 9);
INSERT INTO `address_plot` VALUES (56, 8);
INSERT INTO `address_plot` VALUES (57, 8);
INSERT INTO `address_plot` VALUES (58, 8);
INSERT INTO `address_plot` VALUES (59, 8);
INSERT INTO `address_plot` VALUES (60, 8);
INSERT INTO `address_plot` VALUES (61, 8);
INSERT INTO `address_plot` VALUES (62, 9);
INSERT INTO `address_plot` VALUES (63, 9);
INSERT INTO `address_plot` VALUES (64, 9);
INSERT INTO `address_plot` VALUES (65, 9);
INSERT INTO `address_plot` VALUES (66, 9);
INSERT INTO `address_plot` VALUES (67, 9);
INSERT INTO `address_plot` VALUES (68, 9);
INSERT INTO `address_plot` VALUES (69, 9);
INSERT INTO `address_plot` VALUES (70, 9);
INSERT INTO `address_plot` VALUES (71, 9);
INSERT INTO `address_plot` VALUES (72, 9);
INSERT INTO `address_plot` VALUES (73, 9);
INSERT INTO `address_plot` VALUES (74, 9);
INSERT INTO `address_plot` VALUES (75, 9);
INSERT INTO `address_plot` VALUES (76, 9);
INSERT INTO `address_plot` VALUES (77, 9);
INSERT INTO `address_plot` VALUES (78, 9);
INSERT INTO `address_plot` VALUES (79, 9);
INSERT INTO `address_plot` VALUES (80, 9);
INSERT INTO `address_plot` VALUES (81, 9);
INSERT INTO `address_plot` VALUES (82, 9);
INSERT INTO `address_plot` VALUES (83, 9);
INSERT INTO `address_plot` VALUES (84, 9);
INSERT INTO `address_plot` VALUES (85, 9);
INSERT INTO `address_plot` VALUES (86, 9);
INSERT INTO `address_plot` VALUES (87, 9);
INSERT INTO `address_plot` VALUES (88, 9);
INSERT INTO `address_plot` VALUES (89, 9);
INSERT INTO `address_plot` VALUES (90, 9);
INSERT INTO `address_plot` VALUES (91, 9);
INSERT INTO `address_plot` VALUES (92, 9);
INSERT INTO `address_plot` VALUES (93, 9);
INSERT INTO `address_plot` VALUES (94, 9);
INSERT INTO `address_plot` VALUES (95, 9);
INSERT INTO `address_plot` VALUES (96, 9);
INSERT INTO `address_plot` VALUES (97, 9);
INSERT INTO `address_plot` VALUES (98, 9);
INSERT INTO `address_plot` VALUES (99, 9);
INSERT INTO `address_plot` VALUES (100, 9);
INSERT INTO `address_plot` VALUES (101, 9);
INSERT INTO `address_plot` VALUES (102, 9);
INSERT INTO `address_plot` VALUES (103, 9);
INSERT INTO `address_plot` VALUES (104, 9);
INSERT INTO `address_plot` VALUES (105, 9);
INSERT INTO `address_plot` VALUES (106, 9);
INSERT INTO `address_plot` VALUES (107, 9);
INSERT INTO `address_plot` VALUES (108, 9);
INSERT INTO `address_plot` VALUES (109, 9);
INSERT INTO `address_plot` VALUES (110, 9);
INSERT INTO `address_plot` VALUES (111, 9);
INSERT INTO `address_plot` VALUES (112, 9);
INSERT INTO `address_plot` VALUES (113, 9);
INSERT INTO `address_plot` VALUES (114, 9);
INSERT INTO `address_plot` VALUES (115, 9);
INSERT INTO `address_plot` VALUES (116, 9);
INSERT INTO `address_plot` VALUES (117, 9);
INSERT INTO `address_plot` VALUES (118, 5);
INSERT INTO `address_plot` VALUES (119, 5);
INSERT INTO `address_plot` VALUES (120, 5);
INSERT INTO `address_plot` VALUES (121, 5);
INSERT INTO `address_plot` VALUES (122, 5);
INSERT INTO `address_plot` VALUES (123, 5);
INSERT INTO `address_plot` VALUES (124, 5);
INSERT INTO `address_plot` VALUES (125, 5);
INSERT INTO `address_plot` VALUES (126, 5);
INSERT INTO `address_plot` VALUES (127, 6);
INSERT INTO `address_plot` VALUES (128, 6);
INSERT INTO `address_plot` VALUES (129, 6);
INSERT INTO `address_plot` VALUES (130, 6);
INSERT INTO `address_plot` VALUES (131, 6);
INSERT INTO `address_plot` VALUES (132, 5);
INSERT INTO `address_plot` VALUES (133, 6);
INSERT INTO `address_plot` VALUES (134, 6);
INSERT INTO `address_plot` VALUES (135, 6);
INSERT INTO `address_plot` VALUES (136, 6);
INSERT INTO `address_plot` VALUES (137, 5);
INSERT INTO `address_plot` VALUES (138, 6);
INSERT INTO `address_plot` VALUES (139, 6);
INSERT INTO `address_plot` VALUES (140, 5);
INSERT INTO `address_plot` VALUES (141, 6);
INSERT INTO `address_plot` VALUES (142, 6);
INSERT INTO `address_plot` VALUES (143, 6);
INSERT INTO `address_plot` VALUES (144, 6);
INSERT INTO `address_plot` VALUES (145, 6);
INSERT INTO `address_plot` VALUES (146, 6);
INSERT INTO `address_plot` VALUES (147, 6);
INSERT INTO `address_plot` VALUES (148, 5);
INSERT INTO `address_plot` VALUES (149, 5);
INSERT INTO `address_plot` VALUES (150, 5);
INSERT INTO `address_plot` VALUES (151, 5);
INSERT INTO `address_plot` VALUES (152, 6);
INSERT INTO `address_plot` VALUES (153, 6);
INSERT INTO `address_plot` VALUES (154, 6);
INSERT INTO `address_plot` VALUES (155, 6);
INSERT INTO `address_plot` VALUES (156, 6);
INSERT INTO `address_plot` VALUES (157, 6);
INSERT INTO `address_plot` VALUES (158, 6);
INSERT INTO `address_plot` VALUES (159, 6);
INSERT INTO `address_plot` VALUES (160, 6);
INSERT INTO `address_plot` VALUES (161, 5);
INSERT INTO `address_plot` VALUES (162, 6);
INSERT INTO `address_plot` VALUES (163, 6);
INSERT INTO `address_plot` VALUES (164, 5);
INSERT INTO `address_plot` VALUES (165, 5);
INSERT INTO `address_plot` VALUES (166, 5);
INSERT INTO `address_plot` VALUES (167, 5);
INSERT INTO `address_plot` VALUES (168, 5);
INSERT INTO `address_plot` VALUES (169, 5);
INSERT INTO `address_plot` VALUES (170, 5);
INSERT INTO `address_plot` VALUES (171, 6);
INSERT INTO `address_plot` VALUES (172, 5);
INSERT INTO `address_plot` VALUES (173, 5);
INSERT INTO `address_plot` VALUES (174, 6);
INSERT INTO `address_plot` VALUES (175, 6);
INSERT INTO `address_plot` VALUES (176, 6);
INSERT INTO `address_plot` VALUES (177, 6);
INSERT INTO `address_plot` VALUES (178, 5);
INSERT INTO `address_plot` VALUES (179, 6);
INSERT INTO `address_plot` VALUES (180, 6);
INSERT INTO `address_plot` VALUES (181, 6);
INSERT INTO `address_plot` VALUES (182, 6);
INSERT INTO `address_plot` VALUES (183, 6);
INSERT INTO `address_plot` VALUES (184, 6);
INSERT INTO `address_plot` VALUES (185, 6);
INSERT INTO `address_plot` VALUES (186, 6);
INSERT INTO `address_plot` VALUES (187, 5);
INSERT INTO `address_plot` VALUES (188, 6);
INSERT INTO `address_plot` VALUES (189, 6);
INSERT INTO `address_plot` VALUES (190, 7);
INSERT INTO `address_plot` VALUES (191, 7);
INSERT INTO `address_plot` VALUES (192, 7);
INSERT INTO `address_plot` VALUES (193, 7);
INSERT INTO `address_plot` VALUES (194, 5);
INSERT INTO `address_plot` VALUES (195, 5);
INSERT INTO `address_plot` VALUES (196, 7);
INSERT INTO `address_plot` VALUES (197, 7);
INSERT INTO `address_plot` VALUES (198, 7);
INSERT INTO `address_plot` VALUES (199, 7);
INSERT INTO `address_plot` VALUES (200, 5);
INSERT INTO `address_plot` VALUES (201, 5);
INSERT INTO `address_plot` VALUES (202, 5);
INSERT INTO `address_plot` VALUES (203, 5);
INSERT INTO `address_plot` VALUES (204, 5);
INSERT INTO `address_plot` VALUES (205, 5);
INSERT INTO `address_plot` VALUES (206, 5);
INSERT INTO `address_plot` VALUES (207, 5);
INSERT INTO `address_plot` VALUES (208, 5);
INSERT INTO `address_plot` VALUES (209, 6);
INSERT INTO `address_plot` VALUES (210, 6);
INSERT INTO `address_plot` VALUES (211, 6);
INSERT INTO `address_plot` VALUES (212, 6);
INSERT INTO `address_plot` VALUES (213, 6);
INSERT INTO `address_plot` VALUES (214, 6);
INSERT INTO `address_plot` VALUES (215, 6);
INSERT INTO `address_plot` VALUES (216, 5);
INSERT INTO `address_plot` VALUES (217, 7);
INSERT INTO `address_plot` VALUES (218, 7);
INSERT INTO `address_plot` VALUES (219, 7);
INSERT INTO `address_plot` VALUES (220, 7);
INSERT INTO `address_plot` VALUES (221, 7);
INSERT INTO `address_plot` VALUES (222, 7);
INSERT INTO `address_plot` VALUES (223, 7);
INSERT INTO `address_plot` VALUES (224, 7);
INSERT INTO `address_plot` VALUES (225, 7);
INSERT INTO `address_plot` VALUES (226, 7);
INSERT INTO `address_plot` VALUES (227, 7);
INSERT INTO `address_plot` VALUES (228, 7);
INSERT INTO `address_plot` VALUES (229, 7);
INSERT INTO `address_plot` VALUES (230, 7);
INSERT INTO `address_plot` VALUES (231, 7);
INSERT INTO `address_plot` VALUES (232, 5);
INSERT INTO `address_plot` VALUES (233, 5);
INSERT INTO `address_plot` VALUES (234, 5);
INSERT INTO `address_plot` VALUES (235, 5);
INSERT INTO `address_plot` VALUES (236, 5);
INSERT INTO `address_plot` VALUES (237, 5);
INSERT INTO `address_plot` VALUES (238, 5);
INSERT INTO `address_plot` VALUES (239, 5);
INSERT INTO `address_plot` VALUES (240, 5);
INSERT INTO `address_plot` VALUES (241, 6);
INSERT INTO `address_plot` VALUES (242, 6);
INSERT INTO `address_plot` VALUES (243, 6);
INSERT INTO `address_plot` VALUES (244, 6);
INSERT INTO `address_plot` VALUES (245, 6);
INSERT INTO `address_plot` VALUES (246, 6);
INSERT INTO `address_plot` VALUES (247, 6);
INSERT INTO `address_plot` VALUES (248, 6);
INSERT INTO `address_plot` VALUES (249, 6);
INSERT INTO `address_plot` VALUES (250, 6);
INSERT INTO `address_plot` VALUES (251, 6);
INSERT INTO `address_plot` VALUES (252, 6);
INSERT INTO `address_plot` VALUES (253, 6);
INSERT INTO `address_plot` VALUES (254, 6);
INSERT INTO `address_plot` VALUES (255, 6);
INSERT INTO `address_plot` VALUES (256, 6);
INSERT INTO `address_plot` VALUES (257, 6);
INSERT INTO `address_plot` VALUES (258, 5);
INSERT INTO `address_plot` VALUES (259, 5);
INSERT INTO `address_plot` VALUES (260, 5);
INSERT INTO `address_plot` VALUES (261, 5);
INSERT INTO `address_plot` VALUES (262, 5);
INSERT INTO `address_plot` VALUES (263, 5);
INSERT INTO `address_plot` VALUES (264, 5);
INSERT INTO `address_plot` VALUES (265, 5);
INSERT INTO `address_plot` VALUES (266, 5);
INSERT INTO `address_plot` VALUES (267, 5);
INSERT INTO `address_plot` VALUES (268, 5);
INSERT INTO `address_plot` VALUES (269, 5);
INSERT INTO `address_plot` VALUES (270, 5);
INSERT INTO `address_plot` VALUES (271, 5);
INSERT INTO `address_plot` VALUES (272, 5);
INSERT INTO `address_plot` VALUES (273, 5);
INSERT INTO `address_plot` VALUES (274, 5);
INSERT INTO `address_plot` VALUES (275, 5);
INSERT INTO `address_plot` VALUES (276, 5);
INSERT INTO `address_plot` VALUES (277, 5);
INSERT INTO `address_plot` VALUES (278, 5);
INSERT INTO `address_plot` VALUES (279, 5);
INSERT INTO `address_plot` VALUES (280, 5);
INSERT INTO `address_plot` VALUES (281, 5);
INSERT INTO `address_plot` VALUES (282, 5);
INSERT INTO `address_plot` VALUES (283, 5);
INSERT INTO `address_plot` VALUES (284, 5);
INSERT INTO `address_plot` VALUES (285, 5);
INSERT INTO `address_plot` VALUES (286, 5);
INSERT INTO `address_plot` VALUES (287, 5);
INSERT INTO `address_plot` VALUES (288, 5);
INSERT INTO `address_plot` VALUES (289, 5);
INSERT INTO `address_plot` VALUES (290, 5);
INSERT INTO `address_plot` VALUES (291, 5);
INSERT INTO `address_plot` VALUES (292, 7);
INSERT INTO `address_plot` VALUES (293, 7);
INSERT INTO `address_plot` VALUES (294, 7);
INSERT INTO `address_plot` VALUES (295, 7);
INSERT INTO `address_plot` VALUES (296, 7);
INSERT INTO `address_plot` VALUES (297, 7);
INSERT INTO `address_plot` VALUES (298, 7);
INSERT INTO `address_plot` VALUES (299, 7);
INSERT INTO `address_plot` VALUES (300, 7);
INSERT INTO `address_plot` VALUES (301, 7);
INSERT INTO `address_plot` VALUES (302, 7);
INSERT INTO `address_plot` VALUES (303, 7);
INSERT INTO `address_plot` VALUES (304, 7);
INSERT INTO `address_plot` VALUES (305, 7);
INSERT INTO `address_plot` VALUES (306, 5);
INSERT INTO `address_plot` VALUES (307, 5);
INSERT INTO `address_plot` VALUES (308, 5);
INSERT INTO `address_plot` VALUES (309, 5);
INSERT INTO `address_plot` VALUES (310, 5);
INSERT INTO `address_plot` VALUES (311, 5);
INSERT INTO `address_plot` VALUES (312, 5);
INSERT INTO `address_plot` VALUES (313, 5);
INSERT INTO `address_plot` VALUES (314, 5);
INSERT INTO `address_plot` VALUES (315, 5);
INSERT INTO `address_plot` VALUES (316, 5);
INSERT INTO `address_plot` VALUES (317, 5);
INSERT INTO `address_plot` VALUES (318, 5);
INSERT INTO `address_plot` VALUES (319, 5);
INSERT INTO `address_plot` VALUES (320, 5);
INSERT INTO `address_plot` VALUES (321, 5);
INSERT INTO `address_plot` VALUES (322, 5);
INSERT INTO `address_plot` VALUES (323, 5);
INSERT INTO `address_plot` VALUES (324, 5);
INSERT INTO `address_plot` VALUES (325, 5);
INSERT INTO `address_plot` VALUES (326, 5);
INSERT INTO `address_plot` VALUES (327, 7);
INSERT INTO `address_plot` VALUES (328, 7);
INSERT INTO `address_plot` VALUES (329, 7);
INSERT INTO `address_plot` VALUES (330, 7);
INSERT INTO `address_plot` VALUES (331, 7);
INSERT INTO `address_plot` VALUES (332, 7);
INSERT INTO `address_plot` VALUES (333, 7);
INSERT INTO `address_plot` VALUES (334, 7);
INSERT INTO `address_plot` VALUES (335, 6);
INSERT INTO `address_plot` VALUES (336, 7);
INSERT INTO `address_plot` VALUES (337, 7);
INSERT INTO `address_plot` VALUES (338, 7);
INSERT INTO `address_plot` VALUES (339, 7);
INSERT INTO `address_plot` VALUES (340, 7);
INSERT INTO `address_plot` VALUES (341, 7);
INSERT INTO `address_plot` VALUES (342, 7);
INSERT INTO `address_plot` VALUES (343, 7);
INSERT INTO `address_plot` VALUES (344, 7);
INSERT INTO `address_plot` VALUES (345, 7);
INSERT INTO `address_plot` VALUES (346, 7);
INSERT INTO `address_plot` VALUES (347, 7);
INSERT INTO `address_plot` VALUES (348, 6);
INSERT INTO `address_plot` VALUES (349, 6);
INSERT INTO `address_plot` VALUES (350, 6);
INSERT INTO `address_plot` VALUES (351, 6);
INSERT INTO `address_plot` VALUES (352, 6);
INSERT INTO `address_plot` VALUES (353, 6);

-- ----------------------------
-- Table structure for addresses
-- ----------------------------
DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `street_id` bigint(20) UNSIGNED NOT NULL,
  `num_home` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 354 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of addresses
-- ----------------------------
INSERT INTO `addresses` VALUES (1, 10, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (2, 10, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (3, 10, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (4, 10, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (5, 10, '13', NULL, NULL);
INSERT INTO `addresses` VALUES (6, 10, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (7, 10, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (8, 10, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (9, 10, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (10, 10, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (11, 10, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (12, 10, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (13, 10, '20', NULL, NULL);
INSERT INTO `addresses` VALUES (14, 10, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (15, 10, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (16, 10, '23', NULL, NULL);
INSERT INTO `addresses` VALUES (17, 10, '24', NULL, NULL);
INSERT INTO `addresses` VALUES (18, 10, '25', NULL, NULL);
INSERT INTO `addresses` VALUES (19, 10, '26', NULL, NULL);
INSERT INTO `addresses` VALUES (20, 10, '27', NULL, NULL);
INSERT INTO `addresses` VALUES (21, 10, '28', NULL, NULL);
INSERT INTO `addresses` VALUES (22, 10, '29', NULL, NULL);
INSERT INTO `addresses` VALUES (23, 10, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (24, 10, '30', NULL, NULL);
INSERT INTO `addresses` VALUES (25, 10, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (26, 10, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (27, 10, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (28, 10, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (29, 10, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (30, 10, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (31, 11, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (32, 11, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (33, 11, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (34, 11, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (35, 11, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (36, 11, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (37, 11, '9/1', NULL, NULL);
INSERT INTO `addresses` VALUES (38, 11, '9/3', NULL, NULL);
INSERT INTO `addresses` VALUES (39, 11, '9/3', NULL, NULL);
INSERT INTO `addresses` VALUES (40, 12, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (41, 12, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (42, 12, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (43, 12, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (44, 12, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (45, 12, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (46, 12, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (47, 12, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (48, 12, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (49, 12, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (50, 12, '24', NULL, NULL);
INSERT INTO `addresses` VALUES (51, 12, '25', NULL, NULL);
INSERT INTO `addresses` VALUES (52, 12, '27', NULL, NULL);
INSERT INTO `addresses` VALUES (53, 12, '28', NULL, NULL);
INSERT INTO `addresses` VALUES (54, 12, '29', NULL, NULL);
INSERT INTO `addresses` VALUES (55, 12, '30', NULL, NULL);
INSERT INTO `addresses` VALUES (56, 12, '31', NULL, NULL);
INSERT INTO `addresses` VALUES (57, 12, '32', NULL, NULL);
INSERT INTO `addresses` VALUES (58, 12, '33', NULL, NULL);
INSERT INTO `addresses` VALUES (59, 12, '34', NULL, NULL);
INSERT INTO `addresses` VALUES (60, 12, '35', NULL, NULL);
INSERT INTO `addresses` VALUES (61, 12, '36', NULL, NULL);
INSERT INTO `addresses` VALUES (62, 12, '37', NULL, NULL);
INSERT INTO `addresses` VALUES (63, 12, '37а', NULL, NULL);
INSERT INTO `addresses` VALUES (64, 12, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (65, 12, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (66, 12, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (67, 12, '76', NULL, NULL);
INSERT INTO `addresses` VALUES (68, 12, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (69, 12, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (70, 13, '20', NULL, NULL);
INSERT INTO `addresses` VALUES (71, 13, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (72, 13, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (73, 13, '23', NULL, NULL);
INSERT INTO `addresses` VALUES (74, 13, '24', NULL, NULL);
INSERT INTO `addresses` VALUES (75, 13, '25', NULL, NULL);
INSERT INTO `addresses` VALUES (76, 13, '26', NULL, NULL);
INSERT INTO `addresses` VALUES (77, 13, '70', NULL, NULL);
INSERT INTO `addresses` VALUES (78, 13, '71', NULL, NULL);
INSERT INTO `addresses` VALUES (79, 13, '72', NULL, NULL);
INSERT INTO `addresses` VALUES (80, 13, '73', NULL, NULL);
INSERT INTO `addresses` VALUES (81, 13, '74', NULL, NULL);
INSERT INTO `addresses` VALUES (82, 13, '75', NULL, NULL);
INSERT INTO `addresses` VALUES (83, 13, '79', NULL, NULL);
INSERT INTO `addresses` VALUES (84, 13, '80', NULL, NULL);
INSERT INTO `addresses` VALUES (85, 14, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (86, 14, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (87, 14, '102', NULL, NULL);
INSERT INTO `addresses` VALUES (88, 14, '103', NULL, NULL);
INSERT INTO `addresses` VALUES (89, 14, '104', NULL, NULL);
INSERT INTO `addresses` VALUES (90, 14, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (91, 14, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (92, 14, '13', NULL, NULL);
INSERT INTO `addresses` VALUES (93, 14, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (94, 14, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (95, 14, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (96, 14, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (97, 14, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (98, 14, '20', NULL, NULL);
INSERT INTO `addresses` VALUES (99, 14, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (100, 14, '21б', NULL, NULL);
INSERT INTO `addresses` VALUES (101, 14, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (102, 14, '23', NULL, NULL);
INSERT INTO `addresses` VALUES (103, 14, '24', NULL, NULL);
INSERT INTO `addresses` VALUES (104, 14, '25', NULL, NULL);
INSERT INTO `addresses` VALUES (105, 14, '26', NULL, NULL);
INSERT INTO `addresses` VALUES (106, 14, '27', NULL, NULL);
INSERT INTO `addresses` VALUES (107, 14, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (108, 14, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (109, 14, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (110, 14, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (111, 14, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (112, 14, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (113, 34, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (114, 34, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (115, 34, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (116, 34, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (117, 34, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (118, 5, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (119, 5, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (120, 5, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (121, 5, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (122, 5, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (123, 5, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (124, 5, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (125, 5, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (126, 5, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (127, 5, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (128, 8, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (129, 8, '13', NULL, NULL);
INSERT INTO `addresses` VALUES (130, 8, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (131, 8, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (132, 8, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (133, 8, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (134, 8, '23', NULL, NULL);
INSERT INTO `addresses` VALUES (135, 8, '25', NULL, NULL);
INSERT INTO `addresses` VALUES (136, 8, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (137, 8, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (138, 8, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (139, 8, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (140, 33, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (141, 6, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (142, 6, '4а', NULL, NULL);
INSERT INTO `addresses` VALUES (143, 6, '4б', NULL, NULL);
INSERT INTO `addresses` VALUES (144, 6, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (145, 6, '5а', NULL, NULL);
INSERT INTO `addresses` VALUES (146, 6, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (147, 6, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (148, 7, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (149, 7, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (150, 7, '16а', NULL, NULL);
INSERT INTO `addresses` VALUES (151, 7, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (152, 7, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (153, 7, '24', NULL, NULL);
INSERT INTO `addresses` VALUES (154, 7, '26', NULL, NULL);
INSERT INTO `addresses` VALUES (155, 7, '26а', NULL, NULL);
INSERT INTO `addresses` VALUES (156, 7, '26б', NULL, NULL);
INSERT INTO `addresses` VALUES (157, 7, '26в', NULL, NULL);
INSERT INTO `addresses` VALUES (158, 7, '28', NULL, NULL);
INSERT INTO `addresses` VALUES (159, 7, '30', NULL, NULL);
INSERT INTO `addresses` VALUES (160, 7, '36', NULL, NULL);
INSERT INTO `addresses` VALUES (161, 7, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (162, 7, '40', NULL, NULL);
INSERT INTO `addresses` VALUES (163, 7, '42', NULL, NULL);
INSERT INTO `addresses` VALUES (164, 7, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (165, 17, '27', NULL, NULL);
INSERT INTO `addresses` VALUES (166, 17, '31', NULL, NULL);
INSERT INTO `addresses` VALUES (167, 17, '33', NULL, NULL);
INSERT INTO `addresses` VALUES (168, 17, '35', NULL, NULL);
INSERT INTO `addresses` VALUES (169, 17, '37', NULL, NULL);
INSERT INTO `addresses` VALUES (170, 2, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (171, 2, '13', NULL, NULL);
INSERT INTO `addresses` VALUES (172, 2, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (173, 2, '14а', NULL, NULL);
INSERT INTO `addresses` VALUES (174, 2, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (175, 2, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (176, 2, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (177, 2, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (178, 2, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (179, 2, '20', NULL, NULL);
INSERT INTO `addresses` VALUES (180, 2, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (181, 2, '23', NULL, NULL);
INSERT INTO `addresses` VALUES (182, 2, '24', NULL, NULL);
INSERT INTO `addresses` VALUES (183, 2, '25', NULL, NULL);
INSERT INTO `addresses` VALUES (184, 2, '26', NULL, NULL);
INSERT INTO `addresses` VALUES (185, 2, '27', NULL, NULL);
INSERT INTO `addresses` VALUES (186, 2, '28', NULL, NULL);
INSERT INTO `addresses` VALUES (187, 2, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (188, 2, '30', NULL, NULL);
INSERT INTO `addresses` VALUES (189, 2, '32', NULL, NULL);
INSERT INTO `addresses` VALUES (190, 2, '37', NULL, NULL);
INSERT INTO `addresses` VALUES (191, 2, '37а', NULL, NULL);
INSERT INTO `addresses` VALUES (192, 2, '39', NULL, NULL);
INSERT INTO `addresses` VALUES (193, 2, '39а', NULL, NULL);
INSERT INTO `addresses` VALUES (194, 2, '3а', NULL, NULL);
INSERT INTO `addresses` VALUES (195, 2, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (196, 2, '41', NULL, NULL);
INSERT INTO `addresses` VALUES (197, 2, '41а', NULL, NULL);
INSERT INTO `addresses` VALUES (198, 2, '43', NULL, NULL);
INSERT INTO `addresses` VALUES (199, 2, '43а', NULL, NULL);
INSERT INTO `addresses` VALUES (200, 2, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (201, 2, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (202, 19, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (203, 19, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (204, 19, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (205, 19, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (206, 19, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (207, 19, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (208, 19, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (209, 28, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (210, 28, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (211, 28, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (212, 28, '20', NULL, NULL);
INSERT INTO `addresses` VALUES (213, 28, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (214, 28, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (215, 28, '23', NULL, NULL);
INSERT INTO `addresses` VALUES (216, 28, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (217, 24, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (218, 24, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (219, 24, '11', NULL, NULL);
INSERT INTO `addresses` VALUES (220, 24, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (221, 24, '12а', NULL, NULL);
INSERT INTO `addresses` VALUES (222, 24, '12б', NULL, NULL);
INSERT INTO `addresses` VALUES (223, 24, '12в', NULL, NULL);
INSERT INTO `addresses` VALUES (224, 24, '13', NULL, NULL);
INSERT INTO `addresses` VALUES (225, 24, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (226, 24, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (227, 24, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (228, 24, '5а', NULL, NULL);
INSERT INTO `addresses` VALUES (229, 24, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (230, 24, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (231, 24, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (232, 16, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (233, 16, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (234, 16, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (235, 16, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (236, 16, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (237, 16, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (238, 16, '20', NULL, NULL);
INSERT INTO `addresses` VALUES (239, 16, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (240, 16, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (241, 23, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (242, 23, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (243, 23, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (244, 23, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (245, 23, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (246, 23, '5а', NULL, NULL);
INSERT INTO `addresses` VALUES (247, 23, '5б', NULL, NULL);
INSERT INTO `addresses` VALUES (248, 23, '5в', NULL, NULL);
INSERT INTO `addresses` VALUES (249, 23, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (250, 23, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (251, 23, '9а', NULL, NULL);
INSERT INTO `addresses` VALUES (252, 3, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (253, 3, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (254, 3, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (255, 3, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (256, 3, '1а', NULL, NULL);
INSERT INTO `addresses` VALUES (257, 3, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (258, 32, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (259, 32, '13', NULL, NULL);
INSERT INTO `addresses` VALUES (260, 32, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (261, 32, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (262, 32, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (263, 32, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (264, 32, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (265, 32, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (266, 32, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (267, 32, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (268, 32, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (269, 26, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (270, 26, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (271, 26, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (272, 26, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (273, 26, '26', NULL, NULL);
INSERT INTO `addresses` VALUES (274, 26, '28', NULL, NULL);
INSERT INTO `addresses` VALUES (275, 26, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (276, 26, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (277, 26, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (278, 26, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (279, 26, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (280, 27, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (281, 27, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (282, 27, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (283, 27, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (284, 27, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (285, 27, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (286, 27, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (287, 27, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (288, 35, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (289, 31, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (290, 31, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (291, 36, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (292, 37, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (293, 37, '10а', NULL, NULL);
INSERT INTO `addresses` VALUES (294, 37, '10б', NULL, NULL);
INSERT INTO `addresses` VALUES (295, 37, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (296, 37, '12а', NULL, NULL);
INSERT INTO `addresses` VALUES (297, 37, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (298, 37, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (299, 37, '2а', NULL, NULL);
INSERT INTO `addresses` VALUES (300, 37, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (301, 37, '4а', NULL, NULL);
INSERT INTO `addresses` VALUES (302, 37, '4б', NULL, NULL);
INSERT INTO `addresses` VALUES (303, 37, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (304, 37, '8а', NULL, NULL);
INSERT INTO `addresses` VALUES (305, 37, '8б', NULL, NULL);
INSERT INTO `addresses` VALUES (306, 18, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (307, 18, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (308, 18, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (309, 18, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (310, 18, '17', NULL, NULL);
INSERT INTO `addresses` VALUES (311, 18, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (312, 18, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (313, 18, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (314, 29, '1', NULL, NULL);
INSERT INTO `addresses` VALUES (315, 29, '10', NULL, NULL);
INSERT INTO `addresses` VALUES (316, 29, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (317, 29, '16', NULL, NULL);
INSERT INTO `addresses` VALUES (318, 29, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (319, 29, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (320, 29, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (321, 29, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (322, 29, '5', NULL, NULL);
INSERT INTO `addresses` VALUES (323, 29, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (324, 29, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (325, 29, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (326, 29, '9', NULL, NULL);
INSERT INTO `addresses` VALUES (327, 4, '12', NULL, NULL);
INSERT INTO `addresses` VALUES (328, 4, '14', NULL, NULL);
INSERT INTO `addresses` VALUES (329, 4, '15', NULL, NULL);
INSERT INTO `addresses` VALUES (330, 4, '15а', NULL, NULL);
INSERT INTO `addresses` VALUES (331, 4, '18', NULL, NULL);
INSERT INTO `addresses` VALUES (332, 4, '18а', NULL, NULL);
INSERT INTO `addresses` VALUES (333, 4, '18б', NULL, NULL);
INSERT INTO `addresses` VALUES (334, 4, '19', NULL, NULL);
INSERT INTO `addresses` VALUES (335, 4, '2', NULL, NULL);
INSERT INTO `addresses` VALUES (336, 4, '21', NULL, NULL);
INSERT INTO `addresses` VALUES (337, 4, '21а', NULL, NULL);
INSERT INTO `addresses` VALUES (338, 4, '21б', NULL, NULL);
INSERT INTO `addresses` VALUES (339, 4, '21в', NULL, NULL);
INSERT INTO `addresses` VALUES (340, 4, '21г', NULL, NULL);
INSERT INTO `addresses` VALUES (341, 4, '21д', NULL, NULL);
INSERT INTO `addresses` VALUES (342, 4, '22', NULL, NULL);
INSERT INTO `addresses` VALUES (343, 4, '22б', NULL, NULL);
INSERT INTO `addresses` VALUES (344, 4, '22в', NULL, NULL);
INSERT INTO `addresses` VALUES (345, 4, '23', NULL, NULL);
INSERT INTO `addresses` VALUES (346, 4, '24', NULL, NULL);
INSERT INTO `addresses` VALUES (347, 4, '25', NULL, NULL);
INSERT INTO `addresses` VALUES (348, 4, '3', NULL, NULL);
INSERT INTO `addresses` VALUES (349, 4, '4', NULL, NULL);
INSERT INTO `addresses` VALUES (350, 4, '6', NULL, NULL);
INSERT INTO `addresses` VALUES (351, 4, '7', NULL, NULL);
INSERT INTO `addresses` VALUES (352, 4, '8', NULL, NULL);
INSERT INTO `addresses` VALUES (353, 4, '9', NULL, NULL);

-- ----------------------------
-- Table structure for bids
-- ----------------------------
DROP TABLE IF EXISTS `bids`;
CREATE TABLE `bids`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `street_id` bigint(20) UNSIGNED NOT NULL,
  `num_home` int(11) NOT NULL,
  `num_corp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `num_flat` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `time_in` time(0) NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `defect_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bids
-- ----------------------------
INSERT INTO `bids` VALUES (3, 2, 23, 9, NULL, 44, '2020-05-13', '14:50:00', 'Красюков', '6-45-41', 2, 27, '2020-05-29 21:47:06', '2020-05-29 21:47:15');
INSERT INTO `bids` VALUES (5, 5, 4, 21, NULL, 51, '2020-05-11', '10:24:00', 'Шпатенко', '7-01-51', 1, 14, '2020-05-30 06:14:16', '2020-06-03 10:28:24');
INSERT INTO `bids` VALUES (6, 2, 2, 18, NULL, 23, '2020-05-21', '10:11:00', 'Левин', '7-99-72', 1, 6, '2020-06-02 04:12:33', '2020-06-02 04:12:33');

-- ----------------------------
-- Table structure for branches
-- ----------------------------
DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `slug` tinyint(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of branches
-- ----------------------------
INSERT INTO `branches` VALUES (1, 'ЖЭУ-1', '2020-05-22 18:11:33', '2020-05-22 18:11:33', 1);
INSERT INTO `branches` VALUES (2, 'ЖЭУ-2', '2020-05-22 18:11:43', '2020-05-22 18:11:43', 1);
INSERT INTO `branches` VALUES (3, 'ЖЭУ-3', '2020-05-22 18:11:49', '2020-05-22 18:11:49', 1);
INSERT INTO `branches` VALUES (4, 'ЖЭУ-4', '2020-05-22 18:11:54', '2020-05-22 18:11:54', 1);
INSERT INTO `branches` VALUES (5, 'ЖЭУ-5', '2020-05-22 18:12:00', '2020-05-22 18:12:00', 1);
INSERT INTO `branches` VALUES (9, 'ОАС', '2020-05-22 18:12:40', '2020-05-22 18:12:40', 1);
INSERT INTO `branches` VALUES (10, 'Транспортный отдел', '2020-05-22 18:13:04', '2020-05-22 18:13:04', NULL);
INSERT INTO `branches` VALUES (12, 'Отдел главного энергетика', '2020-05-22 18:13:52', '2020-05-22 18:13:52', NULL);

-- ----------------------------
-- Table structure for briefs
-- ----------------------------
DROP TABLE IF EXISTS `briefs`;
CREATE TABLE `briefs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_brief` date NOT NULL,
  `temp` tinyint(4) NOT NULL,
  `pressure` smallint(6) NOT NULL,
  `hw_tst` tinyint(4) NOT NULL,
  `hw_tbk` tinyint(4) NOT NULL,
  `hw_pst` decimal(2, 1) NOT NULL,
  `hw_pbk` decimal(2, 1) NOT NULL,
  `cw_r` decimal(2, 1) NOT NULL,
  `cw_ot` decimal(2, 1) NOT NULL,
  `cw_tf` decimal(2, 1) NOT NULL,
  `cw_fs` decimal(2, 1) NOT NULL,
  `cw_s` decimal(2, 1) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of briefs
-- ----------------------------
INSERT INTO `briefs` VALUES (1, '2020-05-11', 37, 380, 60, 55, 5.8, 2.5, 2.8, 2.8, 3.1, 3.2, 3.1, '2020-05-30 19:58:02', '2020-05-31 06:57:14');
INSERT INTO `briefs` VALUES (2, '2020-05-12', 36, 379, 60, 47, 5.9, 2.5, 3.0, 3.0, 3.1, 3.2, 3.2, '2020-05-30 20:10:06', '2020-05-31 06:57:20');
INSERT INTO `briefs` VALUES (3, '2020-05-13', 37, 376, 57, 50, 5.9, 2.9, 3.0, 3.1, 3.1, 3.2, 3.1, '2020-05-31 07:12:06', '2020-05-31 07:12:06');
INSERT INTO `briefs` VALUES (4, '2020-05-14', 37, 380, 58, 48, 5.8, 3.0, 2.9, 3.1, 3.1, 3.1, 3.3, '2020-05-31 07:12:56', '2020-05-31 07:12:56');
INSERT INTO `briefs` VALUES (5, '2020-05-15', 38, 380, 60, 47, 6.3, 2.5, 3.0, 3.0, 3.0, 3.1, 3.1, '2020-05-31 07:13:56', '2020-05-31 07:13:56');
INSERT INTO `briefs` VALUES (6, '2020-05-16', 39, 380, 57, 50, 6.2, 2.1, 3.2, 3.1, 3.1, 3.2, 3.2, '2020-05-31 07:14:44', '2020-05-31 07:14:44');
INSERT INTO `briefs` VALUES (7, '2020-05-17', 38, 380, 60, 51, 6.0, 2.4, 2.9, 2.9, 3.0, 3.1, 3.1, '2020-05-31 07:15:40', '2020-05-31 07:15:40');
INSERT INTO `briefs` VALUES (8, '2020-05-18', 36, 380, 58, 55, 6.5, 2.4, 3.0, 3.0, 3.0, 3.2, 3.1, '2020-05-31 07:16:41', '2020-05-31 07:16:41');
INSERT INTO `briefs` VALUES (9, '2020-05-19', 34, 370, 61, 48, 6.1, 2.1, 2.9, 2.9, 3.1, 3.1, 3.0, '2020-05-31 07:17:37', '2020-05-31 07:17:37');
INSERT INTO `briefs` VALUES (10, '2020-05-20', 33, 380, 57, 50, 6.4, 2.5, 2.8, 2.8, 2.8, 3.0, 2.9, '2020-05-31 07:18:24', '2020-05-31 07:18:24');
INSERT INTO `briefs` VALUES (11, '2020-05-21', 32, 380, 68, 50, 6.0, 2.1, 2.9, 2.9, 3.0, 3.0, 3.0, '2020-05-31 07:19:24', '2020-05-31 07:19:24');
INSERT INTO `briefs` VALUES (12, '2020-05-22', 32, 380, 61, 46, 5.9, 2.0, 3.0, 3.0, 3.0, 3.1, 3.1, '2020-05-31 07:20:13', '2020-05-31 07:20:13');
INSERT INTO `briefs` VALUES (13, '2020-05-23', 33, 380, 71, 47, 6.5, 2.5, 3.2, 3.2, 3.2, 3.3, 3.3, '2020-05-31 07:21:06', '2020-05-31 07:21:06');
INSERT INTO `briefs` VALUES (14, '2020-05-24', 31, 380, 58, 49, 6.3, 2.5, 3.2, 3.2, 3.2, 3.3, 3.3, '2020-05-31 07:21:44', '2020-05-31 07:21:44');

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
) ENGINE = InnoDB AUTO_INCREMENT = 43 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  `date_on` date NOT NULL,
  `date_off` date NOT NULL,
  `num_home` int(11) NOT NULL,
  `num_corp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `time_on` time(0) NULL DEFAULT NULL,
  `time_off` time(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jobs
-- ----------------------------
INSERT INTO `jobs` VALUES (5, 2, 4, 'Плановая', 'Холодная вода', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2019-08-10', '2019-08-10', 11, NULL, '2020-05-27 10:21:24', '2020-05-27 10:23:03', '10:00:00', '14:00:00');
INSERT INTO `jobs` VALUES (6, 2, 19, 'Плановая', 'Холодная вода', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-03-11', '2020-03-11', 9, NULL, '2020-05-27 10:22:21', '2020-05-29 20:00:53', '15:05:00', '17:43:00');
INSERT INTO `jobs` VALUES (7, 2, 29, 'Аварийная', 'Холодная вода', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2020-04-15', '2020-04-15', 7, NULL, '2020-05-27 10:22:55', '2020-05-27 10:22:55', '10:30:00', '12:00:00');

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bid_id` bigint(20) UNSIGNED NOT NULL,
  `date_log` date NOT NULL,
  `time_log` time(0) NOT NULL,
  `type_log` tinyint(4) NOT NULL,
  `solution` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `home_hw` tinyint(4) NOT NULL DEFAULT 0,
  `home_cw` tinyint(4) NOT NULL DEFAULT 0,
  `home_h` tinyint(4) NOT NULL DEFAULT 0,
  `crane_hw` tinyint(4) NOT NULL DEFAULT 0,
  `crane_cw` tinyint(4) NOT NULL DEFAULT 0,
  `crane_h` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `logs_bid_id_foreign`(`bid_id`) USING BTREE,
  CONSTRAINT `logs_bid_id_foreign` FOREIGN KEY (`bid_id`) REFERENCES `bids` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logs
-- ----------------------------
INSERT INTO `logs` VALUES (3, 5, '2020-05-11', '12:16:00', 0, 'Связка проводов', NULL, 0, 0, 0, 0, 0, 0, '2020-05-30 06:14:53', '2020-05-30 11:54:51');
INSERT INTO `logs` VALUES (5, 5, '2020-05-20', '10:00:00', 1, 'Заменили автомат', NULL, 0, 0, 0, 0, 0, 0, '2020-05-30 08:29:48', '2020-05-30 11:55:12');
INSERT INTO `logs` VALUES (6, 3, '2020-05-07', '14:37:00', 0, 'Тестовая запись', NULL, 1, 1, 0, 0, 0, 0, '2020-05-30 11:56:47', '2020-05-30 13:00:04');
INSERT INTO `logs` VALUES (7, 6, '2020-05-22', '09:25:00', 0, 'Проверка схемы подключения', NULL, 0, 0, 0, 0, 0, 0, '2020-06-02 04:13:15', '2020-06-02 04:13:26');
INSERT INTO `logs` VALUES (8, 6, '2020-05-22', '15:40:00', 1, 'Заменили вторичную проводку', NULL, 0, 0, 0, 0, 0, 0, '2020-06-02 04:14:43', '2020-06-02 04:14:43');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 60 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `migrations` VALUES (45, '2020_05_27_095730_alter_table_jobs', 5);
INSERT INTO `migrations` VALUES (49, '2020_05_27_161403_create_bids_table', 6);
INSERT INTO `migrations` VALUES (52, '2020_05_29_090209_create_logs_table', 7);
INSERT INTO `migrations` VALUES (53, '2020_05_30_180807_create_briefs_table', 8);
INSERT INTO `migrations` VALUES (54, '2020_06_03_050255_alter_table_branches', 9);
INSERT INTO `migrations` VALUES (56, '2020_06_04_045535_create_addresses_table', 10);
INSERT INTO `migrations` VALUES (58, '2020_06_04_065722_create_plots_table', 11);
INSERT INTO `migrations` VALUES (59, '2020_06_04_070402_create_address_plot_table', 11);

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
-- Table structure for plots
-- ----------------------------
DROP TABLE IF EXISTS `plots`;
CREATE TABLE `plots`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of plots
-- ----------------------------
INSERT INTO `plots` VALUES (5, 1, '2020-06-04 12:09:36', '2020-06-04 12:09:36');
INSERT INTO `plots` VALUES (6, 2, '2020-06-04 12:09:44', '2020-06-04 12:09:44');
INSERT INTO `plots` VALUES (7, 3, '2020-06-04 12:09:50', '2020-06-04 12:09:50');
INSERT INTO `plots` VALUES (8, 4, '2020-06-04 12:09:54', '2020-06-04 12:09:54');
INSERT INTO `plots` VALUES (9, 5, '2020-06-04 12:09:59', '2020-06-04 12:09:59');
INSERT INTO `plots` VALUES (10, 9, '2020-06-04 12:10:06', '2020-06-04 12:10:06');

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
INSERT INTO `promisers` VALUES (5, 19, 1, 22, NULL, 11, '2020-06-03', '2020-06-19', '2020-06-03 11:15:58', '2020-06-03 11:15:58');

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
INSERT INTO `role_user` VALUES (3, 12);
INSERT INTO `role_user` VALUES (8, 12);

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
) ENGINE = InnoDB AUTO_INCREMENT = 38 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `streets` VALUES (31, 'пер.Новая', '2020-05-22 18:42:33', '2020-06-04 05:16:54');
INSERT INTO `streets` VALUES (32, 'Носова', '2020-05-22 18:43:59', '2020-05-22 18:43:59');
INSERT INTO `streets` VALUES (33, 'Авиационная', '2020-05-22 18:44:08', '2020-05-22 18:44:08');
INSERT INTO `streets` VALUES (34, '7А мкр', '2020-06-04 05:11:58', '2020-06-04 05:11:58');
INSERT INTO `streets` VALUES (35, 'пер.Лесная', '2020-06-04 05:16:39', '2020-06-04 05:16:39');
INSERT INTO `streets` VALUES (36, 'Первомайская', '2020-06-04 05:17:52', '2020-06-04 05:17:52');
INSERT INTO `streets` VALUES (37, 'Сейфуллина', '2020-06-04 05:18:21', '2020-06-04 05:18:21');

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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@oas.ru', NULL, '$2y$10$2kJ10MtH68pwfCJNjM2O7uOXBs3vrdnkhM0wdNL4OFrF2GpPt4J7C', NULL, '2020-05-22 17:58:25', '2020-05-24 19:25:55');
INSERT INTO `users` VALUES (4, 'headhunter', 'headhunter@oas.ru', NULL, '$2y$10$ofadG64yIYQAV/Ud0bNo7OmsfSNUF3s6nb4VB3MHMgdWxcn95UieW', NULL, '2020-05-22 18:02:11', '2020-05-24 19:13:58');
INSERT INTO `users` VALUES (9, 'auditor', 'auditor@oas.ru', NULL, '$2y$10$A4seYpMqV/R6HTo1TcwpqOasEJlmKBcao063vOSBod7DVfnvNWoem', NULL, '2020-05-24 19:26:39', '2020-05-24 19:26:39');
INSERT INTO `users` VALUES (10, 'user', 'user@oas.ru', NULL, '$2y$10$6M0meACiwGIh1cPvitFwNur4PS/RacB0C1XEPviaRudhZlod3GtsS', NULL, '2020-05-24 19:31:16', '2020-05-24 19:31:16');
INSERT INTO `users` VALUES (11, 'operator_oas', 'operator_oas@oas.ru', NULL, '$2y$10$ZPvfIkVpVfFjxzNB.AArj.cBJFdtAXoKTlnm1zZQ/Vir/4ORI6sZi', NULL, '2020-05-25 15:00:20', '2020-05-25 15:00:20');
INSERT INTO `users` VALUES (12, 'operator_zheu', 'operator_zheu@oas.ru', NULL, '$2y$10$T9G1OxExAg2Qmjh5s1AvMOkxPVnoCelNS2jAtZBiwkaX6T3cqV2De', NULL, '2020-05-30 12:56:40', '2020-05-30 12:56:40');

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
INSERT INTO `workers` VALUES (1, 9, 6, 6, 'Иван', 'Иванов', 'Петрович', '5-55-40', '7-61-64', '+7-771-301-01-50', '2020-05-23 15:16:17', '2020-06-03 11:15:36', 4, NULL, 38);
INSERT INTO `workers` VALUES (2, 9, 9, 27, 'Анатолий', 'Сидоров', 'Анатольевич', '5-55-40', '6-10-33', '+7-776-878-10-10', '2020-05-23 15:27:02', '2020-05-25 15:15:36', 9, NULL, 12);
INSERT INTO `workers` VALUES (4, 9, 10, 15, 'Турсумбек', 'Оскаров', 'Жанболатович', '5-55-40', '6-22-21', '+7-776-301-27-27', '2020-05-23 15:35:02', '2020-05-24 14:12:27', 14, NULL, 25);
INSERT INTO `workers` VALUES (5, 9, 9, 14, 'Петр', 'Ким', 'Сергеевич', '4-44-44', '6-11-31', '+7-705-401-33-22', '2020-05-24 10:59:41', '2020-05-24 17:36:55', 9, NULL, 51);
INSERT INTO `workers` VALUES (6, 9, 9, 18, 'Роман', 'Кузнец', 'Николаевич', '5-11-12', '5-40-31', '+7-701-022-01-03', '2020-05-24 12:52:57', '2020-05-24 17:37:05', 2, NULL, 11);
INSERT INTO `workers` VALUES (7, 9, 10, 29, 'Иван', 'Абрамов', 'Андреевич', '5-01-03', '6-07-41', '+7-771-333-11-21', '2020-05-24 13:47:33', '2020-05-24 17:37:15', 11, NULL, 34);

SET FOREIGN_KEY_CHECKS = 1;
