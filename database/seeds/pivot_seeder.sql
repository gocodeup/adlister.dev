CREATE TABLE IF NOT EXISTS types_pivot (
	database_id INT UNSIGNED NOT NULL,
	type_id INT UNSIGNED NOT NULL,
	FOREIGN KEY (database_id) REFERENCES pokedex (id),
	FOREIGN KEY (type_id) REFERENCES types (id)
);

INSERT types_pivot (database_id, type_id) 
 VALUES ('1', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('1', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('2', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('2', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('3', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('3', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('4', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('4', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('5', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('6', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('7', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('7', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('8', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('8', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('9', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('9', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('10', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('11', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('12', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('13', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('14', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('15', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('16', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('16', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('17', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('17', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('18', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('18', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('19', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('19', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('20', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('20', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('21', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('21', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('22', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('22', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('23', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('23', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('24', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('24', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('25', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('26', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('27', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('27', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('28', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('28', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('29', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('30', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('31', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('32', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('33', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('34', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('35', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('36', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('37', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('37', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('38', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('39', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('40', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('40', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('41', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('42', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('43', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('44', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('45', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('45', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('46', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('46', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('47', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('47', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('48', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('48', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('49', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('49', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('50', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('50', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('51', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('51', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('52', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('52', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('53', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('53', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('54', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('54', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('55', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('55', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('56', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('57', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('58', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('59', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('60', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('61', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('62', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('63', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('64', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('65', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('66', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('67', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('68', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('68', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('69', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('70', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('71', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('72', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('73', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('74', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('75', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('76', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('76', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('77', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('77', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('78', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('78', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('79', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('79', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('80', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('80', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('81', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('81', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('82', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('82', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('83', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('83', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('84', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('85', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('86', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('86', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('87', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('87', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('88', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('88', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('89', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('89', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('90', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('90', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('91', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('91', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('92', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('92', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('93', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('93', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('94', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('95', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('95', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('96', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('97', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('98', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('99', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('99', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('100', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('100', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('101', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('101', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('102', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('102', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('103', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('103', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('104', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('104', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('105', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('106', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('107', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('108', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('109', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('110', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('111', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('111', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('112', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('112', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('113', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('114', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('115', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('116', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('117', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('118', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('119', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('120', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('120', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('121', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('121', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('122', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('123', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('124', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('125', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('126', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('127', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('128', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('129', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('130', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('131', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('131', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('132', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('132', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('133', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('133', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('134', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('134', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('135', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('136', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('137', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('138', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('138', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('139', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('140', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('141', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('141', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('142', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('142', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('143', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('143', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('144', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('145', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('146', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('147', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('148', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('149', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('150', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('150', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('151', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('151', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('152', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('152', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('153', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('153', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('154', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('154', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('155', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('155', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('156', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('157', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('157', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('158', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('158', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('159', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('159', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('160', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('161', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('162', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('162', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('163', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('164', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('164', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('165', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('166', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('167', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('168', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('169', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('170', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('171', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('172', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('173', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('174', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('175', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('176', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('177', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('178', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('178', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('179', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('179', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('180', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('180', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('181', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('181', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('182', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('182', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('183', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('183', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('184', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('184', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('185', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('185', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('186', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('186', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('187', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('188', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('189', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('189', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('190', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('191', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('191', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('192', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('192', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('193', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('193', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('194', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('195', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('196', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('197', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('197', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('198', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('199', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('199', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('200', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('200', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('201', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('202', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('203', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('203', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('204', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('204', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('205', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('205', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('206', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('207', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('208', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('209', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('209', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('210', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('210', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('211', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('211', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('212', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('213', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('214', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('214', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('215', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('215', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('216', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('217', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('218', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('219', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('219', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('220', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('221', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('221', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('222', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('223', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('223', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('224', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('224', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('225', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('225', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('226', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('227', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('228', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('228', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('229', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('229', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('230', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('230', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('231', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('231', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('232', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('232', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('233', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('233', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('234', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('234', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('235', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('236', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('237', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('238', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('238', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('239', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('239', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('240', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('240', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('241', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('241', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('242', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('243', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('244', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('244', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('245', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('245', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('246', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('246', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('247', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('247', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('248', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('248', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('249', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('249', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('250', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('250', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('251', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('252', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('253', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('254', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('255', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('256', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('257', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('258', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('258', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('259', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('260', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('261', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('262', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('263', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('264', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('265', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('266', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('266', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('267', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('267', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('268', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('268', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('269', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('269', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('270', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('270', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('271', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('271', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('272', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('272', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('273', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('274', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('275', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('276', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('276', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('277', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('278', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('278', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('279', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('279', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('280', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('280', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('281', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('282', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('282', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('283', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('283', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('284', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('284', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('285', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('286', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('287', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('288', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('289', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('290', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('291', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('291', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('292', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('293', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('293', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('294', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('294', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('295', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('295', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('296', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('296', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('297', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('298', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('298', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('299', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('299', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('300', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('300', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('301', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('301', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('302', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('302', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('303', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('303', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('304', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('304', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('305', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('305', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('306', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('306', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('307', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('307', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('308', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('308', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('309', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('309', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('310', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('311', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('311', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('312', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('313', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('314', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('315', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('315', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('316', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('316', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('317', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('317', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('318', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('319', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('320', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('321', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('322', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('323', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('323', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('324', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('325', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('326', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('327', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('327', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('328', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('328', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('329', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('329', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('330', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('330', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('331', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('331', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('332', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('332', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('333', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('333', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('334', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('335', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('335', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('336', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('336', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('337', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('337', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('338', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('339', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('340', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('341', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('342', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('343', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('344', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('345', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('345', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('346', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('347', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('348', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('348', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('349', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('349', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('350', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('350', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('351', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('352', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('353', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('353', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('354', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('354', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('355', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('355', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('356', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('357', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('358', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('359', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('360', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('361', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('361', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('362', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('362', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('363', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('364', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('364', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('365', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('365', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('366', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('366', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('367', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('367', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('368', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('369', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('370', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('370', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('371', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('371', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('372', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('372', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('373', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('373', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('374', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('375', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('375', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('376', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('376', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('377', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('377', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('378', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('378', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('379', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('379', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('380', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('380', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('381', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('381', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('382', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('383', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('384', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('385', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('386', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('387', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('388', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('389', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('390', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('391', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('391', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('392', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('393', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('394', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('395', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('396', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('397', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('398', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('399', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('399', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('400', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('400', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('401', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('401', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('402', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('403', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('404', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('405', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('405', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('406', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('407', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('408', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('409', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('409', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('410', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('410', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('411', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('411', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('412', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('412', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('413', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('413', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('414', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('414', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('415', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('416', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('417', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('418', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('418', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('419', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('419', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('420', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('420', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('421', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('421', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('422', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('423', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('424', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('425', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('425', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('426', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('426', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('427', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('427', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('428', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('428', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('429', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('430', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('431', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('432', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('433', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('434', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('435', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('435', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('436', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('437', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('437', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('438', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('438', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('439', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('440', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('441', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('441', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('442', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('442', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('443', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('443', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('444', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('444', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('445', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('446', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('446', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('447', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('448', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('449', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('450', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('451', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('452', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('452', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('453', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('453', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('454', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('455', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('456', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('456', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('457', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('457', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('458', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('459', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('459', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('460', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('460', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('461', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('461', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('462', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('462', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('463', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('463', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('464', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('464', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('465', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('466', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('467', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('468', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('469', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('470', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('471', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('471', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('472', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('473', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('473', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('474', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('474', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('475', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('476', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('477', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('477', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('478', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('479', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('479', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('480', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('481', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('482', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('483', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('483', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('484', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('484', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('485', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('485', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('486', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('486', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('487', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('488', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('488', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('489', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('490', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('490', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('491', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('491', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('492', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('492', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('493', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('493', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('494', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('494', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('495', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('495', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('496', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('497', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('498', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('498', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('499', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('499', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('500', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('501', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('502', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('502', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('503', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('503', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('504', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('504', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('505', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('505', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('506', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('507', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('508', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('509', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('509', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('510', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('510', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('511', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('511', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('512', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('512', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('513', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('513', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('514', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('514', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('515', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('516', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('516', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('517', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('518', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('519', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('520', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('520', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('521', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('521', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('522', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('523', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('524', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('524', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('525', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('525', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('526', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('527', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('527', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('528', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('528', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('529', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('529', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('530', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('531', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('531', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('532', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('532', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('533', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('533', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('534', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('534', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('535', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('535', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('536', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('536', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('537', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('537', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('538', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('539', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('540', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('541', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('541', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('542', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('542', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('543', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('543', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('544', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('545', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('545', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('546', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('546', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('547', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('548', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('549', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('550', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('551', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('552', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('552', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('553', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('554', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('554', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('555', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('556', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('557', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('558', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('559', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('559', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('560', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('560', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('561', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('562', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('563', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('564', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('565', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('566', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('567', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('568', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('569', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('570', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('571', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('572', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('573', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('574', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('575', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('576', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('577', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('578', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('579', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('579', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('580', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('580', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('581', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('581', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('582', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('583', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('584', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('585', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('586', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('587', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('587', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('588', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('588', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('589', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('590', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('590', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('591', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('592', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('592', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('593', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('594', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('595', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('596', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('597', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('597', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('598', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('598', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('599', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('600', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('601', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('601', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('602', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('602', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('603', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('603', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('604', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('604', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('605', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('605', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('606', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('606', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('607', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('607', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('608', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('608', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('609', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('610', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('611', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('612', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('612', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('613', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('613', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('614', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('614', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('615', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('616', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('617', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('617', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('618', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('619', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('619', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('620', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('620', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('621', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('621', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('622', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('622', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('623', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('623', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('624', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('625', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('626', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('626', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('627', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('627', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('628', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('628', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('629', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('629', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('630', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('631', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('632', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('633', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('634', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('635', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('636', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('637', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('638', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('639', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('640', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('641', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('642', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('642', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('643', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('643', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('644', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('645', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('646', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('647', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('647', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('648', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('648', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('649', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('649', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('650', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('651', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('651', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('652', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('652', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('653', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('653', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('654', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('654', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('655', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('655', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('656', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('657', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('657', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('658', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('658', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('659', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('659', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('660', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('660', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('661', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('662', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('663', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('664', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('665', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('666', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('667', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('668', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('669', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('669', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('670', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('670', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('671', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('671', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('672', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('673', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('674', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('675', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('676', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('677', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('678', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('679', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('680', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('680', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('681', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('682', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('683', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('684', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('684', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('685', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('685', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('686', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('686', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('687', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('687', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('688', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('689', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('689', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('690', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('690', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('691', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('691', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('692', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('692', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('693', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('694', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('694', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('695', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('695', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('696', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('696', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('697', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('697', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('698', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('698', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('699', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('699', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('700', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('700', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('701', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('701', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('702', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('702', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('703', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('704', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('705', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('705', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('706', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('706', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('707', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('707', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('708', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('708', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('709', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('709', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('710', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('710', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('711', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('711', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('712', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('712', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('713', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('713', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('714', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('714', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('715', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('715', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('716', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('716', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('717', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('717', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('718', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('718', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('719', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('720', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('721', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('721', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('722', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('723', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('724', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('724', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('725', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('726', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('727', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('727', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('728', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('729', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('729', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('730', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('730', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('731', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('731', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('732', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('732', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('733', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('734', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('735', '13'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('735', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('736', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('736', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('737', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('737', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('738', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('739', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('740', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('741', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('742', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('743', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('744', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('744', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('745', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('746', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('747', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('748', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('749', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('749', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('750', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('750', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('751', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('751', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('752', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('752', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('753', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('754', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('755', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('756', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('757', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('757', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('758', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('758', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('759', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('759', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('760', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('760', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('761', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('761', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('762', '7'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('762', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('763', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('764', '4'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('765', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('765', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('766', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('766', '1'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('767', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('767', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('768', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('768', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('769', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('769', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('770', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('770', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('771', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('772', '3'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('772', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('773', '8'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('773', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('774', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('774', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('775', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('776', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('777', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('778', '17'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('778', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('779', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('779', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('780', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('780', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('781', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('781', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('782', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('782', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('783', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('783', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('784', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('784', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('785', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('785', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('786', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('786', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('787', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('787', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('788', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('788', '6'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('789', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('790', '12'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('791', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('791', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('792', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('792', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('793', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('794', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('794', '5'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('795', '14'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('795', '9'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('796', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('796', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('797', '11'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('797', '18'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('798', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('798', '15'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('799', '10'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('799', '16'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('800', '2'); 
INSERT types_pivot (database_id, type_id) 
 VALUES ('800', '4'); 
