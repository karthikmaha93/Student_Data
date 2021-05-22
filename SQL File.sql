/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 10.1.38-MariaDB : Database - school_database
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`school_database` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `school_database`;

/*Table structure for table `school_result` */

DROP TABLE IF EXISTS `school_result`;

CREATE TABLE `school_result` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_roll_no` int(11) DEFAULT NULL,
  `student_subject` varchar(50) DEFAULT NULL,
  `student_total_mark` int(11) DEFAULT NULL,
  `student_mark_obtain` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `school_result` */

insert  into `school_result`(`student_id`,`student_roll_no`,`student_subject`,`student_total_mark`,`student_mark_obtain`) values 
(11,2001,'maths',100,100),
(12,1002,'maths\r\n',100,85),
(13,1003,'maths',100,60),
(14,3004,'tamil',100,49),
(15,1005,'maths\r\n',100,40),
(16,1001,'chem',100,100),
(17,3000,'Mech_Paper',100,0);

/*Table structure for table `school_student` */

DROP TABLE IF EXISTS `school_student`;

CREATE TABLE `school_student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_roll_no` int(11) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `student_email` varchar(50) DEFAULT NULL,
  `student_mobile` varchar(10) DEFAULT NULL,
  `student_dept` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `school_student` */

insert  into `school_student`(`student_id`,`student_roll_no`,`student_name`,`student_email`,`student_mobile`,`student_dept`) values 
(11,2001,'maha\r\n','maha@gmail.com\r\n','1234567890','CSE\r\n'),
(12,1002,'karthik\r\n','karthik@gmail.com\r\n','1234567890','IT\r\n'),
(13,1003,'vishnu\r\n','vishnu@gmail.com\r\n','1234567890','mech\r\n'),
(14,3004,'kalai\r\n','kalai@gmail.com\r\n','1234567890','civil\r\n'),
(15,1005,'mahesh\r\n','mahesh@gmail.com\r\n','1234567890','civil\r\n'),
(16,1001,'h','g','78','as'),
(17,3000,'Vijay','Vj@gmail.com','1020020030','ECE');

/* Procedure structure for procedure `get_student_details_view` */

/*!50003 DROP PROCEDURE IF EXISTS  `get_student_details_view` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `get_student_details_view`()
BEGIN
	SELECT a.student_roll_no,a.student_name,a.student_email,a.student_mobile,a.student_dept,b.student_subject,
	b.student_mark_obtain,a.student_id as stdid,b.student_id as resid FROM `school_student` a JOIN `school_result` b
	ON a.student_id=b.student_id;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `insert_std_records` */

/*!50003 DROP PROCEDURE IF EXISTS  `insert_std_records` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_std_records`(
in rollno_in int(11),
IN std_name_in varchar(50),
IN email_in varchar(50),
IN mobile_in INT(10),
IN dept_in varchar(50),
IN subject_in varchar(50),
IN mark_opt_in int(11)
)
BEGIN
	INSERT INTO `school_student`(student_roll_no,student_name,student_email,student_mobile,student_dept)
	VALUES
	(rollno_in,std_name_in,email_in,mobile_in,dept_in);
	
	INSERT INTO `school_result`(student_roll_no,student_subject,student_total_mark,student_mark_obtain)
	VALUES
	(rollno_in,subject_in,100,mark_opt_in);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `update_tudent_details` */

/*!50003 DROP PROCEDURE IF EXISTS  `update_tudent_details` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `update_tudent_details`(
IN RollNo_in INT(11),
IN Subject_in VARCHAR(50),
IN MarkObtain_in INT(11),
IN STDID_in INT(11),
IN RESID_in int(11)
)
BEGIN
	UPDATE `school_result` SET student_roll_no=RollNo_in,student_subject=Subject_in,student_mark_obtain=MarkObtain_in WHERE  student_id=STDID_in;
	UPDATE `school_student` SET student_roll_no=RollNo_in WHERE  student_id=RESID_in;
	END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
