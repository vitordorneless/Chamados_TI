CREATE TABLE `chamados`.`usuarios` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(30) NOT NULL,
  `senha` VARCHAR(40) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `admin` INT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `chamados`.`chamados_sugestoes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NULL,
  `email` VARCHAR(70) NULL,
  `sugestao` TEXT NOT NULL,
  `usuario_logado` VARCHAR(45) NULL,
  `data_sugestao` DATETIME NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `chamados`.`chamados_orcamentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NOT NULL,
  `email` VARCHAR(70) NOT NULL,
  `setor` VARCHAR(45) NOT NULL,
  `tipo_de_orcamento` VARCHAR(45) NOT NULL,
  `descricao_orcamento` TEXT NOT NULL,
  `usuario_logado` VARCHAR(45) NOT NULL,
  `data_orcamento` DATETIME NOT NULL,
  `status` INT NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `chamados`.`chamados_tratamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao_solucao` TEXT NOT NULL,
  `status` INT NOT NULL,
  `tecnico` VARCHAR(90) NOT NULL,
  `data_encerramento` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `id`
    FOREIGN KEY (`id`)
    REFERENCES `chamados`.`chamados_criados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE `chamados`.`chamados_tratamento` 
ADD COLUMN `id_chamado_criado` INT NOT NULL AFTER `id`;

CREATE TABLE `chamados`.`chamados_orcamentos_aprovados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_orcamento` INT NOT NULL,
  `valor` FLOAT NOT NULL,
  PRIMARY KEY (`id`));