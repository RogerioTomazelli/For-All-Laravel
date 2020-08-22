-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para trabalho_integrador
CREATE DATABASE IF NOT EXISTS `trabalho_integrador` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `trabalho_integrador`;

-- Copiando estrutura para tabela trabalho_integrador.material
CREATE TABLE IF NOT EXISTS `audio` (
  `id_audio` int(11) NOT NULL AUTO_INCREMENT,
  `nome_audio` varchar(45) COLLATE utf8_bin NOT NULL,
  `autor_audio` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `foto_capa` blob NOT NULL,
  PRIMARY KEY (`id_audio`),
  KEY `FK_audio_usuario` (`id_usuario`),
  CONSTRAINT `FK_audio_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela trabalho_integrador.material: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `material` DISABLE KEYS */;
/*!40000 ALTER TABLE `material` ENABLE KEYS */;

-- Copiando estrutura para tabela trabalho_integrador.avaliacao_audio
CREATE TABLE IF NOT EXISTS `avaliacao_audio` (
  `id_avaliacaoaudio` int(11) NOT NULL AUTO_INCREMENT,
  `valor_avaliacaoaudio` int(5) NOT NULL,
  `id_audio` int(11) NOT NULL,
  PRIMARY KEY (`id_avaliacaoaudio`),
  KEY `FK_valiacao_audio_audio` (`id_audio`),
  CONSTRAINT `FK_valiacao_audio_audio` FOREIGN KEY (`id_audio`) REFERENCES `audio` (`id_audio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela trabalho_integrador.avaliacao_audio: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `avaliacao_audio` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacao_audio` ENABLE KEYS */;

-- Copiando estrutura para tabela trabalho_integrador.avaliacao_video
CREATE TABLE IF NOT EXISTS `avaliacao_video` (
  `id_avaliacaovideo` int(11) NOT NULL AUTO_INCREMENT,
  `valor_avaliacaovideo` int(5) NOT NULL,
  `id_video` int(11) NOT NULL,
  PRIMARY KEY (`id_avaliacaovideo`),
  KEY `FK_avaliacao_video_video` (`id_video`),
  CONSTRAINT `FK_avaliacao_video_video` FOREIGN KEY (`id_video`) REFERENCES `video` (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela trabalho_integrador.avaliacao_video: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `avaliacao_video` DISABLE KEYS */;
/*!40000 ALTER TABLE `avaliacao_video` ENABLE KEYS */;

-- Copiando estrutura para tabela trabalho_integrador.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto_perfil` blob,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela trabalho_integrador.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`, `nome`, `login`, `email`, `senha`, `foto_perfil`) VALUES
	(1, 'rogerio', 'rogerio.ctf', 'rctf2003@gmail.com', '123', _binary '');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Copiando estrutura para tabela trabalho_integrador.video
CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `nome_video` varchar(45) COLLATE utf8_bin NOT NULL,
  `autor_video` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `foto_capa` blob NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `FK_video_usuario` (`id_usuario`),
  CONSTRAINT `FK_video_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela trabalho_integrador.video: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
/*!40000 ALTER TABLE `video` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
