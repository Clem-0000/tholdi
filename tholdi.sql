-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 01 avr. 2022 à 15:15
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tholdi`
--

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `codeDevis` int(11) NOT NULL AUTO_INCREMENT,
  `dateDevis` bigint(20) DEFAULT NULL,
  `montantDevis` decimal(6,2) DEFAULT NULL,
  `tare` int(4) DEFAULT NULL,
  `nbcontainers` int(11) DEFAULT NULL,
  `valider` smallint(1) NOT NULL,
  PRIMARY KEY (`codeDevis`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`codeDevis`, `dateDevis`, `montantDevis`, `tare`, `nbcontainers`, `valider`) VALUES
(1, 1573469795, '129.00', NULL, 3, 0),
(2, 1580152994, '80.00', NULL, 4, 0),
(3, 1580153516, '80.00', NULL, 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `duree`
--

DROP TABLE IF EXISTS `duree`;
CREATE TABLE IF NOT EXISTS `duree` (
  `codeD` varchar(20) NOT NULL,
  `nbJours` int(6) NOT NULL,
  PRIMARY KEY (`codeD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `duree`
--

INSERT INTO `duree` (`codeD`, `nbJours`) VALUES
('ANNEE', 360),
('JOUR', 1),
('MOIS', 30),
('TRIMESTRE', 90);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `codePays` char(4) NOT NULL,
  `nomPays` char(30) NOT NULL,
  PRIMARY KEY (`codePays`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`codePays`, `nomPays`) VALUES
