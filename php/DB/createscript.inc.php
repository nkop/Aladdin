<?php
$sql ="-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Machine: databases.aii.avans.nl
-- Gegenereerd op: 10 mrt 2016 om 12:01
-- Serverversie: 5.5.29
-- PHP-versie: 5.3.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `jkrieken_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `accountid` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(45) NOT NULL,
  `voornaam` varchar(45) NOT NULL,
  `achternaam` varchar(45) NOT NULL,
  `tussenvoegsel` varchar(15) DEFAULT NULL,
  `geboortedatum` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `straatnaam` varchar(60) NOT NULL,
  `huisnummer` varchar(5) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `woonplaats` varchar(45) NOT NULL,
  `geslacht` char(1) NOT NULL,
  `rechten` int(11) NOT NULL DEFAULT '2',
  `wachtwoord` varchar(45) NOT NULL,
  PRIMARY KEY (`accountid`),
  UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_Account_rechten_idx` (`rechten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`accountid`, `gebruikersnaam`, `voornaam`, `achternaam`, `tussenvoegsel`, `geboortedatum`, `email`, `straatnaam`, `huisnummer`, `postcode`, `woonplaats`, `geslacht`, `rechten`, `wachtwoord`) VALUES
(1, 'mpeinder', 'Mick', 'Peinder', 'de', '2016-03-09', 'mickdep@live.nl', 'Haaftenlaan', '28', '4006 XL', 'Tiel', 'm', 2, 'mick3'),
(2, 'admin', 'admin', 'admin', NULL, '2016-03-01', 'admin@admin.nl', 'adminstraat', '42', '4200 AB', 'hier', 'm', 1, 'admin'),
(6, 'talent', 'theo', 'alent', NULL, '1981-01-18', 'theo@alent.tt', 'straat', '1', '1234 tt', 'plaats', 'm', 2, 'wachtwoord'),
(7, 'wenser', 'willem', 'enser', NULL, '1999-01-01', 'willem@enser.we', 'straat', '2', '1234 tt', 'plaats', 'm', 2, 'wachtword');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `wensenid` int(11) NOT NULL,
  `talentid` int(11) NOT NULL,
  `matchid` varchar(45) NOT NULL,
  PRIMARY KEY (`matchid`),
  KEY `fk_wensen_has_talent_talent1_idx` (`talentid`),
  KEY `fk_wensen_has_talent_wensen1_idx` (`wensenid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pagina`
--

CREATE TABLE IF NOT EXISTS `pagina` (
  `paginanaam` varchar(45) NOT NULL,
  PRIMARY KEY (`paginanaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rechten`
--

CREATE TABLE IF NOT EXISTS `rechten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rechten` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `rechten`
--

INSERT INTO `rechten` (`id`, `rechten`) VALUES
(1, 'Administrator'),
(2, 'Gebruiker'),
(3, 'Inactief');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `statusid` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`statusid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden geëxporteerd voor tabel `status`
--

INSERT INTO `status` (`statusid`, `status`) VALUES
(1, 'Open'),
(2, 'Gematchd'),
(3, 'Vervuld'),
(4, 'Verlopen'),
(5, 'Verwijderd');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `tagid` int(11) NOT NULL AUTO_INCREMENT,
  `tagnaam` varchar(45) NOT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Gegevens worden geëxporteerd voor tabel `tag`
--

INSERT INTO `tag` (`tagid`, `tagnaam`) VALUES
(1, 'Aarde'),
(2, 'Bedrijf'),
(3, 'Bestuur'),
(4, 'Bouw'),
(5, 'Clown / grappen'),
(6, 'Computer'),
(7, 'Dieren'),
(8, 'Feesten'),
(9, 'Film'),
(10, 'Filosofie'),
(11, 'Fotografie'),
(12, 'Geld'),
(13, 'Geloof / religie'),
(14, 'Geschiedenis'),
(15, 'Gezondheid'),
(16, 'Handel'),
(17, 'Handarbeid'),
(18, 'Handwerken'),
(19, 'Hobby'),
(20, 'Hotel'),
(21, 'Huis(houden)'),
(22, 'Innerlijk'),
(23, 'Interieur'),
(24, 'Kinderen'),
(25, 'Kleding'),
(26, 'Knutselen'),
(27, 'Koken'),
(28, 'Kunst'),
(29, 'Landbouw'),
(30, 'Landen'),
(31, 'Leger'),
(32, 'Lezen / voorlezen'),
(33, 'Lifestyle'),
(34, 'Manusje van alles'),
(35, 'Marketing'),
(36, 'Media'),
(37, 'Mode'),
(38, 'Muziek'),
(39, 'Museum'),
(40, 'Natuur'),
(41, 'Ontdekken'),
(42, 'Opsporen'),
(43, 'Ontspanning'),
(44, 'Ontwerpen'),
(45, 'Ontwikkelingswerk'),
(46, 'Opruimen'),
(47, 'Opvoeden'),
(48, 'Organisatie'),
(49, 'Planeten'),
(50, 'Plannen'),
(51, 'Politiek'),
(52, 'Presentatie'),
(53, 'Recht'),
(54, 'Reizen'),
(55, 'Relatie'),
(56, 'Ruimtevaart'),
(57, 'Slapen'),
(58, 'Spelen'),
(59, 'Sport'),
(60, 'Studie'),
(61, 'Techniek'),
(62, 'Telefonie'),
(63, 'Therapie'),
(64, 'Tuinieren'),
(65, 'Uiterlijk'),
(66, 'Vakantie'),
(67, 'Vermaak'),
(68, 'Vervoer(middelen)'),
(69, 'Voeding - drank'),
(70, 'Voorspellen'),
(71, 'Water'),
(72, 'Weerkunde'),
(73, 'Yoga'),
(74, 'Zee'),
(75, 'Zesde zintuig');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `talent`
--

CREATE TABLE IF NOT EXISTS `talent` (
  `talentid` int(11) NOT NULL AUTO_INCREMENT,
  `talenttekst` varchar(280) NOT NULL,
  `Account` int(11) NOT NULL,
  PRIMARY KEY (`talentid`),
  KEY `fk_talent_Account1_idx` (`Account`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `talent`
--

INSERT INTO `talent` (`talentid`, `talenttekst`, `Account`) VALUES
(1, 'Ik ben goed in slapen!', 1),
(2, 'Ik ben goed met computers', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `talent_has_tag`
--

CREATE TABLE IF NOT EXISTS `talent_has_tag` (
  `talent_talentid` int(11) NOT NULL,
  `tag_tagid` int(11) NOT NULL,
  PRIMARY KEY (`talent_talentid`,`tag_tagid`),
  KEY `fk_talent_has_tag_tag1_idx` (`tag_tagid`),
  KEY `fk_talent_has_tag_talent1_idx` (`talent_talentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tekstvak`
--

CREATE TABLE IF NOT EXISTS `tekstvak` (
  `tekstvakid` int(11) NOT NULL,
  `tekstvaktekst` text,
  `pagina_paginanaam` varchar(45) NOT NULL,
  PRIMARY KEY (`tekstvakid`),
  KEY `fk_tekstvak_pagina1_idx` (`pagina_paginanaam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wens`
--

CREATE TABLE IF NOT EXISTS `wens` (
  `wensenid` int(11) NOT NULL AUTO_INCREMENT,
  `tekst` varchar(280) NOT NULL,
  `plaatser` int(11) NOT NULL,
  `vervuller` int(11) DEFAULT NULL,
  `creatie_datum` date NOT NULL,
  `verval_datum` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`wensenid`),
  KEY `fk_wensen_Account1_idx` (`plaatser`),
  KEY `fk_wensen_Account2_idx` (`vervuller`),
  KEY `fk_wensen_status1_idx` (`status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden geëxporteerd voor tabel `wens`
--

INSERT INTO `wens` (`wensenid`, `tekst`, `plaatser`, `vervuller`, `creatie_datum`, `verval_datum`, `status`) VALUES
(2, 'Ik wil mijn toekomst voorspeld hebben', 7, NULL, '2016-03-10', NULL, 1),
(3, 'Ik wil in de ruimte varen.', 7, NULL, '2016-03-10', NULL, 1),
(4, 'Ik wil dat er meer ruimte is in de trein', 7, NULL, '2016-03-10', NULL, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `wens_has_tag`
--

CREATE TABLE IF NOT EXISTS `wens_has_tag` (
  `wens_wensenid` int(11) NOT NULL,
  `tag_tagid` int(11) NOT NULL,
  PRIMARY KEY (`wens_wensenid`,`tag_tagid`),
  KEY `fk_wens_has_tag_tag1_idx` (`tag_tagid`),
  KEY `fk_wens_has_tag_wens1_idx` (`wens_wensenid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_Account_rechten` FOREIGN KEY (`rechten`) REFERENCES `rechten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `fk_wensen_has_talent_talent1` FOREIGN KEY (`talentid`) REFERENCES `talent` (`talentid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wensen_has_talent_wensen1` FOREIGN KEY (`wensenid`) REFERENCES `wens` (`wensenid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `talent`
--
ALTER TABLE `talent`
  ADD CONSTRAINT `fk_talent_Account1` FOREIGN KEY (`Account`) REFERENCES `account` (`accountid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `talent_has_tag`
--
ALTER TABLE `talent_has_tag`
  ADD CONSTRAINT `fk_talent_has_tag_tag1` FOREIGN KEY (`tag_tagid`) REFERENCES `tag` (`tagid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_talent_has_tag_talent1` FOREIGN KEY (`talent_talentid`) REFERENCES `talent` (`talentid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `tekstvak`
--
ALTER TABLE `tekstvak`
  ADD CONSTRAINT `fk_tekstvak_pagina1` FOREIGN KEY (`pagina_paginanaam`) REFERENCES `pagina` (`paginanaam`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `wens`
--
ALTER TABLE `wens`
  ADD CONSTRAINT `fk_wensen_Account1` FOREIGN KEY (`plaatser`) REFERENCES `account` (`accountid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wensen_Account2` FOREIGN KEY (`vervuller`) REFERENCES `account` (`accountid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wensen_status1` FOREIGN KEY (`status`) REFERENCES `status` (`statusid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `wens_has_tag`
--
ALTER TABLE `wens_has_tag`
  ADD CONSTRAINT `fk_wens_has_tag_tag1` FOREIGN KEY (`tag_tagid`) REFERENCES `tag` (`tagid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wens_has_tag_wens1` FOREIGN KEY (`wens_wensenid`) REFERENCES `wens` (`wensenid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
"