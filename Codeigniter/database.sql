-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2021 a las 22:28:42
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authors`
--

CREATE TABLE `authors` (
  `user_id` int(11) NOT NULL,
  `biography` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `authors`
--

INSERT INTO `authors` (`user_id`, `biography`) VALUES
(2, 'fdklshafldhsajkfhdsjkafdlsak'),
(3, 'Muchas cosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `author_client`
--

CREATE TABLE `author_client` (
  `author_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `author_client`
--

INSERT INTO `author_client` (`author_id`, `client_id`) VALUES
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `father`) VALUES
(1, 'Tecnologia', NULL),
(2, 'Gastronomia', NULL),
(3, 'Noticias', NULL),
(4, 'Adultos jóvenes', NULL),
(5, 'Bienestar', NULL),
(6, 'Clásicos', NULL),
(7, 'Historia', NULL),
(8, 'Ficción', NULL),
(9, 'Romance', NULL),
(10, 'Política', NULL),
(11, 'Mascotas', NULL),
(12, 'Perros', 'Mascotas'),
(13, 'Gatos', 'Mascotas'),
(14, 'Globalización', 'Política'),
(15, 'Guerras', 'Globalización'),
(16, 'Clásicos para jóvenes', 'Adultos jóvenes'),
(17, 'Dieta y nutrición', 'Bienestar'),
(18, 'Recetas Vegetarianas', 'Dieta y nutrición'),
(19, 'Clásicos para niños', 'Clásicos'),
(20, 'Historia Antigua', 'Historia'),
(21, 'Ficción psicológica', 'Ficción'),
(22, 'Ficción política', 'Ficción'),
(23, 'Romance paranormal', 'Romance'),
(24, 'Romance de fantasía', 'Romance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE `clients` (
  `user_id` int(11) NOT NULL,
  `subscribed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`user_id`, `subscribed`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favourites`
--

CREATE TABLE `favourites` (
  `user_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `favourites`
--

INSERT INTO `favourites` (`user_id`, `resource_id`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playlist`
--

CREATE TABLE `playlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `playlist`
--

INSERT INTO `playlist` (`id`, `user_id`, `name`, `public`) VALUES
(3, 1, 'Coso', 0),
(4, 1, 'Audiolibros', 0),
(5, 1, 'Documentos', 0),
(7, 1, 'Canciones', 1),
(8, 1, 'Documentos publicos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playlist_resource`
--

CREATE TABLE `playlist_resource` (
  `playlist_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `playlist_resource`
--

INSERT INTO `playlist_resource` (`playlist_id`, `resource_id`) VALUES
(3, 1),
(3, 2),
(4, 1),
(4, 22),
(8, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `downloadable` tinyint(1) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `subscription` tinyint(1) NOT NULL DEFAULT 0,
  `filename` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `resources`
--

INSERT INTO `resources` (`id`, `name`, `description`, `type`, `downloadable`, `image`, `author`, `subscription`, `filename`) VALUES
(1, 'Mi libro', 'Luna de pluton', 1, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/401637730/original/216x287/18320f3ac1/1617232767?v=1', 2, 0, '1621955012_4475d006961e68e1ce26.pdf'),
(2, 'Night Owls', 'Un vistazo a los artistas del grafiti alrededor del mundo', 1, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/438247427/original/216x287/3b97b7e562/1621551534?v=1', 2, 0, '1621970408_d722a8f2e3142c666a59.pdf'),
(3, 'TIME', 'Revista Time', 3, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/507921002/200x266/da95a4be7b/1622178163?v=1', 3, 0, '1622225592_51b7651b5d9eac682df8.pdf'),
(4, 'Los Miserables', 'Se complace en presentar el Audiolibro dramatizado en espaniol en la historia original de Victor Hugo Catalogada como la primera novela social de su epoca Los Miserables es una de obras literarias las mas famosas de todos los tiempos  Es la historia de Jean Valjean un convicto que estuvo injustamente encarcelado por 19 años por haberse robado una rebanada de pan Al ser liberado de su injusta condena Valjean trata de escapar de su pasado lleno de maldad y depravacion para vivir una vida digna y honesta Sin embargo esto se ve truncado al ser reconocido por el inspector Javert quien lo persigue obsesionadamente para enviarlo de nuevo a prision Esta persecucion consume la vida de ambos hombres terminando en un inesperado desenlace', 2, 0, 'https://imgv2-1-f.scribdassets.com/img/audiobook_square_badge/449429118/original/216x216/2f2daeeade/1621880476?v=1', 3, 0, ''),
(5, 'The Atlantic', 'Since 1857, The Atlantic has shaped the national debate on politics, business, foreign affairs, and cultural trends.', 3, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/504174824/200x266/c70459eb1b/1622178295?v=1', 3, 0, ''),
(7, 'People', 'People revolutionized personality journalism when it launched as a weekly in 1974 to celebrate extraordinary people doing ordinary things and ordinary people doing extraordinary things.', 3, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/508734756/200x266/17257c05b2/1622178154?v=1', 3, 0, ''),
(9, 'HELLO magazine', 'HELLO! magazine: HELLO! – Bringing you the best stories every week.\r\n', 3, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/509136228/200x266/356bc5638b/1622178118?v=1', 3, 0, ''),
(10, 'Entertainment Weekly', 'Entertainment Weekly is your all-access pass to the most creative minds and brightest stars in Hollywood.', 3, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/507480848/200x266/6cbe12f5a8/1622178695?v=1', 3, 0, ''),
(11, 'Total Film', 'Total Film: The Modern Guide to Movies', 3, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/505621824/200x266/f33f579155/1622178221?v=1', 3, 0, ''),
(12, 'Yoga Journal', 'Healthy minds, healthy bodies.', 3, 0, 'https://imgv2-2-f.scribdassets.com/img/word_document/506328095/200x266/3e834db04c/1622178321?v=1', 3, 0, ''),
(13, 'Saveur', 'Definitive culinary guide — evoking the flavors of food around the world.\r\n', 3, 0, 'https://imgv2-2-f.scribdassets.com/img/word_document/504026722/200x266/940eca14b2/1622178136?v=1', 3, 0, ''),
(14, 'Como ser una bruja moderna', 'Guiada por la escritora, alquimista de la moda y bruja moderna Gabriela Herstik, descubrirás el antiguo arte de la brujería para que puedas encontrar una marca de magia que funcione para ti.\r\n\r\nDesde trabajar con cristales, tarot y astrología hasta entender la magia sexual, los solsticios y las lunas llenas. Aprende a cómo aprovechar la energía, desata tu psíquica interior y conéctate de nuevo con el mundo natural.\r\n\r\nRepleto de hechizos y rituales para cuidarte de ti misma y de nuevas oportunidades y varios trucos para mantenerte lejos de la energía tóxica, este libro es la guía de estilo de vida esencial para la mujer moderna que quiere tomar el control y reconectarse consigo misma.\r\n\r\nPorque, al fin y al cabo las mujeres pueden dirigir el mundo (y probablemente son brujas).', 1, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/388552344/original/216x287/033b8254f5/1620971745?v=1', 3, 0, ''),
(15, ' Recetas El Poder del Metabolismo', 'En este libro, Frank Suarez, autor de los libros best-seller El Poder del Metabolismo y Diabetes Sin Problemas, presenta combinaciones deliciosas de la Dieta 3x1 y cientos de recetas riquÃ­simas, que complementan el estilo de vida de el poder del metabolismo. La Dieta 3x1 ha revolucionado el campo de las dietas, permitiéndole a las personas adelgazar y mejorar su salud y energÃ­a, sin pasar hambre y disfrutando de todo tipo de alimentos.', 1, 0, 'https://imgv2-2-f.scribdassets.com/img/word_document/392490375/original/216x287/477ba2b11f/1621612205?v=1', 3, 0, ''),
(16, 'La vuelta al mundo en 80 dias', 'La vuelta al mundo en ochenta días (Le Tour du monde en quatre-vingts jours) es una novela del escritor francés Julio Verne.\r\nLas peripecias del británico Phileas Fogg y de su ayudante Jean Passepartout, llamado también \"Picaporte\" en castellano, constituyen uno de los relatos más cautivantes producidos por la imaginación humana, y una de las joyas de la literatura de todas las épocas.\r\nEl flemático y solitario caballero británico Phileas Fogg abandonará su vida de escrupulosa disciplina para cumplir con una apuestacon sus colegas del Reform Club, en la que arriesgará la mitad de su fortuna comprometiéndose a dar la vuelta al mundo en sólo ochenta días usando los medios disponibles en la segunda mitad del siglo XIX y siguiendo el proyecto publicado en el Morning Chronicle, su periódico de lectura cotidiana. Lo acompañará su recién contratado mayordomo francés, Jean Passepartout (llamado \"Picaporte\" en algunas traducciones al español) y tendrá que lidiar no sólo con los retrasos en los medios de transporte, sino con la pertinaz persecución del detective Fix, que, ignorando la verdadera identidad del caballero, se enrola en toda la aventura a la espera de una orden de arresto de la Corona británica, en la creencia de que, antes de partir, Fogg robó 55 000 libras del Banco de Inglaterra...', 1, 0, 'https://imgv2-2-f.scribdassets.com/img/word_document/357000389/original/216x287/052b50886c/1617228979?v=1', 3, 0, ''),
(17, '1914 De la paz a la guerra', 'El relato definitivo de las fuerzas políticas, culturales, militares y personales que llevaron a Europa hacia la Gran Guerra.\r\nLa Primera Guerra Mundial puso fin a un largo periodo de paz sostenida en Europa: una época en la que se hablaba confiadamente de prosperidad, de progreso y de esperanza. Y sin embargo, en 1914 el continente se lanzó de cabeza a un conflicto catastrófico, que mató a millones de personas, desangró las economías nacionales, derrumbó imperios y puso fin para siempre a la hegemonía mundial europea. Fue una guerra que hubiera podido evitarse hasta el último momento. La pregunta es: ¿por qué se produjo?\r\nEmpezando en el siglo xix y acabando con el asesinato\r\ndel archiduque Francisco Fernando, la gran historiadora Margaret MacMillan desvela la compleja red de alianzas, cambios políticos y tecnológicos, decisiones diplomáticas y, sobre todo, personalidades y debilidades humanas que llevaron a Europa al desastre.\r\nUna narración imprescindible para conocer el mundo de hoy entendiendo mejor el de hace un siglo.', 1, 0, 'https://imgv2-2-f.scribdassets.com/img/word_document/306222410/original/216x287/0a00ceb414/1617220619?v=1', 3, 0, ''),
(18, 'Un orgullo tonto', 'Max Bloomberg, un exitoso abogado londinense, está dispuesto a reconquistar a su esposa a la que echó de su vida sin darle la oportunidad a defenderse. Ha pasado un tiempo desde aquel doloroso episodio, y ahora Audrey solicita el divorcio. Arrepentido por su terrible error, Max buscará el modo de conseguir que ella regrese a su lado, a pesar de que una tercera persona se interpondrá en su camino.\r\n\r\n¿Será posible que Audrey abandone su orgullo herido y regrese con Max?', 1, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/368054408/original/216x287/7564dd12a8/1617238343?v=1', 3, 0, ''),
(19, 'Las ideas politicas en la historia', 'Esta obra presenta una perspectiva de la evolución del pensamiento que apunta a una mejor comprensión del orden político contemporáneo y de las convicciones políticas del hombre moderno. Por esta razón trata de las ideas políticas en la historia, es decir, dentro de la historia general de la civilización, y no de la tradicional historia de las ideas políticas y, menos aún, de la historia de la teoría política.', 1, 0, 'https://imgv2-2-f.scribdassets.com/img/word_document/295460499/original/216x287/2a103c9d88/1617234686?v=1', 3, 0, ''),
(20, 'Educar o reeducar al perro', 'El pipí en lugares inapropiados, la agresividad fuera de lugar, el miedo a los ruidos o a otros perros, el miedo a la soledad, el rechazo a viajar en automóvil, los celos, los caprichos... Muchas personas tienen en casa un animal desobediente, rebelde, que no quiere respetar las normas, que hace la vida difícil a la familia de la cual forma parte, y que puede llegar a convertirse en un peligro para los extraños y para el propio dueño. Esto ocurre cuando el perro carece de disciplina por carácter o cuando lo hemos adoptado siendo ya adulto, sin que antes hubiera sido educado. También puede ser el caso de un perro que ha crecido en el campo y se ha tenido que adaptar a la vida de la ciudad o, finalmente, debemos admitirlo, cuando nosotros mismos lo hemos viciado excesivamente. Este manual enseña claramente y con indicaciones detalladas tanto a educar bien el cachorro como a corregir al perro adulto mal educado. La experiencia del autor es de gran ayuda para entender la psicología de los perros: nuestro amigo de cuatro patas también lo notará, y apreciará el nuevo estilo y las reglas de su amo, por quien sentirá un afecto aún más profundo.', 1, 0, 'https://imgv2-2-f.scribdassets.com/img/word_document/273591774/original/216x287/8752ed1034/1617226599?v=1', 3, 0, ''),
(21, 'Los Tres Mosqueteros', '\"Todos para uno y uno para todos\". Las aventuras de los tres mosqueteros del rey, Atos, Portos y Aramis y su amigo D\'Artagnan, en su busqueda de arreglar el problema del collar de la reina y de su antagonismo contra los guardias del Cardenal Richelieu, son la base de una serie de obras de Dumas, padre, en las cuales el espiritu de aventura se convierte en una serie de acciones emocionantes, que convierte a \"Los tres mosqueteros\" en una de las novelas de accion mas brillantes en la historia de la literatura. Aunque dicen que los personajes estan basados en gente real, lo cierto es que la imaginacion de Dumas trasciende lo historico para crear una obra apasionante, que es leida por Carlos Zambrano, conocido actor de radio y television.', 2, 0, 'https://imgv2-1-f.scribdassets.com/img/audiobook_square_badge/237938073/original/216x216/d06d5afebc/1620980327?v=1', 2, 0, ''),
(22, 'Budismo la ciencia de la autentica felicidad', '¿Eres de las personas que corren obsesivamente detrás de la felicidad sin poderla alcanzar? ¿Te llenas de enojo y frustración cuando te das cuenta que no eres tan feliz como esperabas ni estás en paz contigo? ¿Te da miedo pensar que nunca serás feliz en verdad ni encontrarás paz interior?', 2, 0, 'https://imgv2-2-f.scribdassets.com/img/audiobook_square_badge/370636253/original/216x216/020df99406/1620983183?v=1', 2, 0, ''),
(23, 'La Iliada', 'La Ilíada es una epopeya griega y el poema más antiguo escrito de la literatura occidental, atribuido tradicionalmente a Homero. Narra la historia del héroe griego Aquiles quien es ofendido por su superior, Agamenón, retirándose por esto de la batalla. Una recreación dramática de la contienda entre griegos y troyanos.', 2, 0, 'https://imgv2-2-f.scribdassets.com/img/audiobook_square_badge/353114886/original/216x216/7a08983eb4/1621029257?v=1', 2, 0, ''),
(24, 'Sobre la tirania Veinte lecciones que aprender del siglo XX', '“Nos deslizamos rápidamente hacia el fascismo. Timothy Snyder no nos permite hacernos ilusiones sobre nosotros mismos.” —Svetlana Aleksiévich, ganadora del Premio Nobel de Literatura\r\n\r\n“Timothy Snyder razona con una claridad incomparable (…) y ha escrito el tipo de libro, tan poco común, que se lee de una sentada pero al que se vuelve una y otra vez en el intento de situarse en relación con los acontecimientos.” —Masha Gessen', 2, 0, 'https://imgv2-2-f.scribdassets.com/img/audiobook_square_badge/469944502/original/216x216/fd45cb296d/1620256287?v=1', 2, 0, ''),
(25, 'Yo soy Eric Zimmerman vol II', 'Tras una boda y un viaje de novios de ensueño, mi vida con Judith comienza a normalizarse. Durante el día, mientras trabajo en mi empresa, mi maravillosa esposa sigue en sus trece de llevarme la contraria en todo lo que puede y más.\r\n\r\nA pesar de lo mucho que nos amamos, somos especialistas en enfadarnos y en reconciliarnos siempre… Pero un día llega a mis oídos un malicioso comentario contra ella que me hará perder la confianza en mi pequeña. Días liosos. Noches en vela. Discusiones. Problemas, muchos problemas.', 2, 0, 'https://imgv2-1-f.scribdassets.com/img/audiobook_square_badge/396213357/original/216x216/7e6af9d04e/1617039399?v=1', 2, 0, ''),
(26, 'Diario de Ana Frank', 'Tras la invasión de Holanda, los Frank, comerciantes judíos alemanes emigrados a Amsterdam en 1933, se ocultaron de la Gestapo en una buhardilla anexa al edificio donde el padre de Ana tenía sus oficinas. Eran ocho personas y permanecieron recluidas desde junio de 1942 hasta agosto de 1944, fecha en que fueron detenidos y enviados a campos de concentración. En ese lugar y en las más precarias condiciones, Ana, a sus trece años, escribió su estremecedor Diario: un testimonio único en su género sobre el horror y la barbarie nazi, y sobre los sentimientos y experiencias de la propia Ana y sus acompañantes.', 2, 0, 'https://imgv2-1-f.scribdassets.com/img/audiobook_square_badge/353114834/original/216x216/c6b05b9498/1621303798?v=1', 2, 0, ''),
(27, 'Historias para no dormir', 'Todas las semanas abrimos la caja de la media noche para narrar a ustedes la macabras historias que habitan en la oscuridad de la noche. Desde nuestros estudios en el callejón del aguacate llega el podcast de Historias para no dormir. Si quieres formar parte del podcast, por favor envíanos tus historias a histparanodormir@gmail.com. No te olvides de visitarnos en nuestras redes sociales y en nuestro blog.', 4, 0, 'https://imgv2-1-f.scribdassets.com/img/word_document/501663384/original/216x216/0a33a43599/1617654536?v=1', 3, 0, ''),
(28, 'Startup Accelerator Programmes', 'This practice guide explains how accelerator programmes work and supports you to think practically about setting up your own programme.', 5, 0, 'https://imgv2-1-f.scribdassets.com/img/document/292143337/149x198/700be10530/1621432220?v=1', 3, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resource_categories`
--

CREATE TABLE `resource_categories` (
  `resource_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `resource_categories`
--

INSERT INTO `resource_categories` (`resource_id`, `category_id`) VALUES
(1, 3),
(2, 3),
(3, 16),
(4, 8),
(5, 3),
(7, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 5),
(13, 2),
(14, 4),
(15, 17),
(16, 6),
(17, 7),
(18, 9),
(19, 7),
(20, 11),
(21, 4),
(22, 5),
(23, 6),
(24, 6),
(25, 9),
(26, 7),
(27, 9),
(28, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(2, 'AudioLibro'),
(5, 'Documento'),
(1, 'Libro'),
(4, 'Podcast'),
(3, 'Revista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `DTYPE` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `nick`, `birthdate`, `image`, `DTYPE`) VALUES
(1, 'Mauricio', 'Camacho', 'mauri3418@gmail.com', '$2y$10$6ZoFtMk4bm3lqAmqTPe3tOsNdlHa5PL5gu.UBvRWElwhUznu5tbEa', 'Oci', '2001-03-06', '', 'Cliente'),
(2, 'Agustin', 'Peraza', 'agu458@gmail.com', '$2y$10$rRpOhLtX7SjT2xkoaeeT0OFWf8Qq7UIzjjETnTZ56jZny2.k0YlwK', 'Agu458', '2000-03-02', '', 'Autor'),
(3, 'Santiago', 'Sellanes', 'santi@gmail.com', '$2y$10$z4FIz1TnpIwlnH9ARmC4FO4FMHH6aJliwWmm7F1ZshDeFNLpGebrK', 'Santi', '1998-06-24', 'https://images.unsplash.com/photo-1511367461989-f85a21fda167?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHJvZmlsZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80', 'Autor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `author_client`
--
ALTER TABLE `author_client`
  ADD PRIMARY KEY (`author_id`,`client_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `father_name_fk` (`father`);

--
-- Indices de la tabla `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`user_id`,`resource_id`),
  ADD KEY `resource_id` (`resource_id`);

--
-- Indices de la tabla `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_id`);

--
-- Indices de la tabla `playlist_resource`
--
ALTER TABLE `playlist_resource`
  ADD PRIMARY KEY (`playlist_id`,`resource_id`),
  ADD KEY `resource_id` (`resource_id`);

--
-- Indices de la tabla `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resource_author_id_fk` (`author`),
  ADD KEY `resource_type_id_fk` (`type`);

--
-- Indices de la tabla `resource_categories`
--
ALTER TABLE `resource_categories`
  ADD PRIMARY KEY (`resource_id`,`category_id`),
  ADD KEY `resource_categories_category_id` (`category_id`);

--
-- Indices de la tabla `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authors`
--
ALTER TABLE `authors`
  ADD CONSTRAINT `author_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `author_client`
--
ALTER TABLE `author_client`
  ADD CONSTRAINT `author_client_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `author_client_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `father_name_fk` FOREIGN KEY (`father`) REFERENCES `categories` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `client_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `clients` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `playlist_resource`
--
ALTER TABLE `playlist_resource`
  ADD CONSTRAINT `playlist_resource_ibfk_1` FOREIGN KEY (`playlist_id`) REFERENCES `playlist` (`id`),
  ADD CONSTRAINT `playlist_resource_ibfk_2` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`);

--
-- Filtros para la tabla `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resource_author_id_fk` FOREIGN KEY (`author`) REFERENCES `authors` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resource_type_id_fk` FOREIGN KEY (`type`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `resource_categories`
--
ALTER TABLE `resource_categories`
  ADD CONSTRAINT `resource_categories_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resource_categories_resource_id_fk` FOREIGN KEY (`resource_id`) REFERENCES `resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
