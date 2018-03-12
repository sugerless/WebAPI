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
INSERT INTO freegatty_grade_record VALUES (1,'222015321210005',60,'�ߵ���ѧ��',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (2,'222015321210005',70,'�ߵ���ѧ��',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (3,'222015321210005',80,'�ߵ���ѧ��',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (4,'222015321210005',60,'�ߵ���ѧ��',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (5,'222015321210005',60,'��ɢ��ѧ',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (6,'222015321210005',60,'�ߵ���ѧ',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (7,'222015321210005',60,'�ߵ���ѧ',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (8,'222015321210005',60,'�ߵ���ѧ',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (9,'222015321210005',60,'�ߵ���ѧ',2017,1,2.0,3.0,'2018-01-01','2018-02-02');
INSERT INTO freegatty_grade_record VALUES (10,'222015321210005',60,'�ߵ���ѧ',2017,1,2.0,3.0,'2018-01-01','2018-02-02');


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
  `teacher` varchar(16) NOT NULL COMMENT '�ον�ʦ',
  `weeks` varchar(10) NOT NULL COMMENT '�ܴ�',
  `time` varchar(10) NOT NULL COMMENT '����',
  `week` varchar(7) NOT NULL COMMENT '���ڼ��Ͽ�',
  `campus` varchar(5) NOT NULL COMMENT 'У��',
  `classroom` varchar(10) NOT NULL COMMENT '����',
  `academic_title` varchar(10) NOT NULL COMMENT '����ְ��',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of freegatty_schedule
-- ----------------------------
INSERT INTO freegatty_schedule VALUES (1,'222015321210005','�ߵ���ѧ',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (2,'222015321210006','���ѧϰ',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (3,'222015321210007','����ѧϰ',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (4,'222015321210008','������',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (5,'222015321210009','linux����',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (6,'222015321210000','web����',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (7,'222015321210065','��Ϸ����',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (8,'222015321210005','�ߵ���ѧ',2017,1,'������','1-18','1-3','������','����','08-0202','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (9,'222015321210005','��Ϸ����',2017,1,'��С��','1-18','1-3','������','����','08-0101','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (10,'222015321210005','web����',2017,1,'���轥','1-18','1-3','������','����','08-0301','������','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (11,'222015321210005','�������',2017,1,'������','1-18','1-3','������','����','09-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (12,'222015321210005','linux����',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
INSERT INTO freegatty_schedule VALUES (13,'222015321210005','�ߵ���ѧ',2017,1,'������','1-18','1-3','������','����','08-0201','��ʦ','2018-01-01','2018-02-02');
