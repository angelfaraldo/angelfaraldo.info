-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: rdbms
-- Generation Time: Apr 24, 2014 at 08:54 AM
-- Server version: 5.5.31-log
-- PHP Version: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `DB1670230`
--

-- --------------------------------------------------------

--
-- Table structure for table `bios`
--

CREATE TABLE IF NOT EXISTS `bios` (
  `lang` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `bio` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bios`
--

INSERT INTO `bios` (`lang`, `bio`) VALUES
('GA', 'Ángel Faraldo (Ferrol, 1980) é un músico experimental comprometido coa creación, a promoción e o ensino da música actual. Activo como compositor e improvisador, a súa obra complétase con instalacións sonoras, accións site-specific e deseño de son para teatro, danza e ópera. Está interesado na exploración sistemática de procesos que maximizan recursos mínimos, como se materializa no seu ciclo <i>The Feedback Study Series</i> (2010-2013), o seu sintetizador dixital <i>MISS</i> (2009) ou a súa concepción da no-input mixer.<br>Ten colaborado con colectivos como POW Ensemble, Opera2day ou Modelo62 e artistas da talla de Ana Ladas, Matteo Marangoni, Ezequiel Menalled, Tanja Smit, Yolanda Uriz ou Raoul van der Weide. O seu traballo o levou a festivais e centros de Europa e Norteamérica, tales como Deep Wireless (CA), Spark (USA), Audio Art (PL), Gaudeamus Muziekweek, November Music, STEIM, Bimhuis (NL), Biennial of Contemporary Music Koper (SI), SINKRO, In-Sonora, Via-Stellae, CGAC (ES), ElectroMediaWorks (GR), Le104 (FR) ou The Vortex (UK).<br>Ademais, desenvolve un intenso labor como intérprete e realizador de música electrónica en vivo dende Vertixe Sonora Ensemble e dedícase ao asesoramento e desenvolvemento de ferramentas dixitais para instrumentistas e compositores. En  2010 crea xunto a Ramón Souto o Instituto Galego de Sonoloxía, dende onde realiza labores de difusión e formación a través de concertos e obradoiros. Estudou no Real Conservatorio de Música de Madrid e no Instituto de Sonoloxía da Haia (NL). Actualmente é estudante de doutoramento no Music Technology Group da Universidade Pompeu Fabra, en Barcelona.'),
('ES', 'Ángel Faraldo (Ferrol, 1980) es un músico experimental comprometido con la creación, la promoción y la enseñanza de la música actual. Activo como compositor e improvisador, su obra se completa con instalaciones sonoras, acciones site-specific y diseño de sonido para teatro, danza y ópera. Está interesado en la exploración sistemática de procesos que maximizan recursos mínimos, como se materializa en su ciclo <i>The Feedback Study Series</i> (2010-2013), su sintetizador digital <i>MISS</i> (2009) o su concepción de la no-input mixer.<br>Ha colaborado con colectivos como POW Ensemble, Opera2day o Modelo62 y artistas de la talla de Ana Ladas, Matteo Marangoni, Ezequiel Menalled, Tanja Smit, Yolanda Uriz o Raoul van der Weide. Su trabajo le ha llevado a festivales y centros de arte de Europa y Norteamérica, tales como Deep Wireless (CA), Spark (USA), Audio Art (PL), Gaudeamus Muziekweek, November Music, STEIM, Bimhuis (NL), Biennial of Contemporary Music Koper (SI), SINKRO, In-Sonora, Via-Stellae, CGAC (ES), ElectroMediaWorks (GR), Le104 (FR) o The Vortex (UK).<br>Además, desarrolla una intensa labor como intérprete y realizador de música electrónica en vivo, especialmente desde Vertixe Sonora Ensemble, y se dedica al asesoramiento y desarrollo de herramientas digitales para instrumentistas y compositores. En 2010, crea junto a Ramón Souto el Instituto Galego de Sonoloxía, desde donde realiza labores de difusión y formación a través de conciertos y talleres. Ha estudiado en el Real Conservatorio de Música de Madrid y en el Instituto de Sonología de La Haya (NL). Actualmente es estudiante de doctorado en el Music Technology Group de la Universidad Pompeu Fabra, en Barcelona.'),
('EN', 'Ángel Faraldo (Spain, 1980) is a versatile experimental musician whose activities encompass improvisation, electronic music composition, sound installation, sound design (Médée: Opera2day, NL), performance of electronic music repertoire (Vertixe Sonora Ensemble, ES), consultancy and development of electronic music systems and teaching.He is interested in the systematic exploration of processes that maximize minimal resources, as materialized in his cycle The Feedback Study Series (2010-2013), his digital synthesizer MISS or his approach to no-input mixing.?His work has been presented in Europe and North-America, in festivals such as Deep Wireless (CA), Spark (USA), Audio Art (PL), Gaudeamus Muziekweek, November Music (NL), Biennial of Contemporary Music Koper (SI), SINKRO, In-Sonora, Via Stellae (ES), ElectroMediaWorks (GR) and venues such as STEIM, Bimhuis (NL), CGAC (ES), Le104 (FR) or The Vortex (UK).He has studied Guitar at the Royal Conservatoire of Madrid and holds a Master’s Degree in Sonology from the Royal Conservatoire in The Hague. Currently, he is a PhD student at the Music Technology Group, Pompeu Fabra University, in Barcelona.');

-- --------------------------------------------------------

--
-- Table structure for table `EVENTS`
--

CREATE TABLE IF NOT EXISTS `EVENTS` (
  `lang` varchar(2) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'EN',
  `fecha` date DEFAULT NULL,
  `evento` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `venue` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `town` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  KEY `LANG` (`lang`),
  KEY `YEAR` (`fecha`),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `EVENTS`
--

INSERT INTO `EVENTS` (`lang`, `fecha`, `evento`, `venue`, `town`) VALUES
('EN', '2014-04-24', 'solo performance with MISS', 'Mixtur Festival, Fabra i Coats', 'Barcelona'),
('ES', '2014-04-02', 'Conferencia sobre Música Electrónica Experimental', 'MARCO', 'Vigo'),
('EN', '2014-03-26', 'Lecture on The History of Electronic Music', 'MARCO', 'Vigo'),
('ES', '2014-04-24', 'Solo con MISS', 'Festival Mixtur, Fabra i Coats', 'Barcelona'),
('GA', '2014-04-24', 'Solo con MISS', 'Festival Mixtur, Fabra i Coats', 'Barcelona'),
('EN', '2014-04-02', 'Lecture about Experimental Electronic Music', 'MARCO', 'Vigo'),
('GA', '2014-04-02', 'Conferencia sobre Música Electrónica Experimental', 'MARCO', 'Vigo'),
('ES', '2014-03-26', 'Conferencia sobre Historia de la Música Electrónica', 'MARCO', 'Vigo'),
('GA', '2014-03-26', 'Conferencia sobre Historia da Música Electrónica', 'MARCO', 'Vigo'),
('EN', '2013-12-09', 'Sound Design, Live-Electronics and Sound-Diffusion for Cherubini''s Opera ''Médée'' (Opera2day)', 'Theater De Vest', 'Alkmaar'),
('EN', '2013-11-27', 'Médée', 'Koninklijke Schouwburg', 'The Hague'),
('EN', '2013-11-26', 'Médée', 'Koninklijke Schouwburg', 'The Hague'),
('EN', '2013-11-25', 'Médée', 'Koninklijke Schouwburg', 'The Hague'),
('EN', '2013-11-23', 'Médée', 'Theater aan de Schie', 'Schiedam'),
('EN', '2013-12-08', 'Médée', 'De Doelen', 'Rotterdam'),
('EN', '2013-10-22', 'Live-Electronics and Sound-Diffusion with Vertixe Sonora Ensemble. Works by Alberto Posadas and Stefan Prins', 'Xornadas de Música Contemporánea', 'Santiago de Compostela'),
('EN', '2013-11-06', '"Rueda" - Interactive Feedback Installation for Spinning Microphones (until Nov 10th)', 'November Music, Het Kruithuis', 'Den Bosch'),
('EN', '2013-10-08', 'Live-Electronics and Sound-Diffusion with Vertixe Sonora Ensemble. Works by Hugo Morales, Santiago Díez-Fischer and Charles Antoine Frechette', 'CGAC', 'Santiago de Compostela'),
('EN', '2013-10-06', 'Improv set with Ariel Ninas (Hurdy-Gurdy)', 'A Catrineta', 'Santiago de Compostela'),
('EN', '2013-10-06', 'No-input-mixer solo performance', 'Alg-a lab', 'Vigo'),
('EN', '2013-10-06', 'No-input-mixer solo performance', 'Casa do Saber', 'Lugo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
