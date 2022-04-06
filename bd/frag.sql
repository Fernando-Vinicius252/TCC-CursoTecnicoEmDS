-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para frag
CREATE DATABASE IF NOT EXISTS `frag` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `frag`;

-- Copiando estrutura para tabela frag.aluno
CREATE TABLE IF NOT EXISTS `aluno` (
  `cod_aluno` int(6) NOT NULL,
  `nome_user` varchar(50) DEFAULT NULL,
  `nome_aluno` varchar(50) DEFAULT NULL,
  `turma_aluno` varchar(50) DEFAULT NULL,
  `senha_aluno` varchar(50) DEFAULT NULL,
  `tipo_aluno` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_aluno`) USING BTREE,
  KEY `FK_aluno_tipo` (`tipo_aluno`),
  CONSTRAINT `FK_aluno_tipo` FOREIGN KEY (`tipo_aluno`) REFERENCES `tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela frag.aluno: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `aluno` DISABLE KEYS */;
INSERT INTO `aluno` (`cod_aluno`, `nome_user`, `nome_aluno`, `turma_aluno`, `senha_aluno`, `tipo_aluno`) VALUES
	(173, 'Aluno', 'Maria Augusta', '9°D', '@FRAG12345678', 3),
	(26565, 'Aluno', '', '8919891', '@FRAG12345678', 3),
	(52660, 'Aluno', '', '8°A', '@FRAG12345678', 3);
/*!40000 ALTER TABLE `aluno` ENABLE KEYS */;

-- Copiando estrutura para tabela frag.coordenador
CREATE TABLE IF NOT EXISTS `coordenador` (
  `cod_coord` int(11) NOT NULL,
  `nome_user` varchar(50) DEFAULT NULL,
  `nome_coord` varchar(50) NOT NULL DEFAULT '',
  `tel_coord` varchar(30) NOT NULL DEFAULT '',
  `email_coord` varchar(50) NOT NULL DEFAULT '',
  `senha_coord` varchar(50) NOT NULL DEFAULT '',
  `tipo_coord` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_coord`) USING BTREE,
  KEY `FK_coord_tipo` (`tipo_coord`),
  CONSTRAINT `FK_coord_tipo` FOREIGN KEY (`tipo_coord`) REFERENCES `tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela frag.coordenador: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `coordenador` DISABLE KEYS */;
INSERT INTO `coordenador` (`cod_coord`, `nome_user`, `nome_coord`, `tel_coord`, `email_coord`, `senha_coord`, `tipo_coord`) VALUES
	(1958313, 'Coordenador', 'Ronilton', '(11)974268933', 'ronilton@hotmail.com', 'ronilton123', 1),
	(12345678, NULL, 'Renato Matheus', '11959893829', 'renatomatheus@gmail.com', 'matheuzinho123', 1),
	(123456789, 'Coordenador', 'Rodrigo', '41918919189', 'rodrigo@gmail.com', '123456789', 1);
/*!40000 ALTER TABLE `coordenador` ENABLE KEYS */;

-- Copiando estrutura para tabela frag.escola
CREATE TABLE IF NOT EXISTS `escola` (
  `cod_escola` int(11) NOT NULL,
  `nome_user` varchar(50) DEFAULT NULL,
  `nome_diretor` varchar(255) NOT NULL DEFAULT '',
  `senha_escola` varchar(100) NOT NULL DEFAULT '',
  `rua_escola` varchar(50) NOT NULL DEFAULT '',
  `num_escola` int(10) NOT NULL,
  `telefone_escola` varchar(20) NOT NULL DEFAULT '',
  `email_diretor` varchar(50) NOT NULL DEFAULT '',
  `bairro_escola` varchar(50) NOT NULL DEFAULT '',
  `cidade_escola` varchar(50) NOT NULL DEFAULT '',
  `cep_escola` varchar(9) NOT NULL DEFAULT '',
  `tipo_escola` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_escola`),
  KEY `FK_escola_tipo` (`tipo_escola`),
  CONSTRAINT `FK_escola_tipo` FOREIGN KEY (`tipo_escola`) REFERENCES `tipo` (`id_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela frag.escola: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `escola` DISABLE KEYS */;
INSERT INTO `escola` (`cod_escola`, `nome_user`, `nome_diretor`, `senha_escola`, `rua_escola`, `num_escola`, `telefone_escola`, `email_diretor`, `bairro_escola`, `cidade_escola`, `cep_escola`, `tipo_escola`) VALUES
	(111111, 'Diretor', 'Fulano', '@Diretorfrag123', 'Rua Frag', 123, '(99)99999-9999', 'diretorfrag@gmail.com', 'Bairro Frag', 'São Paulo', '99999-999', 2);
/*!40000 ALTER TABLE `escola` ENABLE KEYS */;

-- Copiando estrutura para tabela frag.tipo
CREATE TABLE IF NOT EXISTS `tipo` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`),
  UNIQUE KEY `nome_tipo` (`nome_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela frag.tipo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo` DISABLE KEYS */;
INSERT INTO `tipo` (`id_tipo`, `nome_tipo`) VALUES
	(3, 'Aluno'),
	(1, 'Coordenador'),
	(2, 'Diretor');
/*!40000 ALTER TABLE `tipo` ENABLE KEYS */;

-- Copiando estrutura para tabela frag.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(50) DEFAULT NULL,
  `cod_user` int(11) DEFAULT NULL,
  `senha_user` varchar(50) DEFAULT NULL,
  `tipo_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `cod_user` (`cod_user`),
  KEY `FK_usuario_tipo` (`tipo_user`),
  CONSTRAINT `FK_usuario_tipo` FOREIGN KEY (`tipo_user`) REFERENCES `tipo` (`id_tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela frag.usuario: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_user`, `nome_user`, `cod_user`, `senha_user`, `tipo_user`) VALUES
	(3, ' Aluno ', 84622, ' @FRAG12345678', 3),
	(4, ' Aluno ', 12417, ' @FRAG12345678', 3),
	(5, ' Aluno ', 19053, ' @FRAG12345678', 3),
	(6, ' Aluno ', 52660, ' @FRAG12345678', 3),
	(7, ' Aluno ', 26565, ' @FRAG12345678', 3),
	(8, ' Coordenador ', 12345678, ' 12345678', 1),
	(10, ' Aluno ', 173, ' @FRAG12345678', 3),
	(11, ' Coordenador ', 1958313, ' ronilton123', 1),
	(12, 'Diretor', 2918919, '@Diretorfrag123', 2);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
