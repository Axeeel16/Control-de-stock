-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2023 a las 19:13:24
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stocknexolibre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigobarras`
--

CREATE TABLE `codigobarras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `codigo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes`
--

CREATE TABLE `componentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(95) NOT NULL,
  `ubicacion` varchar(10) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `componentes`
--

INSERT INTO `componentes` (`id`, `nombre`, `ubicacion`, `codigo`, `cantidad`, `imagen`) VALUES
(9, 'Condensador Grande 470uf 200v', '4D5', '1000000089', 4, 'Condensador/condensadorGrande.webp'),
(10, 'Condensador Mediano 3300uf 25V', '4D5', '1000000090', 1, 'Condensador/CondensadorMediano.webp'),
(12, 'IRF 820 N MOSFET', '4D2', '1000000112', 24, 'Mosfet/irf820.jpg'),
(14, 'Diodo led rojo', '4B4', 'NL100000014', 7, 'Diodos/LEDROJO.jpg'),
(20, 'Diodos led verde', '4B4', 'NL1000000077', 2, 'Diodos/LedVerde_.webp'),
(21, 'Diodos led amarillo', '4B4', 'NL1000000076', 1, 'Diodos/LedAmarillo.webp'),
(22, 'Tornillos plasticos medianos', '4B1', '1000000084', 11, 'tornillo/tornillo_plastico.webp'),
(23, 'Condensador 4.7uf - 50V', '5B4', '1000000067', 3, 'condensador/Condensador4.7uf-50v.jpg'),
(24, 'Condensador 4.7uf - 3.5V', '5B4', '1000000066', 5, 'condensador/condensador4.7uf-3.5v.webp'),
(25, 'Condensador 820uf - 6.3V', '5B4', '1000000068', 6, 'condensador/820uf-6.3v.webp'),
(27, 'Mosfet P16NK60Z', '4A3', '100000421', 2, ''),
(49, 'Regulador de Voltaje L7805 CV', '4C2', '1000000424', 1, 'Transistor/L7805CV.png'),
(50, 'Fusibles F6AL 250V', '5D2', 'NL1000000070', 2, 'Fusibles/F6AL250V.webp'),
(55, 'Fusibles ceramica 6.2x30 250V-50KA', '5D2', '1000000072', 2, 'Fusibles/ceramica6.2x30.250v50ka.png'),
(56, 'Mosfet BST72A', '4A4', '1000000405', 39, 'Mosfet/BST72A.jpg'),
(57, 'DC-DC INPUT 18-36V CC025ACL-M  OUTPUT 5V/15V/-15V', '5C4', '1000000050', 2, 'conversor/conversorDCDC.jpg'),
(58, 'HEX INVERTER MC74HC04N', '5C3', '1000000502', 2, 'Circuito Integrado/MC74HC04N.webp'),
(61, 'Regulador de Voltaje LM317T', '4C2', '1000000450', 15, 'Regulador de voltaje/LM317T.png'),
(62, 'Regulador de Voltaje LM337T', '4C2', '1000000451', 7, 'Regulador de Voltaje/LM337.png'),
(63, 'Regulador de Voltaje L7806CV', '4A1', 'NL100000063', 4, 'Regulador de voltaje/L7806CV.png'),
(65, 'Potenciometro 1006/250k', '5A4', '1000000444', 2, 'potenciometro/potenciometro1006-250k.jfif'),
(66, 'Resistencia 10KOHM', '5A4', '1000000448', 93, 'resistencia/resistencia10KOHM.webp'),
(68, 'Micro acoplador DS2409 824A1', '5A2', '1000000417', 1, 'acopladorDS2409.jpg'),
(69, 'Circuito integrado 74F245D', '5A2', '1000000415', 2, 'Circuito Integrado/74F245D.jpg'),
(71, 'HMC239', 'N/E', 'NL100000071', 3, ''),
(74, 'Componente Receiver profile 74HCT123M', '5D3', '1000000052', 10, 'Multivibrador Monoestable/CD74HCT123M.jfif'),
(75, 'Termocontraibles 13/6.5', '5D5', '1000000035', 3, 'termocontraible/termocontraible.webp'),
(76, 'Mosfet IRLML2803TRPBF ', '4D1', '1000000413', 12, 'Mosfet/irlml2803trpbf.jpg'),
(77, 'Transistor BJT CEN2N3904', '4A3', '1000000013', 20, 'Transistor/2n3904.jpg'),
(78, 'Mosfet IRF 640', '4B2', '1000000455', 12, 'Mosfet/irf640.jpg'),
(79, 'Transistor Mosfet BF992 N-CH DUAL GATE 20V', '4A1', 'NL1000000412', 42, 'Transistor/BF992.jpg'),
(80, 'RF MOSFET CANAL N DUAL GATE 10V', '', 'MOSFETCANALNDUALGATE10V', 100, ''),
(83, 'Mosfet M51995FP', '4D3', '1000000543', 4, 'Mosfet/M51995FP.jpg'),
(84, 'TIC 246D', '5C1', 'NL1000000062', 2, 'Triacs/Tic246D.jpg'),
(85, 'Rectificador de Control TIC 106 D ', '5C1', 'NL100000085', 2, 'rectificador/RectificadorTIC106D.jpg'),
(86, 'Mosfet IRF 7319TRPBF', '5A1', 'NL100000086', 71, 'Mosfet/IRF7319.png'),
(91, 'Diodos Vishoy150mA 78-1N4148W-E3-08', '4A5', '1000000087', 486, 'Diodos/diodo1N4148W-E3-08.webp'),
(92, 'Transistor IRG4PC50UD', '4B5', '1000000535', 78, 'Transistor/IRG4PC50UD.jpg'),
(93, 'Fuente Toshiba Tigre 5332M', '6A1', '1000000055', 3, 'fuente/5332M.jpg'),
(94, 'Bisturi', '6C1', '1000000056', 6, 'bisturi/bisturi.webp'),
(95, 'Mica para TO-220', '6D1', '1000000463', 29, 'micas y niples/micaTO_220.jpg'),
(96, 'Niple aislant para to-3p', '6D1', '1000000464', 3, 'micas y niples/niple_para_to_3_p.jpg'),
(97, 'SG-615PHC  OSCILADOR DE CRISTAL DE ALTA FRECUENCIA TIPO SMD', '6A2', '1000000063', 4, 'oscilador/SG61514.webp'),
(98, 'Tarjeta HIF TOSHIBA 74F74D', '6A2', '1000000064', 3, 'tarjeta/74F74D.jpg'),
(99, 'Tarjeta HIF CT TOSHIBA VILLA GESSEL TL7705A CONTROLADOR V', '6A2', '1000000065', 4, 'supervisor/TL7705A.jpg'),
(100, 'Arandela Metal Pequeña', '6B2', '1000000080', 22, 'arandela/arandela_metal_pequeña.jpg'),
(101, 'Arandela Plastica Pequeña', '6B2', '1000000078', 67, 'arandela/arandela_plastico_pequeña.jpg'),
(102, 'Arandela Metal Mediana', '6B2', '1000000081', 7, 'arandela/arandela_metal_mediana.webp'),
(103, 'Sensor Analogico Temperatura LM35DZ', '6D2', 'NL1000000103', 2, 'sensor/LM35DZ.jpg'),
(104, 'Airpax TERMOSTATO 67L080', '6D2', '1000000510', 1, 'termostato/67L080.webp'),
(105, 'Abrazaderas 1/4 Pulgada', '6A3', 'NL1000000492', 2, ''),
(106, 'Condensador 4700uf - 16V 105º-85º', '6B3', '1000000106', 3, 'Condensador/4700uf16v.jpg'),
(107, 'Condensador 100uf 25v', '6B1', 'NL1000000107', 7, 'Condensador/100uf25v.jpg'),
(108, 'Amplificador gradiente 10uf 30v', '', 'Amplificador gradiente10uf30v', 2, ''),
(109, 'Capacitores Varios 10uf 30v(7), 104(4), 224J(1)', '6B3', 'NL1000000109', 5, 'capacitor/capacitoresVarios.jfif'),
(111, 'Orings de goma larga', '6D3', '1000000011', 13, ''),
(112, 'Orings de Goma Corta', '6D3', '1000000012', 9, ''),
(113, 'Circuito Integrado CL245A', '6A4', 'NL100000113', 10, 'Circuito Integrado/CL245A.png'),
(114, 'Conector de bateria 9V', '6C4', '1000000026', 8, 'bateria/conectorDeBateria.webp'),
(115, 'Tornillos Metal pequeños Varios', '6D4', 'TornillosMetalpequeños', 87, ''),
(116, 'Conector Macho Harting ', '6A5', '1000000534', 2, 'conector/ConectorMachoHarting.jpg'),
(117, 'BUP 304 IGBT', '6B5', '1000000442', 25, 'semiconductor/BUP304.jpg'),
(118, 'BYP 103 Diodo FRED', '6A3', 'NL1000000118', 11, ''),
(119, 'Transmisor Luz Laser TX HFBR1414 HP9917', '6D5', '1000000042', 8, 'transmisor/TransmisorLuzLaserTXHFBR1414.jpg'),
(120, 'Regulador de voltaje LM723CN', '4A4', 'LM723CN', 4, 'Regulador de voltaje/LM723CN.png'),
(123, 'Condensador CI206-33', '5A5', 'CI20633', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(124, 'Condensador CI206-150', '5A5', 'CI206150', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(125, 'Condensador 470 PF', '5A5', 'Condensador470PF', 17, 'Condensador/Condensador Capacitor Ceramico .webp'),
(126, 'Condensador C0805-220', '5A5', 'CondensadoresC0805-220', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(127, 'Condensador C0805-0,0047', '5A5', 'C080S-0,0047', 0, 'Condensador/Condensador Capacitor Ceramico .webp'),
(128, 'Condensador C0805-150 ', '5A5', 'CondensadoresC0805-150 ', 3, 'Condensador/Condensador Capacitor Ceramico .webp'),
(129, 'Condensador C0805-0,0022', '5A5', 'Condensador C0805-0,0022', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(130, 'Condensador C0805-0,001', '5A5', 'CondensadorC080S-0,001', 0, 'Condensador/Condensador Capacitor Ceramico .webp'),
(131, 'Condensador C0805-100', '5A5', 'CondensadorC080S-100 ', 0, 'Condensador/Condensador Capacitor Ceramico .webp'),
(132, 'Condensador C0805-820', '5A5', 'CondensadorC080S-820', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(133, 'Condensador CI206-680', '5A5', 'CondensadorCI206-680', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(134, 'Condensador C0805-560', '5A5', 'CondensadoresC080S-560', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(135, 'Condensador SMD C1206-390', '5A5', 'NL1000000135', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(136, 'Condensador C1206-270', '5A5', 'CondensadorC1206-270', 5, 'Condensador/Condensador Capacitor Ceramico .webp'),
(137, 'Condensador C0805-0,0033', '5A5', 'Condensador C0805-0,0033', 4, 'Condensador/Condensador Capacitor Ceramico .webp'),
(138, 'Diodo Simple DN 4148', '4D4', 'NL1000000138', 92, 'Diodos/diodoSimpleDN4148.jpg'),
(139, 'Silicon N-channel dual-gate MOS-FETs BF998R(MOW55)', '4D4', 'NL1000000139', 190, 'Mosfet/MOW551.jfif'),
(140, 'Mosfet P30N06', '4D3', '1000000053', 3, 'Mosfet/FetP30N06.jpg'),
(141, 'Amplificador Operacional TLC272CP', '4A2', '1000000409', 10, 'Amplificador/TLC272CP.jpg'),
(142, 'Transistor 2N3055', '4B3', 'NL1000000441', 9, 'Transistor/2N3055.jpg'),
(143, 'Mosfet 2N7002D GM', '4C3', '1000000420', 2, 'Mosfet/2N7002D.jpg'),
(144, 'Amplificador Operacional TLC 272 CD', '4B1', 'NL1000000144', 2, 'Amplificador/TLC272CD.png'),
(145, 'Mosfet CANAL N STW18NK80Z', '5B2', 'NL1000000145', 2, 'Mosfet/STW18NK80Z.png'),
(146, 'Mosfet AP4501GM', '4A1', 'NL1000000146', 4, 'Mosfet/AP4501GM.jpg'),
(147, 'Diodo Barrera SN74S1051', '5B2', '1000000466', 6, 'Diodos/SN74S1051.png'),
(149, 'Capacitor 104K 2G', '4C4', 'NL1000000149', 4, 'capacitor/104K2G.jpg'),
(150, 'Capacitor 103M 440L', '5C2', 'NL1000000150', 0, 'capacitor/103M440L.webp'),
(151, 'Varistor VDR 20D391K', '5C2', 'NL1000000151', 5, 'Varistor/VDR20D391K.png'),
(152, 'Transistor MMBT2369', '5D1', '1000000479', 3, 'Transistor/MMBT2369.webp'),
(153, 'TL7702ADC Supervisor V (GM)', '5D4', '1000000414', 3, 'supervisor/TL7702ACD.jpg'),
(154, 'Inductor 4.7uf', '5B3', '1000000469', 14, 'inductor/inductor2.7ufPN1812.jpg'),
(156, 'Inductor 0.5 uh', '5B3', '1000000470', 1, 'inductor/inductor0.5uh.jfif'),
(157, 'Inductor SMD 2.7af BODY FLEX ACHIEVA 1.5T PN:1008', '5B3', '1000000493', 1, 'inductor/SMD2.7.jpg'),
(158, 'Inductor 3.3uh', '5C2', 'NL100000157', 23, 'inductor/inductor3.3.png'),
(159, 'Inductor 1000 uh', '5B3', 'NL1000000159', 41, 'inductor/1000uh.jpg'),
(160, 'Inductor 6.8uh SMD ', '5A3', '1000000489', 101, 'inductor/inductor-SMD-6.8uh.jpg'),
(161, 'Fusibles 3.2A 99183930', '5A3', '1000000161', 4, 'fusibles/FUSIBLE3.2A.webp'),
(162, 'Mosfet Rectificador Internacional IRF 9540N', '4C1', '1000000069', 6, 'Mosfet/IRF9540.jpg'),
(163, 'Regulador de Voltaje LM1084IT 3.3', '5B1', '1000000443', 2, 'Regulador de voltaje/LM1084IT-3-3.jpg'),
(164, 'Amplificador Operacional OPA544T', '5D1', '100000164', 1, 'Amplificador/OPA544T.jpg'),
(165, 'Controlador Periferico SN75453BP', '5A2', '1000000165', 12, 'Controlador/SN75453BP.jpg'),
(167, 'GaAs MMIC SP4T NON-REFLECTIVESWITCH, DC - 2.0 GHz ', '5A2', '1000000418', 1, 'HMC182S14.jpg'),
(169, '  INTERRUPTOR SPDT MMIC GaAs DC - 2.5 GHz HMC239 h', '5A2', '1000000169', 3, 'HMC239.jpg'),
(170, 'Transistor SMD NPN NTE2402', '5D4', '1000000538', 4, 'Transistor/SMDNPNNTE2402.jpg'),
(171, 'MOSFET de potencia HEXFET', '5A1', '1000000171', 4, 'Mosfet/IRLL014N.jpg'),
(172, ' MOSFET DE POTENCIA DE CANAL P IRF9640', '4B2', '1000000456', 1, 'Mosfet/IRF9640.jpg'),
(173, 'Lampara Mamografo', '3A1', '1000000019', 1, 'Fusibles/LAMPARA_MAMOGRAFO_12V100W.webp'),
(174, 'condensador 35v 56uf', '3B1', '1000000173', 1, 'Condensador/condensador35v56uf.webp'),
(175, '2N7000 MOSFET de potencia de modo de mejora de canal N', '3B1', '1000000175', 2, 'Mosfet/2N7000-MOSFET.jpg'),
(176, ' BUZ80A Transistor de potencia SIPMOS (modo de mejora de canal N)', '3B1', '1000000176', 1, 'Transistor/BUZ80A.jpg'),
(178, 'Punta de unidad de soldado (Repuesto)', '3D1', '1000000043', 2, 'soldador/punta_soldador.webp'),
(179, 'Spagueti 06 T.Hasta 100^5', '3A2', '1000000179', 2, 'spaghetti/SPAGHETTI-FIBRA-DE-VIDRIO.jpg'),
(180, 'Diodo Rectificador E40NC60', '3B2', '1000000548', 5, 'Diodos/diodo_rectificador.webp'),
(181, 'APT2X60D100J Diodo Rectificador doble', '3B2', '1000000181', 1, 'Diodos/diodo_rectificador.webp'),
(182, 'Pinza Testeo', '3C2', 'NL1000000495', 1, 'pinza/pinzaTesteo.webp'),
(183, 'Resorte De Unidad de Soldado (Repuesto)', '3D2', '1000000044', 2, 'resorte/resorteDeSoldador.webp'),
(184, 'chip multivibrador monoestable', '3A3', '1000000184', 1, 'chip/14538B.png'),
(185, 'Resistencia 1000ohms', '3B3', '1000000185', 47, 'resistencia/1000ohms.jfif'),
(186, 'Pines Hembra Conector Molex 16 pines', '3A4', '1000000186', 1, 'conector/PinesHembraConectorMolex.JPG'),
(187, 'Tornillo Cabeza redonda', '3B4', '1000000187', 9, 'tornillo/cabezaRedonda.jpg'),
(188, 'Tornillo con tuerca y arandela', '3B4', '1000000188', 5, 'tornillo/cabezaPlanaConTuercayArandela.jfif'),
(189, 'Mecha TP 100DB-24', '3C4', '1000000428', 1, 'mecha/TP-100DB-24.webp'),
(190, 'Mecha TO-100DB-14', '3C4', '1000000427', 1, 'mecha/TP-100DB-14.webp'),
(191, 'Mecha TP-100DB-09', '3C4', '1000000426', 1, 'mecha/TP-100DB-09.webp'),
(192, 'Mecha TP-100DB-07', '3C4', '1000000425', 1, 'mecha/TP-100DB-07.webp'),
(193, 'Filtro de Unidad de Soldado', '3D4', '1000000045', 36, 'soldador/filtroUnidadDeSoldado.webp'),
(194, 'Cinta De Cobre', '3A5', '1000000194', 3, 'cinta/cintaDeCobre.webp'),
(195, 'Modulo Diodo Skkd', '3B5', '1000000195', 4, 'Diodos/diodoSKKD.webp'),
(196, 'Punta goot para pistola desoldadora TP-100N25', '3C5', '1000000196', 2, 'soldador/goot-tp-100-25.jpg'),
(197, 'Punta para Pistola desoldora TP-100N-S1', '3C5', '1000000429', 2, 'soldador/goot-tp-100N-S1.jpg'),
(198, 'Filtro goot TP-100/200F', '3D5', '1000000434', 3, 'soldador/TP100_200F.webp'),
(199, ' Amplificadores operacional LM324N', '6B1', '1000000199', 1, 'Amplificador/LM324N.webp'),
(200, 'Condensador 100uf 63v', '6B1', 'NL1000000200', 1, 'Condensador/100uf63v.jpg'),
(201, 'Condensador 100uf 35v', '6B1', '1000000201', 1, 'Condensador/100uf35v.jpg'),
(202, 'tornillo Para Fet', '6C3', '1000000024', 29, 'tornillo/tornilloParaFet.jpg'),
(203, 'Resistencia 1ohms', '6B4', '1000000498', 449, 'resistencia/1_ohm_1R0.webp'),
(204, 'Conector Hembra Harting', '6A5', '1000000533', 1, 'conector/ConectorHembraHarting.webp'),
(205, 'Condensador 470uf 16v', '6B3', 'NL1000000205', 7, 'condensador/condensador470uf16v.jpg'),
(206, 'Mosfet IRF640A', '6A1', 'NL1000000206', 1, 'mosfet/MosfetIRF640A.png'),
(207, 'IRF640B 200V N-Channel MOSFET', '6A1', 'NL1000000207', 1, 'mosfet/IRF640B.jpg'),
(208, 'Capacitor Varios 152 500v(6), 272(8), 472 500v(6)', '2A1', 'NL1000000208', 20, 'capacitor/capacitoresVarios2A1.jfif'),
(209, 'Estaño 1mm', '2A5', 'NL1000000209', 1, 'estaño/estaño1mm.webp'),
(210, 'Estaño 1.6mm', '2B5', 'NL1000000210', 1, 'estaño/estaño1.6mm.jpg'),
(211, 'Estaño 0.5mm', '2A5', 'NL1000000211', 1, 'estaño/estano05mm.jpg'),
(212, 'Tornillos Varios M5X25(5), M8X20(15), M4X8(52), M5X20(10)', '2D1', 'NL1000000212', 82, 'tornillo/TornillosVarios2d1.jfif'),
(213, 'Embase Autocollante 20x20', '2C2', 'NL1000000213', 10, 'embase/embaseAutocollante.webp'),
(214, 'Tornillos Varios M3X10(10), M5X10(14), M4X20(4), M5X20(5), M5X14(5), M5X25(5)', '2D2', 'NL1000000214', 24, 'tornillo/tornillosVarios2D2.jfif'),
(215, 'Tornillos Varios M5X25(5), M5X14(5), M4X8(29), M3X5(9), M3X10(3), M5X14(5), M4X20(5)', '2D5', 'NL1000000215', 66, 'tornillos/tornillosVarios2D5.jfif'),
(216, '1N4007 Diodo Pinout', '1A1', 'NL1000000216', 8, 'Diodos/1N4007_DiodoPinout.gif'),
(217, '26LS32ACN Receptor de Línea Diferencial Cuádruple', '1B2', 'NL1000000217', 4, 'receptor/ReceptoresdeLíneaDiferencialCuádruple.jfif'),
(218, 'conector BNC', '1D2', 'NL1000000218', 4, 'conector/conectorBNC.jpg'),
(219, 'ASS6', '1A5', 'NL1000000219', 101, 'rohs/ASS6.jpg'),
(220, 'LCB8', '1B5', 'NL1000000220', 98, 'rohs/LCB8.webp'),
(221, 'Resistencias Varias: 100Ω(99), 220Ω(93), 150Ω(460) 5R6Ω(6), 4R7Ω(10),470Ω(9)', '8A1', 'NL1000000221', 677, 'resistencia/resistenciasVarias8A1.jfif'),
(222, 'Conector RJ45', '8B1', 'NL1000000222', 3, 'conector/conectorRJ45.png'),
(223, 'Diodo Schottky BAT545', '8C1', 'NL1000000223', 89, 'Diodos/diodoBAT545.jpg'),
(224, 'Capacitor 100uf 50v 85º-105º', '8D1', 'NL1000000224', 2, 'capacitor/capacitor100uf50v.jpg'),
(225, 'Capacitor 470uf 50v', '8D1', 'NL1000000225', 2, 'capacitor/capacitor470uf50v.jfif'),
(226, 'Capacitor 10uf 63v', '8D1', 'NL1000000226', 6, 'capacitor/Capacitor10uf63v.jpg'),
(227, 'Capacitor 10uf 160v', '8D1', 'NL1000000227', 7, 'capacitor/Capacitor10uf160v.jpg'),
(228, 'Capacitor 10uf 25v', '8D1', 'NL1000000228', 5, 'capacitor/Capacitor10uf25v.jpg'),
(229, 'Resistencias Varias: 183Ω(19), 150Ω(38), 134Ω(51), SR10Ω(89), 4R7Ω(97), 102Ω(91)', '8A2', 'NL1000000229', 385, 'resistencia/resistenciasVarias8A2.jfif'),
(230, 'Fusible FF5A 600V', '8B2', 'NL1000000230', 1, 'fusibles/FF5A600V.webp'),
(231, 'Fusible  T5H500V', '8B2', 'NL1000000231', 1, 'fusibles/fusibleT5H500V.jpg'),
(232, 'Capacitor 33uf 350v', '8B4', 'NL1000000232', 2, 'capacitor/capacitor33uf350v.jpg'),
(233, 'Rectificador BT151', '8C2', 'NL1000000233', 2, 'rectificador/rectificadorBT151.jpg'),
(234, 'Chip Monolitico RAM estática no volátil de 8 Kb x 8 M48T59Y-70PC1U', '8B1', 'NL1000000234', 3, 'chip/M48T59Y-70PC1U.jpg'),
(235, 'Conector Gradiente FC-16P hembra', '8C2', 'NL1000000235', 4, 'conector/FC-16P.jpg'),
(236, '473J 400v(1), CF-KH250V(1), 120Ω(8), 100Ω(2), Fusible 3A250V(5), Capacitor104(1)', '8A3', 'NL1000000236', 18, 'resistencia/componentesVarios8A3.jfif'),
(237, 'Resistencia 23kΩ', '8D2', 'NL1000000237', 1, 'resistencia/23Kohm.jfif'),
(238, 'Resistencia 18kΩ', '8D2', 'NL1000000238', 1, 'resistencia/resistencia18Kohm.jfif'),
(239, 'Mosfet N-CH 2N7002K', '8D2', 'NL1000000239', 9, 'mosfet/2N7002K.jpg'),
(240, 'Inductor NLV32T-4R7J-PF', '8B3', 'NL1000000240', 24, 'inductor/NLV32T-4R7J-PF.jpg'),
(241, 'Regulador de voltaje Negativo L7915CV', '8C3', 'NL1000000241', 3, 'Regulador de voltaje/reguladorDeVoltajeNegativoL7915CV.jpg'),
(242, ' REGULADORES DE VOLTAJE POSITIVO L7815CD2T', '8C3', 'NL1000000242', 4, 'Regulador de voltaje/reguladorDeVoltajePositivoL7815CD2T.jpg'),
(243, 'REGULADOR DE TENSIÓN FIJA POSITIVA DE TRES TERMINALES 7815CG', '8C3', 'NL1000000243', 1, 'Regulador de voltaje/ReguladorDeTension7815CG.jpg'),
(244, 'REGULADORES DE VOLTAJE NEGATIVO L7912CV', '8C3', 'NL1000000244', 1, 'Regulador de voltaje/L7912CV.jpg'),
(245, ' Reguladores de voltaje negativo de 1,0 A 7915CT', '8C1', 'NL1000000245', 1, 'Regulador de voltaje/MC7915CT.jpg'),
(246, 'Capacitor 100uf 100v', '8D3', 'NL1000000246', 6, 'capacitor/capacitor100uf100v.jpg'),
(247, 'Capacitor 100uf 16v', '8D3', 'NL1000000247', 8, 'capacitor/capacitor100uf16v.jpg'),
(248, 'Fusible BUSS GBB 30A', '8C4', 'NL1000000248', 4, 'fusibles/FusibleBUSSGBB30A.jpg'),
(249, 'Capacitor 820uf 25v', '8D4', 'NL1000000249', 17, 'capacitor/capacitor820uf25v.webp'),
(250, 'Fusible 2258647 (Tomografo)', '8A5', 'NL1000000250', 3, 'Fusibles/Fusible2258647.jpg'),
(251, 'Diodos Z de silicio BZG03C15', '8A4', 'NL1000000251', 14, 'diodos/BZG03C15.jpg'),
(252, ' +5 V, baja potencia, salida de voltaje, DAC serie de 12 bits MAX531BCPD', '8B1', 'NL1000000252', 1, 'low-power/MAX531BCPD.jpg'),
(253, 'Disparador Schmitt NAND cuádruple de 2 entradas HEF4093BT', '8B5', 'NL1000000253', 10, 'Circuito Integrado/HEF4093BT.png'),
(254, 'Circuito Integrado HEF4528BT', '8B5', 'NL1000000254', 2, 'Circuito Integrado/HEF4528BT.jpg'),
(255, 'Punta Para soldador', '8C5', 'NL1000000255', 3, 'soldador/punta soldador.jfif'),
(256, 'Repuesto Para Punta de Soplador Aire Caliente', '8C5', 'NL1000000256', 4, 'sopladorAireCaliente/RepuestoPuntaSoplador.webp'),
(257, 'capacitor 103 2KV', '9A1', 'NL1000000257', 18, 'capacitor/capacitor103_2KV.jfif'),
(258, 'Mosfet dual canal N. Bobinas 0.23 panorama/proview (WMA40)', '9A1', 'NL1000000258', 16, 'mosfet/Bobinas0.23panoramaWMA40.jfif'),
(259, ' Transistor TrenchMOS de canal N PHP20NQ20T', '9A1', 'NL1000000259', 1, 'transistor/php20nq20t.webp'),
(260, 'capacitor 100uf 10v', '9A1', 'NL1000000260', 1, 'capacitor/capacitor100uf10v.jpg'),
(261, 'IGBT ultrarrápido de 35 A, 600 V GW35HF 60WDA', '9B1', 'NL1000000261', 8, 'transistor/GW35HF60WDA.png'),
(262, 'capacitor 10uf 50v', '9B1', 'NL1000000262', 3, 'capacitor/capacitor10uf50v.webp'),
(263, 'MOS-n-FET-d* BF908 (M26)', '9B1', 'NL1000000263', 2, 'Mosfet/BF908(M26).jpg'),
(264, 'Cables Gradientes', '9D1', 'NL1000000264', 3, 'cable/cableGradiente.jfif'),
(265, 'Rectificador G4PC50U', '9A2', 'NL1000000265', 40, 'rectificador/G4PC50U.jpg'),
(266, 'Tornillos Varios', '9B2', 'NL1000000266', 80, 'tornillo/tornillosVarios(9B2).jfif'),
(267, 'Conectores plasticos de bobinas', '9C2', 'NL1000000267', 8, 'conector/ConectoresPlasticosDeBobinas(9C2).jfif'),
(268, 'Diodo 1N4007 SMD', '9D2', 'NL1000000268', 19, 'Diodos/diodo1N4007.webp'),
(269, 'LMH6715MA /NOPB', '9D2', 'NL1000000269', 9, 'Amplificador/AmplificadorOperacionalLMH6715MA_NOPB.webp'),
(270, 'BF908 MOS-FET de doble puerta (WM1)', '9C1', 'NL1000000270', 8, 'Mosfet/BF908,215.jpg'),
(271, 'Conector Gradiente FC-16P hembra', '9B3', 'NL1000000271', 31, 'conector/FC-16P.jpg'),
(272, 'Inversor hexagonal DM74LS14N', '9A3', 'NL1000000272', 1, 'Circuito Integrado/DM74LS14N.jpg'),
(273, ' Optoacoplador de accionamiento de compuerta HCPL3150/A3150', '9C3', 'NL1000000273', 23, 'transistor/optoacopladorHCPL3150.webp'),
(274, 'MOS-FET de doble puerta de canal N BF998(MOW32)', '9D3', 'NL1000000274', 18, 'Mosfet/BF998(MOW32).jpg'),
(275, 'Mosfet (WMB88) ^BF992_215', '9A4', 'NL1000000275', 6, 'Mosfet/MosfetWMB88.jfif'),
(276, 'MOS-n-FET-d* BF908 (M26)', '9A4', 'NL1000000276', 2, 'Mosfet/SemiconductorsBF908,215.jpg'),
(277, 'Inductor NLV32T-4R7J-PF', '9A4', 'NL1000000277', 16, 'inductor/NLV32T-4R7J-PF.jpg'),
(278, 'Fusible F3 15A 250V', '9A4', 'NL1000000278', 12, 'Fusibles/F315A250V.webp'),
(279, 'DIODO BAV99', '9B4', '1000000594', 4, 'Diodos/BAV99_diode.jpg'),
(280, ' MOSFET de potencia HEXFET IRF7403', '9C1', 'NL1000000280', 17, 'Mosfet/MosfetIRF7403.webp'),
(281, 'MOSFET de potencia IRF7416', '9C4', 'NL1000000281', 25, 'Mosfet/IRF7416.jpg'),
(282, 'Diodo Regulador de Voltaje Zener MMSZ5231BT1', '9C4', 'NL1000000282', 40, 'Diodos/MMSZ5231BT1.webp'),
(283, 'DIODOS ZENER DE SILICIO MMSZ5230B', '9C4', 'NL1000000283', 36, 'Diodos/MMSZ5230B.jpg'),
(284, 'Receptores de línea diferencial cuádruple DS26LS32ACN', '9D4', 'NL1000000284', 6, 'receptor/DS26LS32ACN.jpg'),
(285, 'Pinzas Cocodrilo', '9A5', 'NL1000000285', 2, 'pinza/pinzasCocodrilo.jfif'),
(286, 'Cable Gradiente', '9A5', 'NL1000000286', 1, 'cable/cableGradiente(9A5).jfif'),
(287, 'Cable De Sonido', '9A5', 'NL1000000287', 1, 'cable/cableDeSonido.jpg'),
(288, 'Cable con Pinza Cocodrilo', '9B5', 'NL1000000288', 5, 'cable/PinzaCocodriloConCable.jfif'),
(289, 'Mosfet E40NA60', '9C5', 'NL1000000289', 4, 'Mosfet/E40NA60.jpg'),
(290, 'DIODO RECTIFICADOR DOBLE APT2X60D100J', '9C5', 'NL1000000290', 3, 'Diodos/APT2X60D100J.webp'),
(291, 'MOSFET de potencia canal N APT10025JVR', '9C5', 'NL1000000291', 2, 'Mosfet/APT10025JVR.webp'),
(292, 'Cables Varios', '9D5', 'NL1000000292', 9, 'cable/cablesVarios(9D5).jfif'),
(293, 'Diodo Led Azul', '9C3', 'NL1000000293', 6, 'Diodos/DiodoLedAzul.jpg'),
(294, 'Conector FD 16P', '1C5', 'NL1000000294', 50, 'conector/FD_16P.jpg'),
(295, 'Conector FD 16P', '1D5', 'NL1000000295', 49, 'conector/FD_16P.jpg'),
(296, 'Condensador Pequeño 1000uf 35v', '4D5', '1000000091', 4, 'Condensador/CondensadorPequeño.webp'),
(297, 'Capacitor 680uf 25v', '2B1', 'NL1000000297', 8, 'capacitor/680uf25v.jpg'),
(298, 'Capacitor 220uf 16v', '2B1', 'NL1000000298', 9, 'capacitor/220uf16v.jpg'),
(299, 'Capacitor 68uf 50v', '2C1', 'NL1000000299', 40, 'capacitor/68uf50v.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `componentes_exportar`
--

CREATE TABLE `componentes_exportar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `ubicacion` varchar(10) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `detalle` varchar(50) NOT NULL,
  `envase` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `tasa_iva` varchar(10) NOT NULL,
  `iva` decimal(5,2) NOT NULL,
  `importe_final` decimal(6,2) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `categoria`, `detalle`, `envase`, `cantidad`, `precio`, `tasa_iva`, `iva`, `importe_final`, `total`) VALUES
