SET FOREIGN_KEY_CHECKS=0;
use freegatty;
-- ----------------------------
-- Table structure for freegatty_grade_record
-- ----------------------------
DROP TABLE IF EXISTS freegatty_grade_record;
CREATE TABLE freegatty_grade_record (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(16) NOT NULL,
  `score` tinyint(3) DEFAULT NULL,
  `lesson_name` varchar(45) NOT NULL,
  `academic_year` smallint(5) NOT NULL,
  `term` tinyint(3) NOT NULL,
  `grade_point` tinyint(3) NOT NULL,
  `credit` decimal(2,1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of freegatty_grade_record
-- ----------------------------
INSERT INTO freegatty_grade_record VALUES (1,'222015321210005',60,'高等数学上',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (2,'222015321210005',70,'高等数学下',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (3,'222015321210005',80,'高等数学左',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (4,'222015321210005',60,'高等数学右',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (5,'222015321210005',60,'离散数学',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (6,'222015321210005',60,'高等数学',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (7,'222015321210005',60,'高等数学',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (8,'222015321210005',60,'高等数学',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (9,'222015321210005',60,'高等数学',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (10,'222015321210005',60,'高等数学',2017,1,2.0,3.0,'2018-01-01','2018-02-02');


-- ----------------------------
-- Table structure for freegatty_schedule
-- ----------------------------
DROP TABLE IF EXISTS freegatty_schedule;
CREATE TABLE freegatty_schedule (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(16) NOT NULL,
  `lesson_name` varchar(45) NOT NULL,
  `academic_year` smallint(5) NOT NULL,
  `term` tinyint(3) NOT NULL,
  `teacher` varchar(16) NOT NULL COMMENT '任课教师',
  `weeks` varchar(10) NOT NULL COMMENT '周次',
  `time` varchar(10) NOT NULL COMMENT '节数',
  `week` varchar(7) NOT NULL COMMENT '星期几上课',
  `campus` varchar(5) NOT NULL COMMENT '校区',
  `classroom` varchar(10) NOT NULL COMMENT '教室',
  `academic_title` varchar(10) NOT NULL COMMENT '教室职称',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of freegatty_schedule
-- ----------------------------
INSERT INTO freegatty_schedule VALUES (1,'222015321210005','高等数学',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (2,'222015321210006','深度学习',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (3,'222015321210007','机器学习',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (4,'222015321210008','大数据',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (5,'222015321210009','linux开发',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (6,'222015321210000','web开发',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (7,'222015321210065','游戏开发',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (8,'222015321210005','高等数学',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0202','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (9,'222015321210005','游戏开发',2017,1,'曾小贤','1-18','1-3','星期四','北区','08-0101','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (10,'222015321210005','web开发',2017,1,'方鸿渐','1-18','1-3','星期五','北区','08-0301','副教授','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (11,'222015321210005','软件工程',2017,1,'方世玉','1-18','1-3','星期六','北区','09-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (12,'222015321210005','linux开发',2017,1,'方世玉','1-18','1-3','星期天','南区','08-0201','讲师','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (13,'222015321210005','高等数学',2017,1,'方世玉','1-18','1-3','星期三','北区','08-0201','讲师','2018-01-01','2018-02-02');
