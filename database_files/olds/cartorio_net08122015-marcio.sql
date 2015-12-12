-- MySQL dump 10.13  Distrib 5.6.27, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: cartorio_net
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu0.15.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `appear` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `controller` varchar(25) NOT NULL,
  `controller_label` varchar(50) DEFAULT NULL,
  `action` varchar(25) NOT NULL,
  `action_label` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `appear` (`appear`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` VALUES (1,NULL,1,'Users','Usu&aacute;rios','index','Todos'),(2,NULL,0,'Users','Usu&aacute;rios','add','Criar Novo'),(3,NULL,0,'Users','Usu&aacute;rios','edit','Editar'),(4,NULL,0,'Users','Usu&aacute;rios','delete','Excluir'),(5,1,1,'Profiles','Perf&iacute;s de Usu&aacute;rio','index','Todos'),(6,NULL,0,'Profiles','Perf&iacute;s de Usu&aacute;rio','add','Criar Novo'),(7,NULL,0,'Profiles','Perf&iacute;s de Usu&aacute;rio','edit','Editar'),(8,NULL,0,'Profiles','Perf&iacute;s de Usu&aacute;rio','delete','Excluir'),(9,NULL,0,'Profiles','Perf&iacute;s de Usu&aacute;rio','view','Visualizar'),(10,NULL,0,'Users','Usu&aacute;rios','view','Visualizar'),(11,NULL,1,'Repositories','Reposit&oacute;rios','index','Todos'),(12,NULL,0,'Repositories','Reposit&oacute;rios','add','Enviar'),(13,NULL,0,'Settings','Configura&ccedil;&otilde;es','index','Configura&ccedil;&atilde;o'),(14,NULL,1,'Sites','Sites','page_index','Todas'),(15,NULL,0,'Sites','Sites','page_add','Criar Nova'),(16,NULL,0,'Sites','Sites','page_edit','Editar'),(17,NULL,1,'SolicitacaoServicos','Solicita&ccedil;&otilde;es de Servi&ccedil;os','servicos','Todas'),(18,NULL,0,'SolicitacaoServicos','Solicita&ccedil;&otilde;es de Servi&ccedil;os','solicitar_servico','Solicitar Servi&ccedil;o'),(19,NULL,0,'SolicitacaoServicos','Solicita&ccedil;&otilde;es de Servi&ccedil;os','view_solicitacao','View');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areas_profiles`
--

DROP TABLE IF EXISTS `areas_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas_profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(11) unsigned NOT NULL,
  `profile_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `area_profile` (`area_id`,`profile_id`),
  KEY `profile_area_idx` (`profile_id`),
  CONSTRAINT `area_area_profile` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `profile_area` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas_profiles`
--

LOCK TABLES `areas_profiles` WRITE;
/*!40000 ALTER TABLE `areas_profiles` DISABLE KEYS */;
INSERT INTO `areas_profiles` VALUES (71,1,1),(25,1,2),(72,2,1),(26,2,2),(73,3,1),(27,3,2),(74,4,1),(28,4,2),(76,5,1),(77,6,1),(78,7,1),(79,8,1),(80,9,1),(75,10,1),(29,10,2),(81,11,1),(82,12,1),(83,13,1),(84,14,1),(85,15,1),(86,16,1),(87,17,1),(88,18,1),(89,19,1);
/*!40000 ALTER TABLE `areas_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dados_documento`
--

DROP TABLE IF EXISTS `dados_documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dados_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `solicitacao_servico_id` int(11) NOT NULL,
  `tipo_servico_id` int(11) NOT NULL,
  `regiao` varchar(50) DEFAULT NULL,
  `observacao` text,
  `endereco` text,
  `bairro` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `edificio` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `cartorio` varchar(45) DEFAULT NULL,
  `numero_contrato` varchar(45) DEFAULT NULL,
  `finalidade` varchar(45) DEFAULT NULL,
  `folha` varchar(45) DEFAULT NULL,
  `registro` varchar(45) DEFAULT NULL,
  `livro` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_dados_documento_tipos_servicos1_idx` (`tipo_servico_id`),
  KEY `fk_dados_documento_solicitacoes_servicos1_idx` (`solicitacao_servico_id`),
  CONSTRAINT `fk_dados_documento_solicitacoes_servicos1` FOREIGN KEY (`solicitacao_servico_id`) REFERENCES `solicitacoes_servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_dados_documento_tipos_servicos1` FOREIGN KEY (`tipo_servico_id`) REFERENCES `tipos_servicos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dados_documento`
--

LOCK TABLES `dados_documento` WRITE;
/*!40000 ALTER TABLE `dados_documento` DISABLE KEYS */;
INSERT INTO `dados_documento` VALUES (15,15,1,NULL,'','Alameda 18','ParanÃ£ IV',NULL,NULL,'65137-000','Brisa Mar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,16,1,NULL,'','Alameda 18 Quadra 28','ParanÃ£ IV',NULL,NULL,'65137-000','Brisa Mar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,17,1,NULL,'','Alameda 18','ParanÃ£ IV',NULL,NULL,'65137-000','Brisa Mar',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `dados_documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(200) NOT NULL,
  `created` text NOT NULL,
  `modified` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','{\"bloco01\":[{\"title\":\"Escolha o documento\",\"content\":\"<p>Navegue pelo menu acima e encontre o documento que precisa. Voc&ecirc; Leia o termo de uso com aten&ccedil;&atilde;o e, estando de acordo, preencha os dados requeridos referente ao solicitante.<\\/p>\\r\\n\"},{\"title\":\"Escolha o endere\\u00e7o de entrega\",\"content\":\"<p>Selecione o endere&ccedil;o de entrega dos documentos, pois isso influencia no pre&ccedil;o do mesmo. Confirme o endere&ccedil;o de entrega e clique em confirmar.<\\/p>\\r\\n\"},{\"title\":\"Informe os dados\",\"content\":\"<p>Informe os dados para emiss&atilde;o do documento\\/certid&atilde;o.Ap&oacute;s esse passo voc&ecirc; ter&aacute; a op&ccedil;&atilde;o de:&nbsp;Solicitar outro documento\\/certid&atilde;o, &Eacute; equivalente a voltar ao primeiro passo;&nbsp;Confirmar os dados e finalizar seu pedido.<\\/p>\\r\\n\"},{\"title\":\"Aguarde or\\u00e7amento\",\"content\":\"<p>Ap&oacute;s os envio das informa&ccedil;&otilde;es aguarde o contato da nossa equipe com o or&ccedil;amento.&nbsp;<\\/p>\\r\\n\"}],\"bloco02\":[{\"title\":\"Certid\\u00f5es e documentos em geral\",\"content\":\"<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.<\\/p>\\r\\n\"},{\"title\":\"Busca de Bens\",\"content\":\"<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.<\\/p>\\r\\n\"},{\"title\":\"Servi\\u00e7o personalizado para advogados\",\"content\":\"<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.<\\/p>\\r\\n\"},{\"title\":\"Certid\\u00f5es\",\"content\":\"<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.<\\/p>\\r\\n\"}],\"bloco03\":[{\"title\":\"Empresa\",\"content\":\"<p><img alt=\\\"\\\" src=\\\"http:\\/\\/jornalocapixaba.com.br\\/colunas\\/wp-content\\/uploads\\/2011\\/09\\/dreamstime_4250761.jpg\\\" style=\\\"height:198px; width:300px\\\" \\/><\\/p>\\r\\n\\r\\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.<\\/p>\\r\\n\"},{\"title\":\"Solu\\u00e7\\u00e3o para voc\\u00ea\",\"content\":\"<p><img alt=\\\"\\\" src=\\\"http:\\/\\/www.sanposs.com.br\\/imagens\\/servicos.jpg\\\" style=\\\"height:194px; width:300px\\\" \\/><\\/p>\\r\\n\\r\\n<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.<\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li>ncididunt ut labore et dolor.<\\/li>\\r\\n\\t<li>incididunt ut labore et dolor.<\\/li>\\r\\n\\t<li>incididunt ut labore et dolor.<\\/li>\\r\\n\\t<li>incididunt ut labore et dolor.<\\/li>\\r\\n<\\/ul>\\r\\n\"}]}','','2015-12-04 12:00:00','1449448049'),(2,'Institucional ','<p><img alt=\"\" src=\"http://www.cabtec.com.br/novosite/services/wp-content/uploads/sites/3/2013/01/Rodap%C3%A9-Services-Comit%C3%AAs-Executivos-325x200.jpg\" style=\"float:left; height:246px; margin:5px 10px; width:400px\" />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus velit nisi, mollis in nibh quis, fermentum tristique metus. Donec non fringilla dolor, id cursus dui. Nullam lacus justo, hendrerit id magna at, suscipit tempus massa. Maecenas consequat feugiat quam non suscipit. Phasellus in velit sit amet orci vehicula posuere consequat nec ligula. Nam eget ante sed turpis facilisis laoreet in sit amet orci. Nunc aliquet, diam vel scelerisque sodales, leo arcu pretium turpis, sollicitudin ultricies ipsum diam in dui. Pellentesque suscipit nulla vitae porta consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur finibus ultricies tellus, et commodo velit cursus sed. Mauris vitae metus metus. Vivamus vulputate lorem lorem, vitae efficitur nunc accumsan id. Nam lacinia a augue a suscipit. Sed quis eleifend orci. Praesent convallis nec nunc molestie facilisis. Curabitur metus sem, venenatis sed erat eu, iaculis malesuada felis.</p>\r\n\r\n<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin luctus sapien eu condimentum congue. Phasellus ullamcorper augue nec sem eleifend imperdiet. Ut sed diam laoreet nisi commodo vulputate ut sit amet nulla. Morbi laoreet tortor at pharetra faucibus. Aliquam erat volutpat. Mauris scelerisque finibus odio, nec pretium nisi vehicula varius. Sed et fringilla nunc. Cras consectetur placerat dictum.</p>\r\n\r\n<p>Nullam congue enim leo. Sed id dui et mi ullamcorper eleifend. Sed dignissim leo turpis, eget porttitor eros pellentesque vel. Duis scelerisque mauris nec neque gravida, eu tincidunt elit ullamcorper. In ultricies accumsan velit vitae ornare. Nam sed erat molestie, tempus metus et, dapibus mi. Proin venenatis dolor et orci pharetra ultrices. Sed eleifend id dui vel dictum. Morbi vel magna nec massa pulvinar consectetur. Integer tellus erat, pharetra feugiat semper eu, suscipit sed est. Duis rutrum aliquet condimentum. Nullam nec mauris sed mi mollis ultrices a id massa.</p>\r\n\r\n<p>Nullam sagittis, elit sed placerat venenatis, massa libero tristique tellus, at accumsan libero magna porta mauris. Vestibulum ullamcorper molestie quam, a ultrices lectus rutrum pretium. Nunc mollis massa quis leo auctor porta. Aliquam sed elementum turpis. Phasellus lacinia nibh a sem lobortis consectetur a et arcu. Vestibulum non nulla nec enim tincidunt interdum. Nulla porta fermentum massa, ac iaculis metus condimentum vitae. Nullam ligula nibh, pulvinar eu congue faucibus, ultricies at orci. Suspendisse tempus, nisl id finibus hendrerit, risus ex accumsan sapien, sit amet cursus ante magna eu augue. Suspendisse sed volutpat magna. Praesent orci augue, sagittis in turpis in, rhoncus aliquet velit. Proin pulvinar justo id dolor fermentum dictum vitae quis tortor. Vestibulum enim sapien, pulvinar ac porttitor vel, vestibulum vitae nisi. Fusce maximus augue dolor, vel facilisis magna accumsan vitae. Curabitur sodales mi nec magna ornare porttitor.</p>\r\n\r\n<p>Phasellus eu massa varius, feugiat ante non, faucibus metus. Morbi purus erat, accumsan quis varius at, congue auctor nunc. Cras ut pulvinar nisi, vel fringilla ex. Donec aliquam erat ut ligula porttitor gravida. Cras luctus, nulla vitae tincidunt bibendum, nunc est pellentesque augue, non ornare magna dui suscipit metus. Suspendisse ut mollis elit. Aliquam suscipit tortor a felis fermentum vestibulum. Donec sagittis ligula turpis, eu consectetur urna congue eget.</p>\r\n\r\n<p>Cras pretium magna sed diam iaculis auctor. Suspendisse condimentum odio at dolor sodales, sed tincidunt augue scelerisque. Proin tincidunt nisl quis diam ullamcorper, eget scelerisque massa semper. Donec dictum aliquet justo, non sagittis nunc tincidunt id. Curabitur ac molestie nulla. Quisque eros neque, lobortis a dignissim vel, aliquam semper massa. Praesent pulvinar mauris ac eros sollicitudin, nec tincidunt ante elementum. Maecenas eget ultrices nunc. Donec posuere tempor diam, nec vehicula nisl finibus sollicitudin. Ut pharetra, odio at ultricies sollicitudin, diam felis molestie massa, at rutrum urna neque et magna. Cras id gravida orci. Pellentesque.</p>\r\n','Institucional CartÃ³rioNet empresa de logÃ­stica e distribuiÃ§Ã£o de documentos. ','2015-12-04 12:00:00','1449588688');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Admin','0000-00-00 00:00:00','2015-12-06 04:09:32'),(2,'Perfil Teste','2012-03-25 00:21:45','2012-04-02 17:09:38');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repositories`
--

DROP TABLE IF EXISTS `repositories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repositories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repositories`
--

LOCK TABLES `repositories` WRITE;
/*!40000 ALTER TABLE `repositories` DISABLE KEYS */;
INSERT INTO `repositories` VALUES (6,'img','e7d6008ebb8583459ef17f59f7839706.jpg','jpg',46568,'2015-12-05 00:19:47','2015-12-05 00:19:47'),(7,'page-1_img01','c901b3b5e34f8346f9467af715f3d0d2.jpg','jpg',36692,'2015-12-06 10:08:04','2015-12-06 10:08:04');
/*!40000 ALTER TABLE `repositories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(100) DEFAULT NULL,
  `site_title` varchar(150) DEFAULT NULL,
  `site_description` varchar(150) DEFAULT NULL,
  `wellcome_text` text,
  `email_admin` varchar(50) DEFAULT NULL,
  `email_contact` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `cell_phone` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'CartÃ³rioNet','LogÃ­stica e distribuiÃ§Ã£o nacional de documentos','LogÃ­stica e distribuiÃ§Ã£o nacional de documentos','<h1><strong>Seja bem-vinda!</strong></h1>\r\n\r\n<h1>&nbsp;</h1>\r\n','domingos.adj@gmail.com','cordel@cordel.com','(98) 3237-2222','(98) 3237-2222','fb.me/dowingows','twitter.me/dowingows','2015-12-03 02:59:11','2015-12-08 13:37:55');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitacoes_servicos`
--

DROP TABLE IF EXISTS `solicitacoes_servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitacoes_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_solicitante` varchar(50) NOT NULL,
  `cpf_cnpj_solicitante` varchar(20) NOT NULL,
  `rg_solicitante` varchar(15) DEFAULT NULL,
  `telefone_1_solicitante` varchar(20) NOT NULL,
  `telefone_2_solicitante` varchar(20) DEFAULT NULL,
  `ramal` varchar(30) DEFAULT NULL,
  `celular_solicitante` varchar(20) DEFAULT NULL,
  `email_solicitante` varchar(50) NOT NULL,
  `endereco_entrega` varchar(100) NOT NULL,
  `numero_endereco_entrega` int(11) DEFAULT NULL,
  `bairro_entrega` varchar(30) DEFAULT NULL,
  `cep_entrega` varchar(10) NOT NULL,
  `estado_entrega` varchar(45) NOT NULL,
  `cidade_entrega` varchar(45) NOT NULL,
  `email_send` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitacoes_servicos`
--

LOCK TABLES `solicitacoes_servicos` WRITE;
/*!40000 ALTER TABLE `solicitacoes_servicos` DISABLE KEYS */;
INSERT INTO `solicitacoes_servicos` VALUES (15,'Domingos','1231231231231','123123123123','(98) 3222-2222','',NULL,NULL,'domingos.ad@gmail.com','Alameda 18 Quadra 28 Casa 13',NULL,'ParanÃ£ IV','65137 000','','',0,'2015-12-06 03:14:13','2015-12-06 03:14:13'),(16,'Rosiene Baltzar de Carvalho','123123123','123123','12312312','',NULL,NULL,'rosie@nuvemsi.com','Alameda 18 Quadra 28 Casa 13',NULL,'','65137 000','','',0,'2015-12-06 03:21:58','2015-12-06 03:21:58'),(17,'Paulo Ricardo','12312312','12312312312','123123213','',NULL,NULL,'prdias@gmail.com','Alameda 18 Quadra 28 Casa 13',NULL,'ParanÃ£ IV','65137 000','','',1,'2015-12-06 03:25:52','2015-12-06 03:25:52');
/*!40000 ALTER TABLE `solicitacoes_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_servicos`
--

DROP TABLE IF EXISTS `tipos_servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` text,
  `fields` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_servicos`
--

LOCK TABLES `tipos_servicos` WRITE;
/*!40000 ALTER TABLE `tipos_servicos` DISABLE KEYS */;
INSERT INTO `tipos_servicos` VALUES (1,'2&ordm; VIA DE ATA DE CONDOMINIO',NULL,'endereco,bairro,estado,cidade,cep,edificio'),(2,'2&#186; VIA DE CONTRATO',NULL,'nome,rg,cpf,cnpj,estado,cidade,cartorio,numero_contrato'),(3,'2&#186; VIA DE PROCURA&Ccedil;&Atilde;O',NULL,''),(4,'2&ordm; VIA DE PROCURA&Ccedil;',NULL,''),(5,'2&#186; VIA RNE',NULL,''),(6,'ADITIVO DE CONTRATO PARA REGIS',NULL,''),(7,'ANTECEDENTES CRIMINAIS',NULL,''),(8,'AVERBA&Ccedil;&Atilde;O - DIV&',NULL,''),(9,'AVERBA&#199;&#195;O - RETIFICA',NULL,''),(10,'AVERBA&Ccedil;&Atilde;O NA MAT',NULL,''),(11,'BAIXA HIPOT&Eacute;CA',NULL,''),(12,'BATISMO',NULL,''),(13,'BREVE RELATO COMPLETO',NULL,''),(14,'BREVE RELATO E FOTOC&Oacute;PI',NULL,''),(15,'BREVE RELATO SIMPLIFICADO',NULL,''),(16,'BUSCA CAPITANIA DOS PORTOS',NULL,''),(17,'BUSCA DE PARTICIPA&Ccedil;&Ati',NULL,''),(18,'BUSCA DE TESTAMENTO',NULL,''),(19,'CANCELAMENTO',NULL,''),(20,'CANCELAMENTO DE PROTESTO',NULL,''),(21,'CASAMENTO',NULL,''),(49,'CERTID&Atilde;O DISTRIBUI&Cced',NULL,''),(50,'CERTID&Atilde;O DE FAL&Ecirc;N',NULL,''),(51,'CERTID&Atilde;O DE IM&Oacute;V',NULL,''),(52,'CERTID&Atilde;O DE IM&Oacute;V',NULL,''),(53,'CERTID&Atilde;O DE MATR&Iacute',NULL,''),(54,'CERTID&Atilde;O DE MATR&Iacute',NULL,''),(55,'CERTID&Atilde;O DE MATR&Iacute',NULL,''),(56,'CITA&Ccedil;&Otilde;ES DE A&Cc',NULL,''),(57,'CERTID&Atilde;O DE NEGATIVA DO',NULL,''),(58,'CERTID&Atilde;O DE PACTO ANTEN',NULL,''),(59,'CERTID&Atilde;O DE TRANSCRI&Cc',NULL,''),(60,'CERTID&Atilde;O TUTELA E CURAT',NULL,''),(61,'CERTID&Atilde;O QUINZEN&Aacute',NULL,''),(62,'CERTID&Atilde;O QUINZEN&Aacute',NULL,''),(63,'CERTID&Atilde;O QUINZEN&Aacute',NULL,''),(64,'CITA&Ccedil;&Otilde;ES DE A&Cc',NULL,''),(65,'CERTID&Atilde;O TRINTEN&Aacute',NULL,''),(66,'CERTID&Atilde;O TRINTEN&Aacute',NULL,''),(67,'CERTID&Atilde;O TRINTEN&Aacute',NULL,''),(68,'CITA&Ccedil;&Otilde;ES DE A&Cc',NULL,''),(69,'CERTID&Atilde;O VINTEN&Aacute;',NULL,''),(70,'CERTID&Atilde;O VINTEN&Aacute;',NULL,''),(71,'CERTID&Atilde;O VINTEN&Aacute;',NULL,''),(72,'A&Ccedil;&Otilde;ES REIPERSECU',NULL,''),(73,'CND INSS',NULL,''),(74,'CND RECEITA FEDERAL',NULL,''),(75,'CONS&Oacute;CIO RODOBENS',NULL,''),(76,'CONSULTA RESTRI&Ccedil;&Atilde',NULL,''),(77,'C&Oacute;PIA DE ESCRITURA OU T',NULL,''),(78,'C&Oacute;PIA DO CONTRATO SOCIA',NULL,''),(79,'C&Oacute;PIA DO INSTRUMENTO DE',NULL,''),(80,'CR&Eacute;DITO IMOBILI&Aacute;',NULL,''),(81,'DECLARA&Ccedil;&Atilde;O DE HO',NULL,''),(82,'DESARQUIVAMENTO DE PROCESSO',NULL,''),(83,'DISTRIBUI&Ccedil;&Otilde;ES DE',NULL,''),(84,'DISTRIBUIDOR C&Iacute;VEL',NULL,''),(85,'DOCUMENTOS MICROFILMADOS',NULL,''),(86,'EXECU&Ccedil;&Atilde;O CRIMINA',NULL,''),(87,'EXECUTIVOS FISCAIS',NULL,''),(88,'FGTS',NULL,''),(89,'HIST&Oacute;RICO ESCOLAR',NULL,''),(90,'INTEIRO TEOR-CASAMENTO',NULL,''),(91,'INTEIRO TEOR-NASCIMENTO',NULL,''),(92,'INTEIRO TEOR-&Oacute;BITO',NULL,''),(93,'ITR-IMPOSTO TERRITORIAL RURAL',NULL,''),(94,'JUSTI&Ccedil;A DO TRABALHO',NULL,''),(95,'JUSTI&Ccedil;A FEDERAL',NULL,''),(96,'JUSTI&Ccedil;A MILITAR ESTADUA',NULL,''),(97,'JUSTI&Ccedil;A MILITAR FEDERAL',NULL,''),(98,'LAVRATURA E REGISTRO DE ESCRIT',NULL,''),(99,'LEGALIZA&Ccedil;&Atilde;O NO C',NULL,''),(100,'LEVANTAMENTO DE D&Eacute;BITOS',NULL,''),(101,'LICALIZA&Ccedil;&Atilde;O DE P',NULL,''),(102,'MINIST&Eacute;RIO P&Uacute;BLI',NULL,''),(103,'MULTA N&Atilde;O',NULL,''),(104,'NASCIMENTO',NULL,''),(105,'NEGATIVA DE NATURALIZA&Ccedil;',NULL,''),(106,'NEGATIVA DE PROTESTO',NULL,''),(107,'NOTIFICA&Ccedil;&Atilde;O',NULL,''),(108,'NOTIFICA&Ccedil;&Atilde;O CRI',NULL,''),(109,'&Oacute;BITO',NULL,''),(110,'OBJETO E P&Eacute;',NULL,''),(111,'OUTROS SERVI&Ccedil;OS',NULL,''),(112,'PESQUISA DE IM&Oacute;VEIS-ATR',NULL,''),(113,'PESQUISA DE IM&Oacute;VEIS-ATR',NULL,''),(114,'PROTESTO DE CHEQUES',NULL,''),(115,'PROTESTO DE CONTRATO',NULL,''),(116,'PROTESTO DE NOTAS PROMISS&Oacu',NULL,''),(117,'QUITA&Ccedil;&Atilde;O FISCAL ',NULL,''),(118,'REGISTRO DE CONDOM&Iacute;NIO',NULL,''),(119,'REGISTRO DE CONTRATO-CDT',NULL,''),(120,'REGISTRO DE CONTRATO-CRI',NULL,''),(121,'REGISTRO DE INTEGRALIZA&Ccedil',NULL,''),(122,'REGISTRO DE PARTILHA',NULL,''),(123,'REGISTRO ESCRITURA PACTO(CART&',NULL,''),(124,'RESGATE DE CHEQUE',NULL,''),(125,'RETIRADA E BOLETO ITBI',NULL,''),(126,'RETIRADA DE CONTRATO E RECONHE',NULL,''),(127,'SINAL P&Uacute;BLICO',NULL,''),(128,'SITUA&Ccedil;&Atilde;O ENFITEU',NULL,''),(129,'TRADI&Ccedil;&Atilde;O DE DOCU',NULL,''),(130,'TRIBUTOS ESTADUAIS',NULL,''),(131,'TRIBUTOS ESTADUAIS- NEGATIVA P',NULL,''),(132,'TRIBUTOS IMOBILI&Aacute;RIOS',NULL,''),(133,'VALOR VENAL',NULL,'');
/*!40000 ALTER TABLE `tipos_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) unsigned NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `pass_switched` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `profile_id` (`profile_id`),
  CONSTRAINT `users_profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'a78f76a37a7f699f39b324ba58b2aad5','Administrador','admin','2015-12-08 13:58:04',1,'0000-00-00 00:00:00','2015-12-08 13:58:04'),(5,2,'9bc5f2b8fb63d9ec807dc1d6e35ebf6e','Teste','teste@teste.com','2012-04-02 22:41:30',1,'2012-03-23 15:49:04','2012-04-02 22:41:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-08 13:50:56