(1, 'PHXL', 'Limpiacontactos y desengrasantes', 'Compitt prophyl - Alcohol isopropílico de alta pur', '1000cc ', 10, '1116.14', '21', '234.39', '1350.53', '13505.30'),
(2, 'PH ', 'Limpiacontactos y desengrasantes', 'Compitt prophyl - Alcohol isopropílico de alta pur', '440cc', 12, '761.74', '21', '159.97', '921.71', '11060.52'),
(3, 'CSGV', 'Limpiacontactos y desengrasantes', 'Contacmatic super verde - con propelente CO2', '440cc', 12, '2908.61', '21', '610.81', '3519.42', '42233.04'),
(4, 'HX100', 'Productos para limpieza', 'Hisopos de poliuretano', 'x 100 un.', 2, '8986.43', '21', '999.99', '9986.42', '19972.84'),
(5, 'PAÑOXB', 'Productos para limpieza', 'Compitt blue wipes - paños de alta absorción', 'bobina X 190', 6, '3942.44', '21', '827.91', '4770.35', '28622.10'),
(6, 'ROLLO', 'Productos para limpieza', 'Rollo papel celulosa', 'bobina 360m.', 6, '3582.25', '21', '752.27', '4334.52', '26007.12'),
(7, 'LIMP1', 'Productos para limpieza', 'Limpia carcazas - líquido limpiador', '1000cc ', 6, '699.8', '21', '146.96', '846.76', '5080.56'),
(8, 'ORGA', 'Removedores de partículas', 'Compitt or - Removedores de particulas', '440cc', 6, '2875.62', '21', '603.88', '3479.50', '20877'),
(9, 'RFX', 'Fluxes, removedores, aislantes y enfriantes', 'Removedor de flux', '180cc', 12, '809', '21', '169.89', '978.89', '11746.68'),
(10, 'CFX', 'Fluxes, removedores, aislantes y enfriantes', 'Contacflux - Protector de flux orgánico', '180cc', 6, '580.51', '21', '121.91', '702.42', '4214.52'),
(11, 'DESP', 'Fluxes, removedores, aislantes y enfriantes', 'Removedor de etiquetas', '330cc', 10, '665.35', '21', '139.72', '805.07', '8050.70'),
(12, 'A', 'Fluxes, removedores, aislantes y enfriantes', 'Aislamatic - lacra protectora acrílica en aerosol', '180cc', 6, '658.8', '21', '138.35', '797.15', '4782.90'),
(13, 'GEL', 'Fluxes, removedores, aislantes y enfriantes', 'Contacflux gel', 'jeringa 10cc', 6, '206.6', '21', '43.39', '249.99', '1499.94'),
(14, 'AA', 'Fluxes, removedores, aislantes y enfriantes', 'Aislante acrílico', '60cc', 6, '491.76', '21', '103.27', '595.03', '3570.18'),
(15, 'MALLA3', 'Fluxes, removedores, aislantes y enfriantes', 'Malla desoldante', '3.5mm', 10, '304.26', '21', '63.89', '368.15', '3681.50'),
(16, 'MALLA ', 'Fluxes, removedores, aislantes y enfriantes', 'Malla desoldante', '2.5mm', 10, '252.55', '21', '53.04', '305.59', '3055.90'),
(17, 'LF', 'Fluxes, removedores, aislantes y enfriantes', 'Localizador de fallas', '180cc', 6, '1409.92', '21', '296.08', '1706.00', '10236'),
(18, 'RL', 'Fluxes, removedores, aislantes y enfriantes', 'Resina de limpieza para soldadores', 'pote 40g', 6, '229.93', '21', '48.29', '278.22', '1669.32'),
(19, 'PLCH', 'Productos misceláneos', 'Pintura de plata', '6g', 6, '2933.25', '21', '615.98', '3549.23', '21295.38'),
(20, 'DECA', 'Productos misceláneos', 'Decapante para soldadura sobre superficies difícil', '5cc', 10, '98.57', '21', '20.70', '119.27', '1192.70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `codigobarras`
--
ALTER TABLE `codigobarras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `componentes`
--
ALTER TABLE `componentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `codigobarras`
--
ALTER TABLE `codigobarras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `componentes`
--
ALTER TABLE `componentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
