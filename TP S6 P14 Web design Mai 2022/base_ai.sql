-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 08 mai 2023 à 01:23
-- Version du serveur : 5.6.17
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mitadda`
--
CREATE DATABASE IF NOT EXISTS `mitadda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mitadda`;

-- --------------------------------------------------------

--
-- Structure de la table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adminlogins`
--

INSERT INTO `adminlogins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `created_at`, `updated_at`) VALUES
(1, 'MIT Farm', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `contenu` text,
  `auteur` varchar(100) NOT NULL,
  `date_publication` varchar(20) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `image4` varchar(100) DEFAULT NULL,
  `image5` varchar(100) DEFAULT NULL,
  `categorie` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`id`, `titre`, `contenu`, `auteur`, `date_publication`, `image1`, `image2`, `image3`, `image4`, `image5`, `categorie`) VALUES
(5, 'Qu\'est-ce que l\'intelligence artificielle et pourquoi est-ce important ?', '<p>L\'intelligence artificielle (IA) se réveille et frappe à votre porte. Engourdi pendant près 60 ans plus tard dans une période de moindres recherches et de faibles financements alloués aux innovations, l\'hiver de l\'IA est enfin terminé. <a href=\"https://www.forbes.com/sites/louiscolumbus/2017/09/10/how-artificial-intelligence-is-revolutionizing-business-in-2017/\">83 % des entreprises interrogées</a> considèrent l\'intelligence artificielle comme une priorité stratégique et 75 % déclarent que l\'intelligence artificielle est la clé pour identifier de nouveaux clients et de nouvelles entreprises. L\'intelligence artificielle n\'est plus un produit de science-fiction. De la détection des fraudes aux méthodes d\'embauche efficaces, en passant par la prévision de la maintenance des machines, l\'intelligence artificielle est aujourd\'hui devenue un facteur d\'innovation dans le monde du travail et ses applications quotidiennes.</p><p>Vous en voulez en savoir davantage ? Dans cet article, nous aborderons l\'<a href=\"https://www.talend.com/fr/resources/ai-engineering/\">évolution de l\'IA</a>, nous vous expliquerons son fonctionnement et nous vous aiderons à plaider en sa faveur dans votre entreprise.</p>', 'Jean G.', '13/04/2020', 'image/91415628486600.jpg', NULL, NULL, NULL, NULL, NULL),
(6, 'L\'intelligence artificielle : 60 ans d\'évolution', '<p><strong>L\'intelligence artificielle est une branche de l\'informatique qui permet aux systèmes d\'apprendre et d\'exécuter des tâches normalement associées à l\'intelligence humaine, telles que la reconnaissance vocale, la prise de décisions ou la perception visuelle.</strong></p><p>Dans les années 50, la réalité de l\'intelligence artificielle était au mieux hors de portée : les ordinateurs ne pouvaient pas stocker ou exécuter des informations, et les coûts qui y étaient relatifs étaient astronomiques. C\'est alors que le mathématicien <a href=\"https://builtin.com/artificial-intelligence\">Alan Turing</a> a posé une question simple, mais révolutionnaire : « les machines peuvent-elles penser ? ». La réponse, un grand oui, a changé le cours de l\'histoire.</p><p>Entre les années 50 et 70, l\'industrie informatique a pu s\'appuyer sur des ordinateurs plus rapides, plus accessibles et moins coûteux. Un article du magazine Life de 1970 mettait en évidence le fait qu\'en seulement trois à cinq ans, les machines auraient bientôt la même intelligence qu\'un être humain. Pour cela, des avancées majeures en matière de capacité de stockage et de puissance de calcul étaient nécessaires.</p><p>Dans les années 80, deux techniques importantes ont été développées. La première, le deep learning, ou « apprentissage en profondeur », a permis aux ordinateurs d\'apprendre par l\'expérience. Le second, l\'expert system, ou « système expert », imite la capacité de l\'homme à prendre des décisions. Les ordinateurs ont commencé à utiliser un raisonnement basé sur des « règles » en recourant principalement à une structure « si-alors » mise en œuvre pour répondre à des questions.</p><p>En 1997, Dragon Systems a développé et implémenté une solution de reconnaissance vocale sous Windows. Les années 2000 ont été synonymes de débit et d\'options de stockage, comme le cloud, catapultant l\'utilisation des ordinateurs auprès du grand public et contribuant à placer l\'IA sous les feux de la rampe. Aujourd\'hui, l\'IA est sur une voie express, en raison de trois améliorations sectorielles majeures.</p>', 'Gilles H.', '15/01/2019', 'image/91542715839700.jpg', NULL, NULL, NULL, NULL, NULL),
(7, 'Comment fonctionne l\'IA ??', '<p>Maintenant que nous avons compris comment l\'IA a évolué au cours des 60 dernières années et que nous avons une idée de ses principes fondamentaux, examinons de plus près le fonctionnement de l\'IA.</p><p>Deux techniques fondamentales permettent à l\'IA d\'être effective efficacement : le machine learning (ML) et le deep learning (DL). <a href=\"https://www.talend.com/fr/resources/ai-vs-machine-learning-vs-deep-learning/\">ML et DL</a> créent l\'environnement nécessaire au fonctionnement de l\'IA. Le machine learning est constitué d\'outils et d\'algorithmes intégrés à un ordinateur qui « apprennent » ou utilisent des données existantes pour produire des prédictions précises. Le deep learning est une fonction automatisée du machine learning, qui permet à une machine de remarquer des modèles et de classer les informations dans des catégories, ce qui lui permet de « penser ».</p>', 'Julien L.', '28/04/2011', 'image/91668371864100.jpg', 'image/91668372934000.jpg', NULL, NULL, NULL, NULL),
(8, 'Les applications d\'IA dans la vie réelle', '<p>Il est probable qu\'il y ait plus d\'IA dans votre vie que vous ne le pensez. Avez-vous déjà interagi avec un cyber-assistant sur votre site d\'achat préféré ? Demandé de l\'aide à Facebook pour créer une publicité pour votre entreprise ? Fait appel à Alexa pour faire jouer votre playlist préférée ? Dit « bonjour Google » pour retrouver votre chemin vers votre domicile ? Ce ne sont là que quelques-unes des façons dont les entreprises utilisent l\'IA pour simplifier votre quotidien et fournir toujours plus d\'informations à leurs clients. En voici quelques autres :</p><ul><li>Amazon propose une IA transactionnelle dont les algorithmes ne cessent de se perfectionner. Actuellement, elle est capable de <a href=\"https://www.investopedia.com/articles/personal-finance/070215/how-buying-amazoncom-works.asp\">prédire vos habitudes d\'achat</a> et de fournir des informations sur les produits avant même que vous soyez à la recherche d\'un produit spécifique.</li><li>Le processus d\'ADN musical de Pandora utilise plus de <a href=\"https://neilpatel.com/blog/how-pandora-uses-data/\">400 caractéristiques musicales</a> extraites de chansons analysées manuellement par des musiciens professionnels, pour recommander de nouvelles chansons aux utilisateurs en fonction de leurs préférences.</li><li>Nest est un thermostat qui peut être <a href=\"https://workswith.nest.com/company/amazon/amazon-alexa\">contrôlé vocalement par Alexa</a> pour apprendre et activer vos préférences de chauffage et de climatisation.</li></ul><p>Qu\'en est-il de l\'IA basée dans le cloud ? Avec son évolutivité et son accès aux ressources en temps réel, l\'IA couplée à une infrastructure cloud apparaît comme une option de premier plan. Parmi les plateformes actuellement disponibles, citons Microsoft Azure Machine Learning, Google Cloud Prediction API, TensorFlow, Rainbird et Meya, pour n\'en lister que quelques-unes.</p>', 'Diary P.', '12/05/2018', 'image/101464574586100.jpeg', 'image/101464575826400.jpg', NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
