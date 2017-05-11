/*
SQLyog Ultimate v12.09 (32 bit)
MySQL - 5.5.16 : Database - php7
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php7` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `php7`;

/*Table structure for table `tb_usuarios` */

DROP TABLE IF EXISTS `tb_usuarios`;

CREATE TABLE `tb_usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `deslogin` varchar(64) NOT NULL,
  `dessenha` varchar(256) NOT NULL,
  `dtcadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `tb_usuarios` */

insert  into `tb_usuarios`(`idusuario`,`deslogin`,`dessenha`,`dtcadastro`) values (3,'root','!@#$%','2017-05-08 14:17:52'),(4,'jose','123','2017-05-08 14:36:47'),(5,'aluno','@luno','2017-05-10 10:48:17'),(7,'professor','123456','2017-05-10 10:59:25');

/* Procedure structure for procedure `sp_usuarios_insert` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_usuarios_insert` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuarios_insert`(
  pdeslogin VARCHAR (64),
  pdessenha varchar (255)
)
BEGIN
  insert into `tb_usuarios` (`deslogin`, `dessenha`) 
  values
    (pdeslogin, pdessenha) ;
    
  SELECT 
    * 
  FROM
    tb_usuarios 
  WHERE `idusuario` = last_insert_id() ;
  
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
