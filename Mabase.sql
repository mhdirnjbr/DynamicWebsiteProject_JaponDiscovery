-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 02, 2020 at 05:59 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Japon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Chibu`
--

CREATE TABLE `Chibu` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Chugoku`
--

CREATE TABLE `Chugoku` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Hokkaido`
--

CREATE TABLE `Hokkaido` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `espace` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL,
  `img1` varchar(25) NOT NULL,
  `img2` varchar(25) NOT NULL,
  `img3` varchar(25) NOT NULL,
  `img4` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Hokkaido`
--

INSERT INTO `Hokkaido` (`id_endroit`, `nom_endroit`, `location_endroit`, `thème_endroit`, `espace`, `description_endroit`, `date_ouverture_endroit`, `date_fermeture_endroit`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'LA STATION DE SKI DE NISEKO', 'Niseko', 'sportive', 'extérieur', 'Station de ski très connu au japon', '2019-11-23', '2020-05-06', 'niseko1.jpg', 'niseko2.jpg', 'niseko3.jpg', 'niseko4.jpg'),
(2, 'LE PORT FLORISSANT D’HAKODATE', 'Hakodate', 'visite', 'extérieur', 'Troisième plus grande ville d’Hokkaido, Hakodate est probablement la plus occidentale des villes japonaises.\r\n Les voyageurs viennent y visiter ses nombreux monuments étrangers,\r\n dont notamment le fort Goryokaku, et son marché matinal où ils peuvent faire l’expérience du quotidien des locaux.', NULL, NULL, '', '', '', ''),
(3, 'PARC DE MATSUMAE', 'Matsumae', 'visite', 'extérieur', 'Dans ce lieu vous pourrez admirer les 10 000 cerisiers dont 250 variétés différentes en fleurs près de l\'unique château \r\nde Hokkaido.\r\nLes plus belles floraisons du Japon\r\nCe parc de Matsumae prend des airs magiques au printemps car il affiche une saison de floraison plus longue que les autres.\r\n Des fleurs roses et blanches délicates y apparaissent ainsi de fin avril à fin mai.\r\nSon nom a d\'ailleurs était donné à un personnage féminin du manga Tokyo Ghoul.', NULL, NULL, '', '', '', ''),
(4, 'PARC ÔDÔRI ', 'Sapporo', 'visite', 'extérieur', 'Visitez le Central park japonais , immense jardin entouré de grands buildings ,\r\n là où la nature garde ses droits Sur plus d\'un kilomètre et demi, surnommé le \"parc-boulevard\", découpé en treize jardins de taille égale.\r\nCe jardin marque la frontière entre le nord et le sud de Sapporo. ', NULL, NULL, '', '', '', ''),
(5, 'LES ONSENS DE NOBORIBETSU', 'Noboribetsu', 'détente', 'extérieur', 'Large complexe de maisons de bain et d’hôtels typiques.Son surnom étant \"la Vallée de l\'enfer\".\r\nLes sources thermales de Noboribetsu font partie des dix meilleures du pays. \r\nLes eaux riches en minéraux de la région qui jaillissent du sol sont réputées pour leurs propriétés curatives. \r\nLes eaux laiteuses infusées de soufre adoucissent et rafraîchissent la peau. D\'autres bassins riches en sel et en métaux ont des bienfaits différents pour la santé, qui sont souvent fièrement énumérés dans les zones de baignade de chaque hôtel.\r\nPasser une journée dans les bains\r\npeut être non seulement relaxant mais aussi revitalisant.', NULL, NULL, '', '', '', ''),
(6, 'LE LAC MASHU', 'Teshikaga', 'visite', 'extérieur', 'Le lac Mashū surnommé \"lac du diable\" par les Aïnous ou selon son kanji \"la montagne à zone nettoyée\".Situé dans le parc national de Akan, le lac Mashu a la particularité d’être le lac LE PLUS transparent AU MONDE. Sa couleur émeraude et sa fine brume lui offrent une atmosphère bien particulière.', NULL, NULL, '', '', '', ''),
(7, 'LE CANAL D\'OTARU', 'Otaru ', 'visite', 'extérieur', 'Voici le Venise Japonais, idéal pour un rendez-vous amoureux  , promenez-vous dans cette ville traversée par d\'anciens canaux utilisées le transport des marchandises.\r\nDe plus, il y\'a l’événement appelé \'Otaru-Yukiakari-no-Michi\'  où les gens disposent des bougies dans ce canal , ce sont les bougies de Ukidama . Cette événement qui a lieu en février attire plus de 500.000 et est d\'une beauté sans pareil.', NULL, NULL, '', '', '', ''),
(8, 'ZOO D\'ASAHIYAMA', 'Kuranuma Higashiasahikawacho,Asahikawa', 'visite', 'extérieur', 'Zoo contentant plus de 700 animaux de 124 espèces différentes. Cet endroit est idéal pour une sortie en famille . Ce zoo s\'exprime par son attention à montrer le comportement naturel des animaux . Ce fut le premier zoo du japon à réussir la reproduction naturelle des animaux des  régions polaires.Ne manquez pas l\'attraction principales de ce zoo étant \'la marche des pingouins\'.', NULL, NULL, '', '', '', ''),
(9, 'HOKKAIDO NINJA DO', 'Sapporo', 'sportive', 'intérieur', 'Vous aimez les ninjas ? Alors enfilez un kimono de ninja , votre bandana et plongez dans l\'univers formidable des ninjas en étant enfant comme adulte (4ans minimum).Très bonne activité à faire en famille . Vivez comme vos héros japonais avec des activités sportives comme les méthodes de marche , donbatsu, jeu d\'épée, marche sur la corde raide, shuriken, flèche soufflante, combat simulé, techniques de cachette.\r\nPensez à réserver,les places sont limités.\r\nDurée : 1h30 ', NULL, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Kansai`
--

CREATE TABLE `Kansai` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Kanto`
--

CREATE TABLE `Kanto` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `espace` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL,
  `img1` varchar(25) NOT NULL,
  `img2` varchar(25) NOT NULL,
  `img3` varchar(25) NOT NULL,
  `img4` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Kanto`
--

INSERT INTO `Kanto` (`id_endroit`, `nom_endroit`, `location_endroit`, `thème_endroit`, `espace`, `description_endroit`, `date_ouverture_endroit`, `date_fermeture_endroit`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'SANCTUAIRE SENSO-JI\r\n', 'Asakusa', 'visite', 'extérieur', 'Passez la célèbre Kaminarimon (\"Porte du tonnerre\"), auquel est suspendue la lanterne de papier rouge la plus grande du Japon, qui pèse 700 kg. Après cette porte s\'y trouve une rue remplie de touriste et de commerçants pour atteindre le temple dédié à la déesse bouddhique Kannon(boddhisattva qui est très populaire  et vénéré au Japon car elle incarne la compassion.Puis au bout de cette allée, vous apercevrez la Hozomon(\"Porte de la salle aux trésors\"). Elle abrite deux grandes statues de Nio.\r\nLe hondô apparaitra ensuite il est précédé d\'un grand encensoir, le jokoro. Les fidèles ont pour habitude de se \"baigner\" dans la fumée d\'encens, censée posséder un pouvoir thérapeutique. À gauche du hondô s\'élève la pagode à 5 étages, récemment rénovée qui est très célèbre également. ', NULL, NULL, 'senso1.jpg', 'senso2.jpg', 'senso3.jpg', 'senso4.jpg'),
(2, 'TOKYO TOWER', 'Minato,Tokyo', 'visite', 'extérieur', 'Elle fut réalisé en 1957 puis inaugurée en 1958 .Du haut de ces 332,6 mètres(300m pour la Tour Eiffel) Elle en pèse cependant la moitié . L\'acier qui la constitue provient en partie de chars américains endommagés durant la Guerre de Corée. Elle a été conçue pour résister aux catastrophes naturelles présentent là-bas.Elle représente le miracle économique japonais et sa régénération d\'après guerre. Elle possède 2 étages le premier à 150 mètres, le second à 250 mètres.La première plateforme peut s\'atteindre via un ascenseur, ou en gravissant les 600 marches C\'est ici que vous pourrez vous tenir sur le fameux plancher de verre, qui permet d\'admirer le sol à 145 mètres sous vos pieds. Et la plus haute est située juste sous l\'antenne de la tour.', NULL, NULL, 'zao1.png', 'zao2.png', 'zao3.png', 'zao4.png'),
(3, 'TOKYO DISNEY RESORT', 'Urayasu,Tokyo', 'détente', 'extérieur', 'Tokyo DisneyLand et DisneySea ! Venez découvrir en famille un Disney classic et un autre sur les fond marins ! Ce parc est tout de même le parc d\'attraction le plus visité au monde alors pourquoi ne pas y aller ? DisneySea étant une exclusivité japonaise et étant considéré comme le meilleur parc voici une raison de plus .Des attractions encore plus folle que null part ailleurs ,inédite et nombreuse en plus d\'un décor magique ! ', NULL, NULL, 'disney1.png', 'disney2.png', 'disney3.png', 'disney4.png'),
(4, 'JOYPOLIS', 'Tokyo, Minato City', 'détente', 'intérieur', 'Il ne fait pas beau ? Alors foncez à cette immense salle d\'arcade appartenant à SEGA .\r\nVous pourrez y jouer à des attractions en réalité augmenté ou a des bornes d\'arcade pour y détruire des zombies , idéal pour une après-midi en famille lors de mauvais temps.', NULL, NULL, 'joypolis1.png', 'joypolis2.png', 'joypolisi3.png', 'joypolis4.png'),
(5, 'QUARTIER SHIBUYA', 'Tokyo', 'détente', 'extérieur', 'Ce quartier mythique de Tokyo , surement le plus connu propose son célèbre \"grand carrefour de Shibuya\" il est noir de monde ce qui en fait sa particularité avec ses grands buildings . Les tours 109 : ces immense tours remplies de magasins ayant la particularité d\'avoir une tour réservé aux hommes et une pour les femmes.\r\nIl y a aussi la statue de Hachiko, statue représentant un célèbre chien .', NULL, NULL, 'shibuya1.png', 'shibuya2.png', 'shibuya3.png', 'shibuya4.png'),
(6, 'ILE ODAIBA', 'Tokyo', 'détente', 'extérieur', 'Ile artificielle de Tokyo accessible par un bateau en 50 min depuis le quartier d’Asakusa , par avion ou par train .\r\nCette ile permet une vue imprenable sur le magnifique vue sur le \"Rainbow Bridge\", elle dispose d\'un parc d\'attraction sur le thème des jeux vidéos , un centre commercial\r\n,le showroom de Toyota , une des plus grandes roues du monde et une source d\'eau thermal(osen) comme répondu au Japon.Cette ile possède donc multe d\'activité et de boutique ce qui l\'anime. ', NULL, NULL, 'Odaiba1.png', 'Odaiba2.png', 'Odaiba3.png', 'Odaiba4.png'),
(7, 'QUARTIER ', 'Tokyo', 'visite', 'intérieur', 'L\'aquarium Aquamarine à Fukushima contient à la fois un zoo, un aquarium et un terrarium où l\'on trouve les habitats recréés de rivières, de côtes et de vie marine typiques de la côte Pacifique et de Fukushima.\r\nLa particularité de ce lieu est qu\'il est possible d\'attraper et cuisiner votre propre poisson, cela fait partie des objectifs du musée en matière de pêche durable et d\'éducation.', NULL, NULL, 'aquamarine1.png', 'aquamarine2.png', 'aquamarine3.png', 'aquamarine4.png'),
(8, 'QUARTIER DE', 'Tokyo', 'visite', 'extérieur', 'Site archéologique classé à l\'UNESCO.\r\nLieu comptant un temple de style boudhiste ,son jardin et son étang formant un ensemble parfait censé représenter et symboliser le paradis .Outre le jardin, la promenade dans le domaine du temple donne aussi à voir de nombreux vestiges attestant de sa grandeur et de son importance passées.La ville fut fondée selon la cosmologie du bouddhisme de la Terre Pure, Jôdo, un courant bouddhiste japonais qui s’est formé au VIIIe siècle. Temples, bâtiments et jardins représentaient la Terre Pure de Bouddha, dans ce monde et dans celui de l’au-delà.', NULL, NULL, 'hieaizumi1.png', 'hieaizumi2.png', 'hieaizumi3.png', 'hieaizumi4.png'),
(9, 'TROIS MONTS DEWA', 'Yamagata', 'visite', 'extérieur', 'Les pèlerins gravissent ces trois montagnes depuis près de 1 500 ans. L’hiver, les fortes neiges rendent inaccessibles les monts Gassan et Yudono. Aussi, le temple Sanjin Gosaiden, situé sur le mont Haguro, rassemble les quelques pèlerins qui occupent les lieux. Il est possible de s’y rendre en voiture ou en bus, via une route à péage. Il est cependant recommandé d’opter pour la voie traditionnelle, soit une marche en suivant le ishidan, ce sentier constitué de 2 446 marches filant à travers la forêt de cèdres. D’autant plus qu’en chemin, 33 personnages sculptés apportent la prospérité à ceux qui parviennent à tous les trouver.', NULL, NULL, 'dewa1.png', 'dewa2.png', 'dewa3.png', 'dewa4.png');

-- --------------------------------------------------------

--
-- Table structure for table `Kyushu`
--

CREATE TABLE `Kyushu` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `questionAnime`
--

CREATE TABLE `questionAnime` (
  `id_question` int(11) NOT NULL,
  `texte_question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questionAnime`
--

INSERT INTO `questionAnime` (`id_question`, `texte_question`) VALUES
(1, 'Dans quel manga le héros veut devenir le roi des pirates ?'),
(2, 'Dans quel manga Izuku Midoriya veut devenir le super-héros numéro 1 ?'),
(3, 'Dans quel manga un garçon reçoit un journal intime permettant de retirer la vie de la personne de son choix ?'),
(4, 'Comment Shanks (one piece) a-t-il perdu un bras ?'),
(5, 'Quel est le manga dans lequel on suit une équipe de football américain ?'),
(6, 'En quoi consiste le métier de Mangaka ?'),
(7, 'Eshiro Oda est l\'auteur de quel manga ?'),
(8, 'Quel manga suit l\'aventure d\'un jeune ninja aux cheveux jaune ?'),
(9, 'Dans quel manga peut-on rencontrer un certain light yagami ?'),
(10, 'Quel est le fruit préféré de Ryuk ?'),
(11, 'Dans le manga One Piece quel objet une fois manger donne des pouvoirs stupéfiants ?'),
(12, 'Quel est l\'inconvénient à manger un fruit du démon ? '),
(13, 'Quelle est la célèbre prison de One Piece ?'),
(14, 'Dans One Piece qu\'est ce qu\'un shishibukai ?'),
(15, 'Dans my hero academia quel est le pourcentage d\'enfant naissant avec un super-pouvoir ?'),
(16, 'Qu\'est ce qu\'une ghoul ?'),
(17, 'Dans quel équipe est Eren Jäger ?'),
(18, 'Sur quelle ile se trouve le One Piece ?'),
(19, 'Combien de fruit du demon possède (Marshall.D.Teach) barbe Noir ?'),
(20, 'Comment s\'appelle le restaurant sur la mer où travaillait sanji ?'),
(21, 'De quel pouvoir a hérité Izuku Midoriya ?'),
(22, 'Qui était le symbole de la paix et l\'exemple du héros de my hero academia ?'),
(23, 'Quel pouvoir possède l\'antagoniste de my hero academia ?'),
(24, 'Quel est le nom du manga écrit par Sui Ishida ?'),
(25, 'Quel est le nom de famille de Naruto ?'),
(26, 'Quel est le célèbre journal hebdomadaire japonais où l\'on retrouve la première parution d\'un manga ?'),
(27, 'Qu\'est-ce un Shôjo ?'),
(28, 'A quel groupe appartient Sabo dans one piece ?'),
(29, 'Qui est le chef des révolutionnaires dans One Piece ?'),
(30, 'Qu\'est ce qu\'un Seinen ?'),
(31, 'De quel planète viennent les Super Saïyen ? '),
(32, 'Qui est Shenron ?'),
(33, 'Quel est l\'objet une fois réuni par 7 permet de réaliser des voeux ?');

-- --------------------------------------------------------

--
-- Table structure for table `questionJapon`
--

CREATE TABLE `questionJapon` (
  `id_question` int(11) NOT NULL,
  `texte_question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questionJapon`
--

INSERT INTO `questionJapon` (`id_question`, `texte_question`) VALUES
(1, 'Quelle est la capitale du Japon ?'),
(2, 'Quelle est la superficie du japon ?'),
(3, 'Combien y a t\'il de régions au Japon ?'),
(4, 'Combien y a t\'il de préfectures au Japon ?'),
(5, 'Quelle est le nombre d\'habitants en millions d’habitants ?'),
(6, 'Quelle place occupe le Japon dans le classement des pays les plus peuplés ?'),
(7, 'A quel rang se situe le Japon concernant l\'exportation mondiale ?'),
(8, 'A quel rang se situe le Japon concernant l\'importation mondiale ?'),
(9, 'Comment se traduit le Japon en japonais ?'),
(10, 'Qui est l\'empereur du Japon ?'),
(11, 'Quelle est la signification du Japon(日本)?'),
(12, 'Quel est le régime du Japon ?'),
(13, 'Combien l\'archipel du Japon possède d\'ile ?'),
(14, 'Quel est le pourcentage d\'occupation des montagnes au Japon ?'),
(15, 'Quelle est la région la plus grande du Japon ? '),
(16, 'Quelle est la monnaie du Japon ?'),
(17, 'Que signifie le terme \"sakura\" en français ?'),
(18, 'Qu\'est-ce qu\'un \"onsen\" ?'),
(19, 'Comment s\'appelle ce quartier souvent fréquenté par les \"geeks\" et les \"otakus\" de Tokyo ?'),
(20, 'La rentrée scolaire au Japon se passe en...'),
(21, 'Lorsqu\'ils vont à l\'école, les jeunes japonais ne mangent pas à la cantine mais ont des sortes de paniers repas tout prêt qu\'ils appellent...'),
(22, 'Qu\'est-ce qu\'un \"purikura\" ?'),
(23, 'Qu\'est-ce qu\'une \"geiko\" ?'),
(24, 'Qu\'est-ce qu\'un \"ryokan\" ?'),
(25, 'Edo était l\'ancien nom de la ville de...'),
(26, 'Quelle fleur figure sur le Sceau impérial du Japon ?'),
(27, 'A quand remonte la dernière éruption du mont Fuji ?'),
(28, 'Quel est le sport national du Japon ?'),
(29, 'Qu\'est-ce que le haïku ?'),
(30, 'Quelle ville fut la première capitale du Japon ?');

-- --------------------------------------------------------

--
-- Table structure for table `reponseAnime`
--

CREATE TABLE `reponseAnime` (
  `id_reponse` varchar(60) NOT NULL,
  `texte_reponse` text NOT NULL,
  `correct` int(1) NOT NULL DEFAULT '0',
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reponseAnime`
--

INSERT INTO `reponseAnime` (`id_reponse`, `texte_reponse`, `correct`, `id_question`) VALUES
('A1', 'one piece', 1, 1),
('A13', 'En sauvant Luffy d\'un \'monstre\'', 1, 4),
('A17', 'inazuma eleven', 0, 5),
('A21', 'Celui qui ajoute seulement la couleur dans le manga', 0, 6),
('A25', 'ajin', 0, 7),
('A29', 'bleach', 0, 8),
('A33', 'tokyo ghoul', 0, 9),
('A37', 'poire', 0, 10),
('A41', 'potion magique', 0, 11),
('A45', 'ne plus avoir de gouts ', 0, 12),
('A49', 'Impel down', 1, 13),
('A5', 'tokyo ghoul', 0, 2),
('A53', 'pirate très puissant ayant fait un marché avec le Gouvernement Mondial.', 1, 14),
('A57', '20%', 0, 15),
('A61', 'espèce qui mange les êtres humains', 1, 16),
('A9', 'erased', 0, 3),
('B10', 'blue exorcist', 0, 3),
('B14', 'Lors d\'un combat pour protéger Luffy ', 0, 4),
('B18', 'Kuroko no basket', 0, 5),
('B2', 'my hero academia', 0, 1),
('B22', 'C\'est l\'auteur du manga ', 1, 6),
('B26', 'demon slayer', 0, 7),
('B30', 'Naruto', 1, 8),
('B34', 'shingeki no kijin', 0, 9),
('B38', 'banane', 0, 10),
('B42', 'bracelet aux pouvoirs mystérieux\r\n', 0, 11),
('B46', 'ne plus pouvoir nager', 1, 12),
('B50', 'Askaban', 0, 13),
('B54', 'pirate peu puissant.', 0, 14),
('B58', '10%', 0, 15),
('B6', 'my hero academia', 1, 2),
('B62', 'espèce qui ne meurt pas ', 0, 16),
('C11', 'death note', 1, 3),
('C15', 'On ne sait pas comment ', 0, 4),
('C19', 'eyeshield21', 1, 5),
('C23', 'Celui qui anime le manga', 0, 6),
('C27', 'one punch man', 0, 7),
('C3', 'death note', 0, 1),
('C31', 'erased', 0, 8),
('C35', 'death note', 1, 9),
('C39', 'pomme', 1, 10),
('C43', 'boucle d\'oreille', 0, 11),
('C47', 'aucun', 0, 12),
('C51', 'Impel Top', 0, 13),
('C55', 'Prisonnier du gouvernement mondial', 0, 14),
('C59', '60%', 0, 15),
('C63', 'animal de l\'enfer', 0, 16),
('C7', 'inazuma eleven', 0, 2),
('D12', 'your lie in april', 0, 3),
('D16', 'Se l\'ai couper lui-même par preuve de courrage', 0, 4),
('D20', 'Dream team', 0, 5),
('D24', 'Celui qui fait uniquement les couvertures', 0, 6),
('D28', 'One piece', 1, 7),
('D32', 'psycho pass', 0, 8),
('D36', 'Naruto', 0, 9),
('D4', 'bleach', 0, 1),
('D40', 'fraise', 0, 10),
('D44', 'fruits du démon', 1, 11),
('D48', 'perdre la vue', 0, 12),
('D52', 'Impel hell', 0, 13),
('D56', 'chef du gouvernement mondial', 0, 14),
('D60', '80%', 1, 15),
('D64', 'un monstre à tête d\'ours', 0, 16),
('D8', 'death note', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reponseJapon`
--

CREATE TABLE `reponseJapon` (
  `id_reponse` varchar(60) NOT NULL,
  `texte_reponse` text,
  `correct` int(1) NOT NULL DEFAULT '0',
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reponseJapon`
--

INSERT INTO `reponseJapon` (`id_reponse`, `texte_reponse`, `correct`, `id_question`) VALUES
('A1', 'Tokyo', 1, 1),
('A13', '45', 0, 4),
('A17', '116,5 millions (2018)', 0, 5),
('A21', 'le onzième pays le plus peuplé du monde', 1, 6),
('A25', '2e rang mondial pour l\'exportation de marchandises', 0, 7),
('A29', 'le 1e pour ses importations ', 0, 8),
('A33', '« pays du soleil levant »', 1, 11),
('A37', 'Nihon ou Nippon', 1, 9),
('A41', 'monarchie institutionnelle', 0, 12),
('A45', 'Naruhito', 1, 10),
('A49', '4 852 îles de plus de 100 m2 ', 0, 13),
('A5', '350.915 km²', 0, 2),
('A53', '40% du territoire', 0, 14),
('A57', 'Kanto', 0, 15),
('A61', 'Le Yen', 1, 16),
('A9', '6', 0, 3),
('B10', '7', 0, 3),
('B14', '51', 0, 4),
('B18', '106,5 millions (2018)', 0, 5),
('B2', 'Kyoto', 0, 1),
('B22', 'le douzième pays le plus peuplé du monde', 0, 6),
('B26', '4e rang mondial pour l\'exportation de marchandises', 1, 7),
('B30', 'le 7e pour ses importations ', 0, 8),
('B34', '« pays du soleil couchant »', 0, 11),
('B38', 'Nikon ou Nippon', 0, 9),
('B42', 'monarchie constitutionnelle', 1, 12),
('B46', 'Baruhito', 0, 10),
('B50', '6 852 îles de plus de 100 m2 ', 1, 13),
('B54', '80% du territoire', 0, 14),
('B58', 'Chibu', 0, 15),
('B6', '377. 915 km²', 1, 2),
('B62', 'le dollar\r\n', 0, 16),
('C11', '8', 1, 3),
('C15', '48', 0, 4),
('C19', '136,5 millions (2018)', 0, 5),
('C23', 'le dixième pays le plus peuplé du monde', 0, 6),
('C27', '6e rang mondial pour l\'exportation de marchandises', 0, 7),
('C3', 'Osaka', 0, 1),
('C31', 'le 5e pour ses importations ', 1, 8),
('C35', '« pays du soleil éblouissant »', 0, 11),
('C38', 'Nimon ou Nippon', 0, 9),
('C43', 'dictature ', 0, 12),
('C47', 'Daruhito', 0, 10),
('C51', '5 852 îles de plus de 100 m2 ', 0, 13),
('C55', '70% du territoire', 1, 14),
('C59', 'Chugoku', 0, 15),
('C63', 'le roupie', 0, 16),
('C7', '250.915 km²', 0, 2),
('D12', '9', 0, 3),
('D16', '47', 1, 4),
('D20', '126,5 millions (2018)', 1, 5),
('D24', 'le huitième pays le plus peuplé du monde', 0, 6),
('D28', '3e rang mondial pour l\'exportation de marchandises', 0, 7),
('D32', 'le 3e pour ses importations ', 0, 8),
('D36', '« pays des rayons du soleil  »', 0, 11),
('D4', 'Kobe', 0, 1),
('D40', 'Niton ou Nippon', 0, 9),
('D44', 'république', 0, 12),
('D48', 'Karuhito', 0, 10),
('D52', '7 852 îles de plus de 100 m2 ', 0, 13),
('D56', '55% du territoire', 0, 14),
('D60', 'Tōhoku', 1, 15),
('D64', 'le dinar', 0, 16),
('D8', '435.915 km²', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Shikoku`
--

CREATE TABLE `Shikoku` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Tohoku`
--

CREATE TABLE `Tohoku` (
  `id_endroit` int(11) NOT NULL,
  `nom_endroit` varchar(255) NOT NULL,
  `location_endroit` varchar(255) NOT NULL,
  `thème_endroit` varchar(255) NOT NULL,
  `espace` varchar(255) NOT NULL,
  `description_endroit` text NOT NULL,
  `date_ouverture_endroit` date DEFAULT NULL,
  `date_fermeture_endroit` date DEFAULT NULL,
  `img1` varchar(25) NOT NULL,
  `img2` varchar(25) NOT NULL,
  `img3` varchar(25) NOT NULL,
  `img4` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tohoku`
--

INSERT INTO `Tohoku` (`id_endroit`, `nom_endroit`, `location_endroit`, `thème_endroit`, `espace`, `description_endroit`, `date_ouverture_endroit`, `date_fermeture_endroit`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'CAVE RYUSENDO', 'IWATE', 'visite', 'extérieur', 'Ryūsendō a une longueur accessible de 1200 mètres, ce qui en fait le 62e plus long au Japon; cependant, sa profondeur de 249 mètres de l\'entrée à son point le plus bas est la 5e plus profonde du Japon. La longueur totale de la grotte est actuellement de 3 631 mètres, bien que la grotte puisse s\'étendre beaucoup plus loin. La poursuite de l\'exploration a été interdite à la suite d\'un décès en décembre 1968. Le réseau de grottes comprend au moins quatre lacs souterrains , dont le troisième a une profondeur de 98 mètres et le quatrième (non accessible au public) a une profondeur de plus de 120 mètres. Le système de grottes abrite également des colonies de chauve-souris ', NULL, NULL, 'cave1.jpg', 'cave2.jpg', 'cave3.jpg', 'cave4.jpg'),
(2, 'LE MONT ZAO', 'entre Miyagi et Yamagata', 'sportive', 'extérieur', 'Immense Volcan inactif du japon qui atteint les 1840 mètres d\'altitude.Il appartient à la liste des 100 montagnes les plus célèbres du Japon.Ce volcan étant particulier par la présence du lac Okama de 27mètres de profondeur et de largeur d\'1km à son sommet.\r\nLe plus impressionnant étant sa couleur , surnommé \"goshiki numa\" ou \"étang aux 5 couleurs\".De plus à son pied on y retrouve un onsen(Un onsen (« source chaude ») Il s\'agit de bains chauds dont l\'eau est généralement issue de sources volcaniques parfois réputées pour leurs propriétés médicinales.) qui, selon la légende, aurait été découvert en l\'an 110. Les flancs étant très appréciés pour ces pistes de ski et ces fameux \"juhyô\", qui signifie \"arbre gelé\", ces arbres recouverts de neige et qui prennent une forme de monstre. ', NULL, NULL, 'zao1.png', 'zao2.png', 'zao3.png', 'zao4.png'),
(3, 'TEMPLE YAMADERA', 'Yamagata', 'visite', 'extérieur', 'Comme on dit les plus belles souffrances amènent les plus belles victoires , et bien il faudra vous en rappeler car pour arriver au temple Yamadera il vous faudra gravir les 1015 marches de l’escalier en pierre à travers la forêt tranquille. Un exercice difficile que les moines pratiquent régulièrement. C\'est le godaido, l’un des bâtiments du temple qui vous y attendra et son magnifique panorama au bord de la falaise.', NULL, NULL, 'yamadera1.png', 'yamadera2.png', 'yamadera3.png', 'yamadera4.png'),
(4, 'PARC HIROSAKI', 'Aomori', 'visite', 'extérieur', 'Un des sites les plus visités pour ses cerisiers environ 2 600 cerisiers, de 52 variétés différentes, sont plantées dans le parc du château construit en 1611. Ce lieu attire plus de 2 millions de visiteurs chaque année. Lors du festival environ 200 échoppes seront installées pour admirer ces cerisiers tout en dégustant des nouilles sautées ou des boulettes de pâte à crêpe takoyaki, ou en pêchant des poissons rouges avec une épuisette en papier. Le tunnel des cerisier est également à aller admirer .\r\nDate du festival :', '2020-04-22', '2020-05-07', 'hirosaki1.png', 'hirosaki2.png', 'hirosaki3.png', 'hirosaki4.png'),
(5, 'PLAGE DE JODOGA', 'Miyako,Iwate ', 'détente', 'extérieur', 'Appelée la \"plage de la terre pure\" car comparée au paradis de la Terre Pure par un prêtre au début de l\'époque d\'Edo.Elle est classée parmi les 100 meilleurs lieux de baignade du Japon alors prenez des chaussure et votre maillot de bain et foncez-y!', NULL, NULL, 'jodoga1.png', 'jodoga2.png', 'jodoga3.png', 'jodoga4.png'),
(6, 'TASHIRO-JIMA', 'préfecture de Miyagi', 'visite', 'extérieur', 'Pas vraiment à Tohoku mais petite ile qui se situe à ces côtés mais qui vaut le détour .\r\nCette ile avec une population qui se réduit fortement à cause de sa population vieillissante mais qui possède la particularité d\'habité de plus de chats que d\'humains (+de 160 chats) , elle est donc tout naturellement surnommée l\'ile aux chats.', NULL, NULL, 'jima1.png', 'jima2.png', 'jima3.png', 'jima4.png'),
(7, 'AQUAMARINE FUKUSHIMA', 'Fukushima', 'visite', 'intérieur', 'L\'aquarium Aquamarine à Fukushima contient à la fois un zoo, un aquarium et un terrarium où l\'on trouve les habitats recréés de rivières, de côtes et de vie marine typiques de la côte Pacifique et de Fukushima.\r\nLa particularité de ce lieu est qu\'il est possible d\'attraper et cuisiner votre propre poisson, cela fait partie des objectifs du musée en matière de pêche durable et d\'éducation.', NULL, NULL, 'aquamarine1.png', 'aquamarine2.png', 'aquamarine3.png', 'aquamarine4.png'),
(8, 'HIRAIZUMI', 'Iwate', 'visite', 'extérieur', 'Site archéologique classé à l\'UNESCO.\r\nLieu comptant un temple de style boudhiste ,son jardin et son étang formant un ensemble parfait censé représenter et symboliser le paradis .Outre le jardin, la promenade dans le domaine du temple donne aussi à voir de nombreux vestiges attestant de sa grandeur et de son importance passées.La ville fut fondée selon la cosmologie du bouddhisme de la Terre Pure, Jôdo, un courant bouddhiste japonais qui s’est formé au VIIIe siècle. Temples, bâtiments et jardins représentaient la Terre Pure de Bouddha, dans ce monde et dans celui de l’au-delà.', NULL, NULL, 'hieaizumi1.png', 'hieaizumi2.png', 'hieaizumi3.png', 'hieaizumi4.png'),
(9, 'TROIS MONTS DEWA', 'Yamagata', 'visite', 'extérieur', 'Les pèlerins gravissent ces trois montagnes depuis près de 1 500 ans. L’hiver, les fortes neiges rendent inaccessibles les monts Gassan et Yudono. Aussi, le temple Sanjin Gosaiden, situé sur le mont Haguro, rassemble les quelques pèlerins qui occupent les lieux. Il est possible de s’y rendre en voiture ou en bus, via une route à péage. Il est cependant recommandé d’opter pour la voie traditionnelle, soit une marche en suivant le ishidan, ce sentier constitué de 2 446 marches filant à travers la forêt de cèdres. D’autant plus qu’en chemin, 33 personnages sculptés apportent la prospérité à ceux qui parviennent à tous les trouver.', NULL, NULL, 'dewa1.png', 'dewa2.png', 'dewa3.png', 'dewa4.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `pseudo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `score_anime` int(25) DEFAULT '0',
  `score_japon` int(25) DEFAULT '0',
  `note_site` int(11) DEFAULT NULL,
  `avis_site` text,
  `note_Hokkaido` int(3) DEFAULT NULL,
  `avis_Hokkaido` text,
  `note_Chibu` int(3) DEFAULT NULL,
  `avis_Chibu` text,
  `note_Chugoku` int(3) DEFAULT NULL,
  `avis_Chugoku` text,
  `note_Kansai` int(3) DEFAULT NULL,
  `avis_Kansai` text,
  `note_Kanto` int(3) DEFAULT NULL,
  `avis_Kanto` text,
  `note_Kyushu` int(3) DEFAULT NULL,
  `avis_Kyushu` text,
  `note_Shikoku` int(3) DEFAULT NULL,
  `avis_Shikoku` text,
  `note_Tohoku` int(3) DEFAULT NULL,
  `avis_Tohoku` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `prenom`, `nom`, `pseudo`, `email`, `password`, `score_anime`, `score_japon`, `note_site`, `avis_site`, `note_Hokkaido`, `avis_Hokkaido`, `note_Chibu`, `avis_Chibu`, `note_Chugoku`, `avis_Chugoku`, `note_Kansai`, `avis_Kansai`, `note_Kanto`, `avis_Kanto`, `note_Kyushu`, `avis_Kyushu`, `note_Shikoku`, `avis_Shikoku`, `note_Tohoku`, `avis_Tohoku`) VALUES
(1, 'thomas', 'xyxy', 'thomas', NULL, 'aaaaa', 6, 2, 9, 'merci ', 8, 'jaime bien', 7, NULL, 9, NULL, 10, NULL, 6, NULL, 8, NULL, 6, NULL, 9, NULL),
(2, 'Bilal', 'haaa', 'Bilal', '', 'bbbb', 1, 0, 8, 'très bon site pour planifier son voyage je recommande', 6, 'jaime bien', 8, NULL, 3, NULL, 5, NULL, 7, NULL, 7, NULL, 7, NULL, 9, NULL),
(25, ' Mélina', ' rasteiro', 'messi', 'melina@orange.fr', 'ed70c57d7564e994e7d5f6fd6967cea8b347efbc', 1, 1, 9, 'Devrait être connu de tous', 7, 'jaime bien', 5, NULL, 6, NULL, 5, NULL, 8, NULL, 8, NULL, 9, NULL, 3, NULL),
(27, 'mahdi', 'ranjbar', 'mhdirnjbr', '', 'nul', 10, 10, 0, 'nul', 8, '2', 3, NULL, 9, NULL, 7, NULL, 8, NULL, 5, NULL, 8, NULL, 5, NULL),
(29, 'gerard', 'romarin', 'gege', '', '7ecde348ff9cda2c3ba69a0c4543365039d0d65b', 2, 6, 8, 'J\'AIME !', 5, 'jaime bien', 6, NULL, 8, NULL, 9, NULL, 5, NULL, 7, NULL, 9, NULL, 9, NULL),
(31, ' xzxzxz', 'xyxy', ' X24', '', 'de69a629f9c30af3f481110f0f42a7c0c5efacfb', 6, 2, 6, 'efficace', 9, 'jaime bien', 2, NULL, 5, NULL, 7, NULL, 4, NULL, 6, NULL, 5, NULL, 4, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 'BIEN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 'COOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, ' chay', ' huncho', ' hunchochay', '', '78f4254ec2623d98817af41b511187e7bd44160b', 8, 10, 10, 'coooool', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Chibu`
--
ALTER TABLE `Chibu`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `Chugoku`
--
ALTER TABLE `Chugoku`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `Hokkaido`
--
ALTER TABLE `Hokkaido`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `Kansai`
--
ALTER TABLE `Kansai`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `Kanto`
--
ALTER TABLE `Kanto`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `Kyushu`
--
ALTER TABLE `Kyushu`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `questionAnime`
--
ALTER TABLE `questionAnime`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `questionJapon`
--
ALTER TABLE `questionJapon`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `reponseAnime`
--
ALTER TABLE `reponseAnime`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `id_question` (`id_question`);

--
-- Indexes for table `reponseJapon`
--
ALTER TABLE `reponseJapon`
  ADD PRIMARY KEY (`id_reponse`);

--
-- Indexes for table `Shikoku`
--
ALTER TABLE `Shikoku`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `Tohoku`
--
ALTER TABLE `Tohoku`
  ADD PRIMARY KEY (`id_endroit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Chibu`
--
ALTER TABLE `Chibu`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Chugoku`
--
ALTER TABLE `Chugoku`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Hokkaido`
--
ALTER TABLE `Hokkaido`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Kansai`
--
ALTER TABLE `Kansai`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Kanto`
--
ALTER TABLE `Kanto`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Kyushu`
--
ALTER TABLE `Kyushu`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionAnime`
--
ALTER TABLE `questionAnime`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `questionJapon`
--
ALTER TABLE `questionJapon`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `Shikoku`
--
ALTER TABLE `Shikoku`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tohoku`
--
ALTER TABLE `Tohoku`
  MODIFY `id_endroit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
