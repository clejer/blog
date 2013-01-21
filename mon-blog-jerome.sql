-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 21 Janvier 2013 à 19:09
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `texte` text NOT NULL,
  `date` datetime NOT NULL,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `date`, `id_tag`) VALUES
(146, 'Koala', 'Les koalas appartiennent à l''ordre des mammifères marsupiaux des diprotodontés, c''est-à-dire qu''ils ont deux incisives inférieures pointant vers l''avant. Ils sont du sous-ordre des vombatiformes qui comprend notamment les wombats (voir aussi systématique des diprotodontés). Les origines des koalas ne sont pas clairement établies, même s''il est presque certain qu''ils descendent d''animaux terrestres semblables aux wombats. Ils ont commencé à diverger il y a 42 millions d''années, à la fin de l''Éocène. La poche des koalas orientée vers l''arrière et le bas est d''ailleurs un héritage des wombats creuseurs de terriers. Alors que ceux-ci sont restés au sol, les koalas ont adopté un mode de vie arboricole, à l''instar des dendrolagues qui ont divergé de leurs ancêtres terrestres pour résider dans les arbres.', '2013-01-21 07:01:06', 18),
(148, 'Cerf', 'Le cerf élaphe (Cervus elaphus) est un grand cervidé des forêts tempérées d''Europe, d''Afrique du Nord et d''Asie.\r\nC''est l''un des représentants les plus connus de cette famille de mammifères. L''espèce comprend plusieurs sous-espèces, dont le cerf de Bactriane, le cerf du Turkestan, le cerf rouge du Turkestan ou encore le cerf élaphe du Turkestan1.\r\nLa femelle est la biche et le petit, jusqu''à l''âge de 6 mois, le faon. Ensuite, de 6 mois à 1 an, on l''appelle « bichette » si c''est une femelle et « hère » s''il s''agit d''un mâle. De 1 an à 2 ans, le jeune mâle est appelé « daguet ».', '2013-01-21 08:03:35', 18),
(149, 'Elephant', 'L''Éléphant de savane d''Afrique (Loxodonta africana) est une espèce de mammifères de la famille des Éléphantidés. Il s''agit du plus grand animal terrestre, qui mesure en moyenne 4 mètres à l''épaule et pèse approximativement 7,7 tonnes. Cette espèce se rencontre en prairie, marécage, et bord de fleuve, du Sahara jusqu''en Afrique du Sud.', '2013-01-21 08:11:34', 18),
(158, 'Gorillaz', 'Gorillaz est un groupe de musique anglais virtuel dont les deux créateurs principaux sont Damon Albarn (le chanteur de Blur et de The Good, the Bad and the Queen) et Jamie Hewlett (le dessinateur de Tank Girl). Les membres virtuels de Gorillaz sont représentés comme des personnages de bande dessinée.\r\nLeur musique est un mélange de britpop, de hip hop, de Trip Hop, de dub, de classique et d’autres styles. Ils sont d’ailleurs reconnus pour leurs très nombreux partenariats et collaborations avec des artistes et musiciens d’horizons et d’influences très différents.', '2013-01-21 15:10:17', 19);

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id`, `nom`) VALUES
(18, 'animaux'),
(19, 'musique');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `sid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `email`, `mdp`, `sid`) VALUES
(1, 'jer.clement@laposte.net', '123', '04af80ad532020f8d7e1ca122c534188'),
(5, 'test@test.fr', '234', '76b65a6f7ce4875bb8c4c90379efcf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
