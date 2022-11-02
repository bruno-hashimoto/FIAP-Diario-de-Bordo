-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 01/11/2022 às 03:08
-- Versão do servidor: 5.7.34
-- Versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fiap_mentalid`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) DEFAULT NULL,
  `chamada` varchar(300) DEFAULT NULL,
  `texto` text,
  `categoria` int(11) NOT NULL,
  `imagem` varchar(300) DEFAULT NULL,
  `autor` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `destaque` int(11) NOT NULL DEFAULT '0',
  `criado` date NOT NULL,
  `deletado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `chamada`, `texto`, `categoria`, `imagem`, `autor`, `status`, `destaque`, `criado`, `deletado`) VALUES
(6, 'Montando um grupo', 'Comecinho do ano, muitas expectativas, aquele friozinho na barriga', 'Comecinho do ano, muitas expectativas, aquele friozinho na barriga, assim que começou nosso ano e logo de cara nos deparamos com o primeiro desafio, achar um grupo no qual seguiríamos até o final do curso, mas como fazer isso sem conhecer ninguém, bom, na sorte mesmo!\r\nDepois de muita luta conseguimos montar nosso grupo e dar início as atividades, tivemos e ainda temos algumas dificuldades, mas é normal, afinal, todos temos formas diferentes de trabalhar, mas no final tudo sempre dá certo.\r\n', 3, NULL, 'Isabella Piedade', 0, 0, '2022-02-15', NULL),
(7, 'MentalAid: um software de muita ajuda.', 'Várias ideias apenas uma vencedora', 'Várias ideias apenas uma vencedora, entre várias ideias maravilhosa como escolher apenas uma para seguir, esse foi o segundo desafio do nosso grupo, após semanas discutindo os pros e contras de cada ideia, finalmente uma vencedora, o Namastech foi o melhor a se seguir, assim começamos a elaborar e complementar cada vez mais a fim de chegar no melhor resultado.', 3, NULL, 'Isabella Piedade', 0, 0, '2022-03-07', NULL),
(8, 'Criando interface arrasadoras.', 'Pesquisas e pesquisas para chegar ao resultado desejado', 'Pesquisas e pesquisas para chegar ao resultado desejado, não queríamos criar apenas uma interface comum que é facilmente encontrada em qualquer app de meditação, mas sim uma realmente arrasadora, para isso misturamos o metaverso com outros jogos para criar uma interface nunca vista nos apps nos comuns.', 3, NULL, 'Isabella Piedade', 0, 0, '2022-05-11', NULL),
(9, 'Prevendo todos os riscos possíveis.', 'Como pensar em montar um software sem antes pensar nos riscos? ', 'Como pensar em montar um software sem antes pensar nos riscos? Após muitas pesquisar identificamos todos os possíveis riscos ao nosso projeto, o que eles poderiam causar e o mais importante, sua resolução. \r\nAgora na reta final, com a colaboração de todos conseguimos passar por todos os possíveis riscos, conseguimos ver a importância de montar um planejamento para que não tivéssemos surpresas.', 3, NULL, 'Isabella Piedade', 0, 0, '2022-09-26', NULL),
(10, 'Enterprise Challenge – aTip.', 'Diversas interfaces e ideias para o mesmo desafio', 'Diversas interfaces e ideias para o mesmo desafio, como desenvolver algo que chamasse a atenção e com um tempo tão curto? Todo semestre somos desafiados a superar nosso limites e esse desafio confesso que foi complicado, não tínhamos ideia de como fugir da mesmice, infelizmente nem tudo sai com planejado e nesse desafio não conseguimos dar o nosso melhor, mas entregamos o melhor que podíamos.', 3, NULL, 'Isabella Piedade', 0, 0, '2022-09-27', NULL),
(11, 'Challenge A Better World', 'Challenge Challenge Challenge', 'No primeiro semestre participamos de um desafio chamado A Better World. Este foi o desafio apresentado pela Bayer, e propunha o desenvolvimento de uma solução tecnológica que envolvesse água, saúde, e/ou dietas sustentáveis. Nosso projeto (Clean Gate) apresentou um protótipo de robô que realiza a limpeza de rios e águas costeiras.', 3, NULL, 'Raul', 0, 0, '2022-06-13', NULL),
(12, 'Projeto Agrobot', 'um Sistema de Plantio automatizado ', 'Um dos destaques do FIAP NEXT deste ano foi o Agrobot, um Sistema de Plantio automatizado que prevê a adoção de recursos robóticos avançados, como irrigação automatizada, visão computacional para avaliação da evolução das plantas, e sistemas eletrônicos de medição de umidade e temperatura do solo.\r\n', 3, NULL, 'Raul', 0, 0, '2022-10-22', NULL),
(13, 'NEXT Premiações', 'A glória de poucos selecionados', 'Os 3 melhores projetos de cada categoria de desafio (Challenges propostos por empresas e entidades parceiras) recebem prêmios e destaque na comunidade da faculdade. Além disso os projetos de iniciação científica são reconhecidos com recursos em dinheiro (!). Ainda melhor =)', 3, NULL, 'Raul', 0, 0, '2022-10-22', NULL),
(14, 'Evento NEXT', 'Uma premiação sem igual', 'O evento de premiação da Fiap, NEXT, ocorreu neste fim de semana, no sábado 22/10/22. Nele encontraram-se todos os grupos selecionados de vários cursos da FIAP, apresentando seus projetos de destaque. É o melhor incentivo que a faculdade pode dar para o desenvolvimento de inovação e tecnologia entre seus alunos.\r\n', 3, NULL, 'Raul', 0, 0, '2022-10-22', NULL),
(15, 'Jogos que trazem Relaxamento', 'Uma categoria promissora', 'Ao pesquisarmos jogos para o nosso aplicativo MentalAid, percebemos que uma categoria de jogos no mercado parece ser promissora, especialmente porque revela como a sociedade atual relaciona-se com games que proporcionam relaxamento e meditação.\r\nUm jogo especialmente premiado nesta categoria chama-se Alba, a Wildlife Adventure. Encontramos informações importantes sobre o seu desenvolvimento neste artigo do site Venturebeat.\r\nhttps://www.albawildlife.com/', 3, NULL, 'Raul', 0, 0, '2022-06-23', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
