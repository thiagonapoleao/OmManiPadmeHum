-- --------------------------------------------------------
-- Servidor:                     10.16.0.79
-- Versão do servidor:           10.1.35-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para xamanico
CREATE DATABASE IF NOT EXISTS `xamanico` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `xamanico`;

-- Copiando estrutura para tabela xamanico.formulario
CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `datanasc` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passaporte` varchar(50) DEFAULT NULL,
  `pdf` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela xamanico.formulario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `formulario` DISABLE KEYS */;
INSERT INTO `formulario` (`id`, `data`, `nome`, `sexo`, `datanasc`, `rg`, `cpf`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefone`, `celular`, `email`, `passaporte`, `pdf`) VALUES
	(14, '2020-10-10', 'Thiago Cesar Napoleão', 'Masculino', '1983-04-15', '42332123', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '16-996265091', 'thiago.napoleao@stcruz.com.br', '4255525252', '../pdf/31324582871.pdf');
/*!40000 ALTER TABLE `formulario` ENABLE KEYS */;

-- Copiando estrutura para tabela xamanico.login
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `acesso` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela xamanico.login: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id`, `user`, `password`, `acesso`) VALUES
	(1, 'thiago', '123456', 1);
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Copiando estrutura para tabela xamanico.participacao
CREATE TABLE IF NOT EXISTS `participacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `datanasc` varchar(50) DEFAULT NULL,
  `rg` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `numero` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `passaporte` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Copiando dados para a tabela xamanico.participacao: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `participacao` DISABLE KEYS */;
INSERT INTO `participacao` (`id`, `data`, `nome`, `sexo`, `datanasc`, `rg`, `cpf`, `endereco`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `telefone`, `celular`, `email`, `passaporte`) VALUES
	(11, '2020-09-17', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '313245828-71', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(12, '2020-09-17', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '313245828-71', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(13, '2020-09-17', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '313245828-71', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(14, '2020-09-17', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '313245828-71', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(15, '2020-09-18', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '313245828-71', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(18, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(19, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(20, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(21, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(22, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(23, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(24, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(25, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(26, '2020-09-19', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(27, '2020-09-30', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '42512501-4', '31324582871', 'Av João Pierine ', '160', 'Jardim Dumont', 'Arararquara', 'SP', '14808-612', '16-33326382', '16-996265091', 'thc.napoleao@gmaik.com', '4255525252'),
	(32, '2020-09-21', 'Thiago Cesar Napoleão', 'Masculino', '15/04/1983', '425124014', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '169965091', 'thiago.napoleao@stcruz.com.br', '454564564534'),
	(33, '2020-09-22', 'Thiago Cesar Napoleão', 'Masculino', '1983-04-15', '31324582871', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '16-996265091', 'thiago.napoleao@stcruz.com.br', '4255525252'),
	(34, '2020-09-22', 'Thiago Cesar Napoleão', 'Masculino', '1983-04-15', '31324582871', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '16-996265091', 'thiago.napoleao@stcruz.com.br', '4255525252'),
	(35, '2020-09-25', 'Thiago Cesar Napoleão', 'Masculino', '1983-04-15', '31324582871', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '16-996265091', 'thiago.napoleao@stcruz.com.br', '4255525252'),
	(36, '2020-09-25', 'Thiago Cesar Napoleão', 'Masculino', '1983-04-15', '31324582871', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '16-996265091', 'thiago.napoleao@stcruz.com.br', '4255525252'),
	(37, '2020-10-10', 'Thiago Cesar Napoleão', 'Masculino', '2020-10-06', '31324582871', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '16-996265091', 'thiago.napoleao@stcruz.com.br', '4255525252'),
	(38, '2020-10-10', 'Thiago Cesar Napoleão', 'Masculino', '2020-10-06', '31324582871', '31324582871', 'av joão pierine 160', '160', 'Jardim Dumont', 'araraquara', 'sp', '14808612', '996265091', '16-996265091', 'thiago.napoleao@stcruz.com.br', '4255525252');
/*!40000 ALTER TABLE `participacao` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