('AD', 'ANDORRE'),
('AE', 'EMIRATS ARABES UNIS'),
('AF', 'AFGHANISTAN'),
('AG', 'ANTIGUA-ET-BARBUDA'),
('AL', 'ALBANIE'),
('AM', 'ARMENIE'),
('AN', 'ANTILLES NEERLANDAIS'),
('AO', 'ANGOLA'),
('AR', 'ARGENTINE'),
('AT', 'AUTRICHE'),
('AU', 'AUSTRALIE'),
('AZ', 'AZERBAIDJAN'),
('BA', 'BOSNIE-HERZEGOVINE'),
('BB', 'BARBADE'),
('BD', 'BANGLADESH'),
('BE', 'BELGIQUE'),
('BF', 'BURKINA FASO'),
('BG', 'BULGARIE'),
('BH', 'BAHREIN'),
('BI', 'BURUNDI'),
('BJ', 'BENIN'),
('BM', 'BERMUDES'),
('BN', 'BRUNEI DARUSSALAM'),
('BO', 'BOLIVIE'),
('BR', 'BRESIL'),
('BS', 'BAHAMAS'),
('BT', 'BHOUTAN'),
('BW', 'BOTSWANA'),
('BY', 'BELARUS'),
('BZ', 'BELIZE'),
('CA', 'CANADA'),
('CD', 'CONGO (ZAIRE)'),
('CF', 'CENTRAFRICAINE, REPU'),
('CG', 'CONGO (BRAZZA)'),
('CH', 'SUISSE'),
('CI', 'COTE D\'IVOIRE'),
('CK', 'COOK, ILES'),
('CL', 'CHILI'),
('CM', 'CAMEROUN'),
('CN', 'CHINE'),
('CO', 'COLOMBIE'),
('CR', 'COSTA RICA'),
('CS', 'SERBIE-ET-MONTENEGRO'),
('CU', 'CUBA'),
('CV', 'CAP-VERT'),
('CY', 'CHYPRE'),
('CZ', 'TCHEQUIE'),
('DE', 'ALLEMAGNE'),
('DJ', 'DJIBOUTI'),
('DK', 'DANEMARK'),
('DM', 'DOMINIQUE'),
('DO', 'DOMINICAINE, REPUBL.'),
('DZ', 'ALGERIE'),
('EC', 'EQUATEUR'),
('EE', 'ESTONIE'),
('EG', 'EGYPTE'),
('ER', 'ERYTHREE'),
('ES', 'ESPAGNE'),
('ET', 'ETHIOPIE'),
('FI', 'FINLANDE'),
('FJ', 'FIDJI'),
('FM', 'MICRONESIE'),
('FR', 'FRANCE'),
('GA', 'GABON'),
('GB', 'GRANDE-BRETAGNE'),
('GD', 'GRENADE'),
('GE', 'GEORGIE'),
('GH', 'GHANA'),
('GI', 'GIBRALTAR'),
('GM', 'GAMBIE'),
('GN', 'GUINEE'),
('GQ', 'GUINEE EQUATORIALE'),
('GR', 'GRECE'),
('GT', 'GUATEMALA'),
('GU', 'GUAM'),
('GW', 'GUINEE-BISSAU'),
('GY', 'GUYANA'),
('HK', 'HONG-KONG'),
('HN', 'HONDURAS'),
('HR', 'CROATIE'),
('HT', 'HAITI'),
('HU', 'HONGRIE'),
('ID', 'INDONESIE'),
('IE', 'IRLANDE'),
('IL', 'ISRAEL'),
('IN', 'INDE'),
('IQ', 'IRAQ'),
('IR', 'IRAN'),
('IS', 'ISLANDE'),
('IT', 'ITALIE'),
('JM', 'JAMAIQUE'),
('JO', 'JORDANIE'),
('JP', 'JAPON'),
('KE', 'KENYA'),
('KG', 'KIRGHIZISTAN'),
('KH', 'CAMBODGE'),
('KI', 'KIRIBATI'),
('KM', 'COMORES'),
('KN', 'SAINT-KITTS-ET-NEVIS'),
('KP', 'COREE DU NORD'),
('KR', 'COREE DU SUD'),
('KW', 'KOWEIT'),
('KZ', 'KAZAKHSTAN'),
('LA', 'LAOS'),
('LB', 'LIBAN'),
('LC', 'SAINTE-LUCIE'),
('LI', 'LIECHTENSTEIN'),
('LK', 'SRI LANKA'),
('LR', 'LIBERIA'),
('LS', 'LESOTHO'),
('LT', 'LITUANIE'),
('LU', 'LUXEMBOURG'),
('LV', 'LETTONIE'),
('LY', 'LIBYE'),
('MA', 'MAROC'),
('MC', 'MONACO'),
('MD', 'MOLDAVIE'),
('MG', 'MADAGASCAR'),
('MH', 'MARSHALL, ILES'),
('MK', 'MACEDOINE'),
('ML', 'MALI'),
('MM', 'MYANMAR (BIRMANIE)'),
('MN', 'MONGOLIE'),
('MO', 'MACAO'),
('MR', 'MAURITANIE'),
('MT', 'MALTE'),
('MU', 'MAURICE'),
('MV', 'MALDIVES'),
('MW', 'MALAWI'),
('MX', 'MEXIQUE'),
('MY', 'MALAISIE'),
('MZ', 'MOZAMBIQUE'),
('NA', 'NAMIBIE'),
('NE', 'NIGER'),
('NG', 'NIGERIA'),
('NI', 'NICARAGUA'),
('NL', 'PAYS-BAS'),
('NO', 'NORVEGE'),
('NP', 'NEPAL'),
('NR', 'NAURU'),
('NU', 'NIUE'),
('NZ', 'NOUVELLE-ZELANDE'),
('OM', 'OMAN'),
('PA', 'PANAMA'),
('PE', 'PEROU'),
('PG', 'PAPOUASIE-NOUV.-GUIN'),
('PH', 'PHILIPPINES'),
('PK', 'PAKISTAN'),
('PL', 'POLOGNE'),
('PR', 'PORTO RICO'),
('PT', 'PORTUGAL'),
('PW', 'PALAOS'),
('PY', 'PARAGUAY'),
('QA', 'QATAR'),
('RO', 'ROUMANIE'),
('RU', 'RUSSIE'),
('RW', 'RWANDA'),
('SA', 'ARABIE SAOUDITE'),
('SB', 'SALOMON, ILES'),
('SC', 'SEYCHELLES'),
('SD', 'SOUDAN'),
('SE', 'SUEDE'),
('SG', 'SINGAPOUR'),
('SI', 'SLOVENIE'),
('SK', 'SLOVAQUIE'),
('SL', 'SIERRA LEONE'),
('SM', 'SAINT-MARIN'),
('SN', 'SENEGAL'),
('SO', 'SOMALIE'),
('SR', 'SURINAME'),
('ST', 'SAO TOME-ET-PRINCIPE'),
('SV', 'EL SALVADOR'),
('SY', 'SYRIE'),
('SZ', 'SWAZILAND'),
('TD', 'TCHAD'),
('TG', 'TOGO'),
('TH', 'THAILANDE'),
('TJ', 'TADJIKISTAN'),
('TL', 'TIMOR-LESTE'),
('TM', 'TURKMENISTAN'),
('TN', 'TUNISIE'),
('TO', 'TONGA'),
('TR', 'TURQUIE'),
('TT', 'TRINITE-ET-TOBAGO'),
('TV', 'TUVALU'),
('TW', 'TAIWAN'),
('TZ', 'TANZANIE'),
('UA', 'UKRAINE'),
('UG', 'OUGANDA'),
('US', 'ETATS-UNIS'),
('UY', 'URUGUAY'),
('UZ', 'OUZBEKISTAN'),
('VA', 'VATICAN'),
('VC', 'SAINT-VINCENT'),
('VE', 'VENEZUELA'),
('VN', 'VIET NAM'),
('VU', 'VANUATU'),
('WS', 'SAMOA'),
('YE', 'YEMEN'),
('ZA', 'AFRIQUE DU SUD'),
('ZM', 'ZAMBIE'),
('ZW', 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `codeReservation` int(15) NOT NULL AUTO_INCREMENT,
  `dateDebutReservation` bigint(20) DEFAULT NULL,
  `datefinReservation` bigint(20) DEFAULT NULL,
  `dateReservation` bigint(20) DEFAULT NULL,
  `volumeEstime` decimal(4,0) DEFAULT NULL,
  `codeDevis` int(1) DEFAULT NULL,
  `codeVilleMiseDisposition` int(6) NOT NULL,
  `codeVilleRendre` int(6) NOT NULL,
  `codeUtilisateur` smallint(6) NOT NULL,
  `numeroDeReservation` int(11) DEFAULT NULL,
  `etat` char(10) DEFAULT NULL,
  `libelleMessage` varchar(200) DEFAULT NULL,
  `etatMsg` boolean DEFAULT NULL,
  `dateMessage` bigint(20) DEFAULT NULL,

  PRIMARY KEY (`codeReservation`),
  KEY `fk_Dev` (`codeDevis`),
  KEY `fk_V` (`codeVilleMiseDisposition`),
  KEY `fk_Ville` (`codeVilleRendre`),
  KEY `fk_codeU` (`codeUtilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`codeReservation`, `dateDebutReservation`, `datefinReservation`, `dateReservation`, `volumeEstime`, `codeDevis`, `codeVilleMiseDisposition`, `codeVilleRendre`, `codeUtilisateur`, `numeroDeReservation`, `etat`) VALUES
(36, 1621375200, 1988, 1621345136, '4000', NULL, 1, 4, 1, NULL, 'enCours'),
(37, 1631836800, 0, 1631889251, '669', NULL, 1, 6, 1, NULL, 'enCours'),
(38, 1632434400, 1996, 1632425322, '1200', NULL, 1, 5, 1, NULL, 'enCours'),
(39, 1633039200, 1983, 1632425624, '4000', NULL, 1, 6, 1, NULL, 'enCours'),
(40, 1632520800, 2001, 1632493427, '4555', NULL, 1, 7, 1, NULL, 'enCours'),
(41, 1633125600, 1991, 1632494277, '1444', NULL, 1, 6, 2, NULL, 'enCours'),
(42, 1649548800, 1651190400, 1648804118, '7', NULL, 2, 3, 1, NULL, 'enCours'),
(43, 1648857600, 1650585600, 1648804321, '7', NULL, 1, 7, 38, NULL, 'enCours'),
(44, 1649980800, 1651276800, 1648825673, '2', NULL, 4, 7, 1, NULL, 'enCours');

-- --------------------------------------------------------

--
-- Structure de la table `reserver`
--

DROP TABLE IF EXISTS `reserver`;
CREATE TABLE IF NOT EXISTS `reserver` (
  `codeReservation` int(15) NOT NULL AUTO_INCREMENT,
  `numTypeContainer` int(6) NOT NULL,
  `qteReserver` decimal(2,0) NOT NULL,
  PRIMARY KEY (`codeReservation`,`numTypeContainer`),
  KEY `fk_TypeC` (`numTypeContainer`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reserver`
--

INSERT INTO `reserver` (`codeReservation`, `numTypeContainer`, `qteReserver`) VALUES
(36, 1, '2'),
(37, 7, '2'),
(38, 7, '2'),
(42, 4, '2'),
(43, 8, '1'),
(44, 3, '1'),
(44, 8, '4');

-- --------------------------------------------------------

--
-- Structure de la table `tarificationcontainer`
--

DROP TABLE IF EXISTS `tarificationcontainer`;
CREATE TABLE IF NOT EXISTS `tarificationcontainer` (
  `codeDuree` varchar(20) NOT NULL,
  `numTypeContainer` int(6) NOT NULL,
  `tarif` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`codeDuree`,`numTypeContainer`),
  KEY `fk_Type` (`numTypeContainer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tarificationcontainer`
--

INSERT INTO `tarificationcontainer` (`codeDuree`, `numTypeContainer`, `tarif`) VALUES
('ANNEE', 1, '1260.00'),
('ANNEE', 2, '1663.20'),
('ANNEE', 3, '2700.00'),
('ANNEE', 4, '1620.00'),
('ANNEE', 5, '2700.00'),
('ANNEE', 6, '2800.00'),
('ANNEE', 7, '1620.00'),
('ANNEE', 8, '2700.00'),
('ANNEE', 9, '3200.00'),
('JOUR', 1, '8.00'),
('JOUR', 2, '9.25'),
('JOUR', 3, '10.00'),
('JOUR', 4, '9.00'),
('JOUR', 5, '10.00'),
('JOUR', 6, '12.25'),
('JOUR', 7, '9.50'),
('JOUR', 8, '10.75'),
('JOUR', 9, '14.00'),
('TRIMESTRE', 1, '585.00'),
('TRIMESTRE', 2, '623.70'),
('TRIMESTRE', 3, '765.00'),
('TRIMESTRE', 4, '585.00'),
('TRIMESTRE', 5, '755.00'),
('TRIMESTRE', 6, '890.00'),
('TRIMESTRE', 7, '585.00'),
('TRIMESTRE', 8, '765.00'),
('TRIMESTRE', 9, '890.00');

-- --------------------------------------------------------

--
-- Structure de la table `typecontainer`
--

DROP TABLE IF EXISTS `typecontainer`;
CREATE TABLE IF NOT EXISTS `typecontainer` (
  `numTypeContainer` int(6) NOT NULL AUTO_INCREMENT,
  `codeTypeContainer` char(4) NOT NULL,
  `libelleTypeContainer` char(50) DEFAULT NULL,
  `longueurCont` decimal(5,0) DEFAULT NULL,
  `largeurCont` decimal(5,0) DEFAULT NULL,
  `hauteurCont` decimal(4,0) DEFAULT NULL,
  `poidsCont` decimal(5,0) DEFAULT NULL,
  `tare` decimal(4,0) DEFAULT NULL,
  `capaciteDeCharge` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`numTypeContainer`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `typecontainer`
--

INSERT INTO `typecontainer` (`numTypeContainer`, `codeTypeContainer`, `libelleTypeContainer`, `longueurCont`, `largeurCont`, `hauteurCont`, `poidsCont`, `tare`, `capaciteDeCharge`) VALUES
(1, 'DFCS', 'Small Dry Freigh Container', '5896', '2350', '2385', NULL, NULL, NULL),
(2, 'DFCM', 'Medium Dry Freight Container', '12035', '2350', '2385', NULL, NULL, NULL),
(3, 'DFCH', 'Hight Cube Dry Freight Container', '12035', '2350', '2697', NULL, NULL, NULL),
(4, 'FRCS', 'Small Flat Rack Container', '5935', '2398', '2103', NULL, NULL, NULL),
(5, 'FRCM', 'Medium Flat Rack Container', '12080', '2398', '2103', NULL, NULL, NULL),
(6, 'OTCS', 'Small Open Top Container', '5893', '2346', '2385', NULL, NULL, NULL),
(7, 'OTCM', 'Medium Open Top Container', '12029', '2346', '2359', NULL, NULL, NULL),
(8, 'RCSM', 'Small Reefer Container', '5451', '2294', '2201', NULL, NULL, NULL),
(9, 'RCME', 'Medium Reefer Container', '11577', '2294', '2210', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `code` smallint(6) NOT NULL AUTO_INCREMENT,
  `raisonSociale` char(50) NOT NULL,
  `adresse` char(80) DEFAULT NULL,
  `cp` char(5) DEFAULT NULL,
  `ville` char(40) DEFAULT NULL,
  `adrMel` char(100) DEFAULT NULL,
  `telephone` char(15) DEFAULT NULL,
  `contact` char(50) DEFAULT NULL,
  `user` char(10) NOT NULL,
  `mdp` char(10) NOT NULL,
  `codePays` char(4) NOT NULL,
  PRIMARY KEY (`code`),
  KEY `fk_codeP` (`codePays`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`code`, `raisonSociale`, `adresse`, `cp`, `ville`, `adrMel`, `telephone`, `contact`, `user`, `mdp`, `codePays`) VALUES
(1, 'Entreprise Bernard', '23 allée des accacias', '78600', 'Conflans sainte honorine', 'Ent.Bernard@orange.fr', '0134504215', 'Bernard Jean', 'jber', 'azerty', 'FR'),
(2, 'Bouchat et Fils', '12 avenue Foch', '75003', 'Paris', 'Bouchat@gmail.com', '0156854575', 'Martin Philippe', 'pmar', 'toto', 'FR'),
(3, 'Gondrand', 'route d\'alicante', '23154', 'Valence', 'contact@gondrandValence.com', '0971354499', 'Granjean Maria', 'mgra', 'maria', 'ES'),
(4, 'Agrolait', '69 rue de Chimay', '5478', 'Wavre', 's.l@agrolait.be', '3281588558', 'Sylvie Lelitre', 'agrolait', '*F2E84D3EB', 'BE'),
(5, 'ASUStek', '31 Hong Kong street', '23410', 'Taiwan', 'info@asustek.com', '+ 1 64 61 04 01', 'Tang', 'asustek', '*F2E84D3EB', 'TW'),
(6, 'Axelor', '12 rue Albert Einstein', '77420', 'Champs sur Marne', 'info@axelor.com', '+33 1 64 61 04', 'Laith Jubair', 'axelor', '*F2E84D3EB', 'FR'),
(7, 'BalmerInc S.A.', 'Rue des Palais 51, bte 33', '1000', 'Bruxelles', 'info@balmerinc.be', '(+32)2 211 34 8', 'Michel Schumacher', 'balmerincs', '*F2E84D3EB', 'BE'),
(8, 'Bank Wealthy and sons', '1 rue Rockfeller', '75016', 'Paris', 'a.g@wealthyandsons.com', '3368978776', 'Arthur Grosbonnet', 'bankwealth', '*F2E84D3EB', 'FR'),
(9, 'Camptocamp', 'PSE-A, EPFL', '1015', 'Lausanne', '', '+41 21 619 10 0', 'Luc Maurer', 'camptocamp', '*F2E84D3EB', 'CH'),
(10, 'Centrale d\'achats BML', '89 Chaussée de Liège', '1000', 'Bruxelles', 'carl.françois@bml.be', '32-258-256545', 'Carl François', 'centraleac', '*F2E84D3EB', 'BE'),
(11, 'China Export', '52 Chop Suey street', '47855', 'Shanghai', 'zen@chinaexport.com', '86-751-64845671', 'Zen', 'chinaexpor', '*F2E84D3EB', 'CN'),
(12, 'Distrib PC', '42 rue de la Lesse', '2541', 'Namur', 'info@distribpc.com', '32081256987', 'Jean Guy Lavente', 'distribpc', '*F2E84D3EB', 'BE'),
(13, 'Dubois sprl', 'Avenue de la Liberté 56', '1000', 'Brussels', 'm.dubois@dubois.be', '', '', 'duboissprl', '*F2E84D3EB', 'BE'),
(14, 'Ecole de Commerce de Liege', '2 Impasse de la Soif', '5478', 'Liege', 'k.lesbrouffe@eci-liege.info', '3242152571', 'Karine Lesbrouffe', 'ecoledecom', '*F2E84D3EB', 'BE'),
(15, 'Elec Import', '23 rue du Vieux Bruges', '2365', 'Brussels', 'info@elecimport.com', '32025897456', 'Etienne Lacarte', 'elecimport', '*F2E84D3EB', 'BE'),
(16, 'Eric Dubois', 'Chaussée de Binche, 27', '7000', 'Mons', 'e.dubois@gmail.com', '(+32).758 958 7', 'Eric Dubois', 'ericdubois', '*F2E84D3EB', 'BE'),
(17, 'Fabien Dupont', 'Blvd Kennedy, 13', '5000', 'Namur', '', '', 'Fabien Dupont', 'fabiendupo', '*F2E84D3EB', 'BE'),
(18, 'Leclerc', 'rue Grande', '29200', 'Brest', 'marine@leclerc.fr', '+33-298.334558', 'Marine Leclerc', 'leclerc', '*F2E84D3EB', 'FR'),
(19, 'Lucie Vonck', 'Chaussée de Namur', '1367', 'Grand-Rosière', '', '', 'Lucie Vonck', 'lucievonck', '*F2E84D3EB', 'BE'),
(20, 'Magazin BML 1', '89 Chaussée de Liège', '5000', 'Namur', 'lucien.ferguson@bml.be', '-569567', 'Lucien Ferguson', 'magazinbml', '*F2E84D3EB', 'BE'),
(21, 'Maxtor', '56 Beijing street', '23540', 'Hong Kong', 'info@maxtor.com', '118528456789', 'Wong', 'maxtor', '*F2E84D3EB', 'CN'),
(22, 'Mediapole SPRL', 'Rue de l\'Angelique, 1', '1348', 'Louvain-la-Neuve', '', '(+32).10.45.17.', 'Thomas Passot', 'mediapoles', '*F2E84D3EB', 'BE'),
(23, 'NotSoTiny SARL', 'Antwerpsesteenweg 254', '2000', 'Antwerpen', '', '(+32).81.81.37.', 'NotSoTiny SARL', 'notsotinys', '*F2E84D3EB', 'BE'),
(24, 'Seagate', '10200 S. De Anza Blvd', '95014', 'Cupertino', 'info@seagate.com', '1408256987', 'Seagate Technology', 'seagate', '*F2E84D3EB', 'US'),
(25, 'SmartBusiness', 'Palermo, Capital Federal', '1659', 'Buenos Aires', 'contact@smartbusiness.ar', '(5411) 4773-966', 'Jack Daniels', 'smartbusin', '*F2E84D3EB', 'AR'),
(26, 'Syleam', '1 place de l\'Église', '61000', 'Alencon', 'contact@syleam.fr', '+33 (0) 2 33 31', 'Sebastien LANGE', 'syleam', '*F2E84D3EB', 'FR'),
(27, 'Tecsas', '85 rue du traite de Rome', '84911', 'Avignon CEDEX 09', 'contact@tecsas.fr', '(+33)4.32.74.10', 'Laurent Jacot', 'tecsas', '*F2E84D3EB', 'FR'),
(28, 'The Shelve House', '25 av des Champs Elysées', '75000', 'Paris', '', '', 'Henry Chard', 'theshelveh', '*F2E84D3EB', 'FR'),
(29, 'Tiny AT Work', 'One Lincoln Street', '5501', 'Boston', 'info@tinyatwork.com', '+33 (0) 2 33 31', 'Tiny Work', 'tinyatwork', '*F2E84D3EB', 'US'),
(30, 'Université de Liège', 'Place du 20Août', '4000', 'Liège', 'martine.ohio@ulg.ac.be', '32-45895245', 'Martine Ohio', 'université', '*F2E84D3EB', 'BE'),
(31, 'Vicking Direct', 'Schoonmansveld 28', '2870', 'Puurs', '', '(+32).70.12.85.', 'Leen Vandenloep', 'vickingdir', '*F2E84D3EB', 'BE'),
(32, 'Wood y Wood Pecker', '', '', 'Kainuu', '', '(+358).9.589 68', 'Roger Pecker', 'woodywoodp', '*F2E84D3EB', 'FI'),
(33, 'ZeroOne Inc', '', '', 'Brussels', '', '', 'Geoff', '', '*F2E84D3EB', 'BE'),
(34, 'rytyry', '23233', '44224', 'ghghfgh', 'wfdvf.Ddd@dfdgfgf.dede', '422424', 'RFGF', 'jberrg', 'azertyr', 'ML'),
(35, 'dindon', 'dwdd', '78440', 'conflans', 'wfdvf.Ddd@dfdgfgf.dede', '453465546', 'Johann', 'jcal', '18/05/2002', 'AD'),
(36, 'fgfdg', 'dfgdfgd', '555', 'fff', 'fff', '1444', 'ddd', 'lion', 'lion', 'AD'),
(37, 'Client', 'hoj', '78700', 'Boulogne', 'nza@gmail.com', '24', 'Pavard', 'jcal', '18/05/2002', 'ML'),
(38, 'test', 'lkjhgf', '78700', 'test', 'test@gmail.com', '075151256', 'xcvx', 'carl', 'carl', 'FR');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `codeVille` int(6) NOT NULL AUTO_INCREMENT,
  `nomVille` char(30) NOT NULL,
  `codePays` char(4) NOT NULL,
  PRIMARY KEY (`codeVille`),
  KEY `fk_codePa` (`codePays`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`codeVille`, `nomVille`, `codePays`) VALUES
(1, 'Le Havre', 'FR'),
(2, 'Marseille', 'FR'),
(3, 'Gennevilliers', 'FR'),
(4, 'Anvers', 'BE'),
(5, 'Barcelone', 'ES'),
(6, 'Hambourg', 'DE'),
(7, 'Rotterdam', 'NL');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_Dev` FOREIGN KEY (`codeDevis`) REFERENCES `devis` (`codeDevis`),
  ADD CONSTRAINT `fk_V` FOREIGN KEY (`codeVilleMiseDisposition`) REFERENCES `ville` (`codeVille`),
  ADD CONSTRAINT `fk_Ville` FOREIGN KEY (`codeVilleRendre`) REFERENCES `ville` (`codeVille`),
  ADD CONSTRAINT `fk_codeU` FOREIGN KEY (`codeUtilisateur`) REFERENCES `utilisateur` (`code`);

--
-- Contraintes pour la table `reserver`
--
ALTER TABLE `reserver`
  ADD CONSTRAINT `fk_Rese` FOREIGN KEY (`codeReservation`) REFERENCES `reservation` (`codeReservation`),
  ADD CONSTRAINT `fk_TypeC` FOREIGN KEY (`numTypeContainer`) REFERENCES `typecontainer` (`numTypeContainer`);

--
-- Contraintes pour la table `tarificationcontainer`
--
ALTER TABLE `tarificationcontainer`
  ADD CONSTRAINT `fk_Dure` FOREIGN KEY (`codeDuree`) REFERENCES `duree` (`codeD`),
  ADD CONSTRAINT `fk_Type` FOREIGN KEY (`numTypeContainer`) REFERENCES `typecontainer` (`numTypeContainer`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_codeP` FOREIGN KEY (`codePays`) REFERENCES `pays` (`codePays`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_codePa` FOREIGN KEY (`codePays`) REFERENCES `pays` (`codePays`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
