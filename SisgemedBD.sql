-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2014 a las 22:28:44
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sisgemed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `rut` varchar(80) NOT NULL,
  `primer_nombre` varchar(80) NOT NULL,
  `segundo_nombre` varchar(80) NOT NULL,
  `apellido_paterno` varchar(80) NOT NULL,
  `apellido_materno` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`id_administrador`),
  KEY `usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `id_usuario`, `rut`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `direccion`, `correo`, `sexo`, `imagen`, `fecha_nacimiento`) VALUES
(1, 5, '17484456-9', 'cristian', 'alejandro', 'vidal', 'muñoz', '123458', 'luis de gongora,931,santiago', 'cristian@gmail.com', 'M', '42342_cristian_vidal.png', '1990-11-05'),
(2, 6, '178546982-8', 'diego', '', 'miranda', '', '4545456', 'calle siempre vida,234,sprint', 'diego@gmail.com', 'M', 'img_diego', '1990-08-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alergias`
--

CREATE TABLE IF NOT EXISTS `alergias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `alergeno` varchar(100) NOT NULL,
  `sintomatologia` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE IF NOT EXISTS `especialidades` (
  `id_especialidad` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(150) NOT NULL,
  PRIMARY KEY (`id_especialidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id_especialidad`, `especialidad`) VALUES
(1, 'Especialidades clínicas'),
(2, 'Especialidades quirúrgicas'),
(3, 'Especialidades médico-quirúrgicas'),
(4, 'Especialidades de laboratorio o diagnósticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_civiles`
--

CREATE TABLE IF NOT EXISTS `estados_civiles` (
  `id_estado_civil` int(11) NOT NULL AUTO_INCREMENT,
  `estado_civil` varchar(80) NOT NULL,
  PRIMARY KEY (`id_estado_civil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `estados_civiles`
--

INSERT INTO `estados_civiles` (`id_estado_civil`, `estado_civil`) VALUES
(1, 'Soltero/a'),
(2, 'Casado/a'),
(3, 'Divorciado/a'),
(4, 'Viudo/a'),
(5, 'Separado/a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `ruta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `titulo`, `ruta`) VALUES
(1, 'jhbaLFDIKJ', 'Captura.PNG'),
(2, 'jhbaLFDIKJ', 'Captura1.PNG'),
(3, 'HOLA', 'apache-logo.png'),
(4, 'titulo', '800px-PHP-n_logo_svg1.png'),
(5, 'titulo', '800px-PHP-n_logo_svg2.png'),
(6, 'titulo1', 'ClienteServidorSPMD.jpg'),
(7, 'titulo1', 'ClienteServidorSPMD1.jpg'),
(8, 'titulo1', 'ClienteServidorSPMD2.jpg'),
(9, 'titulo1', 'ClienteServidorSPMD3.jpg'),
(10, 'titulo1', 'ClienteServidorSPMD4.jpg'),
(11, 'titulo1', 'ClienteServidorSPMD5.jpg'),
(12, 'titulo1', 'ClienteServidorSPMD6.jpg'),
(13, 'imagen', 'netbeans.jpg'),
(14, 'imagen', 'netbeans1.jpg'),
(15, 'imagen', 'netbeans2.jpg'),
(16, 'imagen', 'netbeans3.jpg'),
(17, 'imagen', '500px-Xampp_logo.svg_.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE IF NOT EXISTS `instituciones` (
  `id_institucion` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(50) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `nom_institucion` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono1` varchar(80) NOT NULL,
  `telefono2` varchar(80) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha_ingreso` datetime NOT NULL,
  PRIMARY KEY (`id_institucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`id_institucion`, `rut`, `razon_social`, `nom_institucion`, `direccion`, `telefono1`, `telefono2`, `correo`, `fecha_ingreso`) VALUES
(1, '14859658-8', 'clinica', 'Clinica Santa Maria', 'jose valsde, 232', '23123123', '545454545', 'sfg@gmail.com', '2014-08-15 00:55:00'),
(2, '1285496-8', 'consultorio', 'Clinica Alemana', 'juan carlos CA,34, Santiago', '424324', '23423423', 'JJP@gmail.com', '2014-08-14 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE IF NOT EXISTS `medicamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `componente` varchar(100) NOT NULL,
  `laboratorio` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `nombre`, `componente`, `laboratorio`, `descripcion`) VALUES
(1, 'Depurol', 'Venlafaxina', 'Maber', 'Tratamiento contra la depresion severa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles_estudios`
--

CREATE TABLE IF NOT EXISTS `niveles_estudios` (
  `id_nivel_estudio` int(11) NOT NULL AUTO_INCREMENT,
  `nivel_estudio` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nivel_estudio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `niveles_estudios`
--

INSERT INTO `niveles_estudios` (`id_nivel_estudio`, `nivel_estudio`) VALUES
(1, 'Nivel básico (Enseñanza Básica)'),
(2, 'Nivel Secundario (Enseñanza Media)'),
(3, 'Técnico de Nivel Superior'),
(4, 'Profesional'),
(5, 'Bachiller'),
(6, 'Licenciado'),
(7, 'Magister'),
(8, 'Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `rut` varchar(80) NOT NULL,
  `primer_nombre` varchar(80) NOT NULL,
  `segundo_nombre` varchar(80) NOT NULL,
  `apellido_paterno` varchar(80) NOT NULL,
  `apellido_materno` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `id_estadocivil` int(11) NOT NULL,
  `id_prevision_medica` int(11) NOT NULL,
  `id_nivel_estudio` int(11) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  PRIMARY KEY (`id_paciente`),
  KEY `usuario` (`id_usuario`),
  KEY `prevision_medica` (`id_prevision_medica`),
  KEY `nivel_estudio` (`id_nivel_estudio`),
  KEY `estado_civil` (`id_estadocivil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `id_usuario`, `rut`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `direccion`, `correo`, `sexo`, `id_estadocivil`, `id_prevision_medica`, `id_nivel_estudio`, `imagen`, `fecha_nacimiento`, `fecha_ingreso`) VALUES
(1, 7, '58745698-9', 'gustavo', 'alexis', 'vidal', 'muñoz', '4234324', 'carlos henrique ,3242,santiago', 'gus@gmail.com', 'M', 1, 1, 5, 'img_gus', '1992-05-01', '2014-08-19'),
(2, 8, '589632874-5', 'daniel', 'alexis', 'vidal', 'perez', '3423432', 'san alberto hurtado,2342,santiago', 'daniel@gmail.com', 'M', 2, 2, 2, 'daniel_img', '1993-07-05', '2014-08-18'),
(3, 9, '857456321-8', 'daniela', 'fernanda', 'alvares', 'catrileo', '8552145', 'las rejas,323,santiago', 'daniela@gmail.com', 'F', 3, 2, 3, 'daniela_img', '1985-11-08', '2014-08-15'),
(4, 10, '14879632-8', 'denise', 'andrea', 'castillo', 'castro', '424234', 'estacion centra,324,santiago', 'denise@gmail.com', 'F', 4, 2, 2, 'denise_img', '1994-08-07', '2014-08-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patologias`
--

CREATE TABLE IF NOT EXISTS `patologias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sistema` varchar(60) NOT NULL,
  `sintomatologia` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(50) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Profesional de la salud'),
(3, 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles_profesionales`
--

CREATE TABLE IF NOT EXISTS `perfiles_profesionales` (
  `id_perfiles_profesionales` int(11) NOT NULL AUTO_INCREMENT,
  `perfil_profesional` varchar(100) NOT NULL,
  PRIMARY KEY (`id_perfiles_profesionales`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `perfiles_profesionales`
--

INSERT INTO `perfiles_profesionales` (`id_perfiles_profesionales`, `perfil_profesional`) VALUES
(1, 'Profesional Administrativo'),
(2, 'Profesional de la Salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles_profesionales_permisos`
--

CREATE TABLE IF NOT EXISTS `perfiles_profesionales_permisos` (
  `id_perfil_profesional_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_perfil_profesional` int(11) NOT NULL,
  `id_permiso_profesional` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id_perfil_profesional_permiso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `perfiles_profesionales_permisos`
--

INSERT INTO `perfiles_profesionales_permisos` (`id_perfil_profesional_permiso`, `id_perfil_profesional`, `id_permiso_profesional`, `valor`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 3),
(3, 1, 3, 3),
(4, 1, 4, 3),
(5, 1, 5, 3),
(6, 1, 6, 3),
(7, 1, 7, 3),
(8, 1, 8, 3),
(9, 1, 9, 3),
(10, 1, 10, 3),
(11, 1, 11, 3),
(12, 1, 12, 3),
(13, 1, 13, 3),
(14, 1, 14, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_profesionales`
--

CREATE TABLE IF NOT EXISTS `permisos_profesionales` (
  `id_permiso_profesional` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_permiso_profesional`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `permisos_profesionales`
--

INSERT INTO `permisos_profesionales` (`id_permiso_profesional`, `titulo`, `nombre`) VALUES
(1, 'Dashboard', 'Dashboard'),
(2, 'Perfil', 'Perfil'),
(3, 'Medicamentos', 'Medicamentos'),
(4, 'Alergias', 'Alergias'),
(5, 'Enfermedades', 'Enfermedades'),
(6, 'Tratamientos', 'Tratamientos'),
(7, 'Vacunas', 'Vacunas'),
(8, 'Ficha Clínica', 'Ficha Clinica'),
(9, 'Orden Médica', 'Orden Medica'),
(10, 'Consentimiento Informado', 'Consentimiento Informado'),
(11, 'Calendario', 'Calendario'),
(12, 'Consulta Médica', 'Consulta Medica'),
(13, 'Soporte', 'Soporte'),
(14, 'Personal Institucion', 'Personal Institucion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `previsiones_medicas`
--

CREATE TABLE IF NOT EXISTS `previsiones_medicas` (
  `id_prevision_medica` int(11) NOT NULL AUTO_INCREMENT,
  `prevision_medica` varchar(80) NOT NULL,
  PRIMARY KEY (`id_prevision_medica`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `previsiones_medicas`
--

INSERT INTO `previsiones_medicas` (`id_prevision_medica`, `prevision_medica`) VALUES
(1, 'Fonasa'),
(2, 'Isapre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE IF NOT EXISTS `profesionales` (
  `id_profesional` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_perfil_profesional` int(11) NOT NULL,
  `rut` varchar(80) NOT NULL,
  `primer_nombre` varchar(80) NOT NULL,
  `segundo_nombre` varchar(80) NOT NULL,
  `apellido_paterno` varchar(80) NOT NULL,
  `apellido_materno` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `sexo` char(1) NOT NULL,
  `imagen` varchar(80) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  PRIMARY KEY (`id_profesional`),
  KEY `idusuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`id_profesional`, `id_usuario`, `id_perfil_profesional`, `rut`, `primer_nombre`, `segundo_nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `direccion`, `correo`, `sexo`, `imagen`, `fecha_nacimiento`) VALUES
(1, 3, 1, '14589632-8', 'alexis', 'alejandro', 'sánchez', 'sánchez', '456456456', 'calle siempre viva,123', 'humberto@gmail.com', 'M', '1205_alexis_sanchez.jpg', '1992-08-18'),
(2, 1, 2, '1748496-8', 'humberto', 'chupete', 'suazo', 'muñoz', '423432', 'luis de gongora,3432,santiago', 'humberto@gmail.com', 'M', '174551_humberto_suazo.png', '1990-11-11'),
(3, 4, 1, '14857965-8', 'carlos', 'bastian', 'perez', 'campo', '2342323', 'calle siempre viva,3434,santiago', 'carlos@gmail.com', 'M', 'carlos_img', '1980-08-03'),
(4, 2, 2, '45456545-6', 'matias', 'ariel', 'fernandez', 'cordero', '4454545', 'calle siempre viva,3423,santiago', 'matias@gmail.com', 'M', '8826119_matias_fernandez.png', '1990-08-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales_especialidades`
--

CREATE TABLE IF NOT EXISTS `profesionales_especialidades` (
  `id_profesional_especialidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesional` int(11) NOT NULL,
  `id_especialidad` int(11) NOT NULL,
  `id_sub_especialidad` int(11) NOT NULL,
  PRIMARY KEY (`id_profesional_especialidad`),
  KEY `profesional` (`id_profesional`),
  KEY `sub_especialidad` (`id_sub_especialidad`),
  KEY `especialidad` (`id_especialidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `profesionales_especialidades`
--

INSERT INTO `profesionales_especialidades` (`id_profesional_especialidad`, `id_profesional`, `id_especialidad`, `id_sub_especialidad`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 2, 2, 2),
(4, 2, 3, 3),
(5, 2, 4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales_permisos`
--

CREATE TABLE IF NOT EXISTS `profesionales_permisos` (
  `id_profesional_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `id_profesional` int(11) NOT NULL,
  `id_permiso_profesional` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id_profesional_permiso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `profesionales_permisos`
--

INSERT INTO `profesionales_permisos` (`id_profesional_permiso`, `id_profesional`, `id_permiso_profesional`, `valor`) VALUES
(1, 1, 1, 3),
(2, 1, 2, 3),
(3, 1, 3, 2),
(4, 2, 1, 3),
(5, 2, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_especialidades`
--

CREATE TABLE IF NOT EXISTS `sub_especialidades` (
  `id_sub_especialidad` int(11) NOT NULL AUTO_INCREMENT,
  `id_especialidad` int(11) NOT NULL,
  `sub_especialidad` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sub_especialidad`),
  KEY `especialidad` (`id_especialidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Volcado de datos para la tabla `sub_especialidades`
--

INSERT INTO `sub_especialidades` (`id_sub_especialidad`, `id_especialidad`, `sub_especialidad`) VALUES
(1, 1, 'Alergología'),
(2, 1, 'Anestesiología y reanimación'),
(3, 1, 'Cardiología'),
(4, 1, 'Gastroenterología'),
(5, 1, 'Endocrinología'),
(6, 1, 'Geriatría'),
(7, 1, 'Hematología y hemoterapia'),
(8, 1, 'Hidrología médica'),
(9, 1, 'Infectología'),
(10, 1, 'Medicina aeroespacial'),
(11, 1, 'Medicina del deporte'),
(12, 1, 'Medicina del trabajo'),
(13, 1, 'Medicina de urgencias'),
(14, 1, 'Medicina familiar y comunitaria'),
(15, 1, 'Medicina intensiva'),
(16, 1, 'Medicina interna'),
(17, 1, 'Medicina legal y forense'),
(18, 1, 'Medicina preventiva y salud pública'),
(19, 1, 'Nefrología'),
(20, 1, 'Neumología'),
(21, 1, 'Neurología'),
(22, 1, 'Nutriología'),
(23, 1, 'Odontología'),
(24, 1, 'Oftalmología'),
(25, 1, 'Oncología médica'),
(26, 1, 'Oncología radioterápica'),
(27, 1, 'Otorrinolaringología'),
(28, 1, 'Pediatría'),
(29, 1, 'Proctología'),
(30, 1, 'Psiquiatría'),
(31, 1, 'Rehabilitación'),
(32, 1, 'Reumatología'),
(33, 1, 'Traumatología'),
(34, 1, 'Toxicología'),
(35, 1, 'Urología'),
(36, 2, 'Cirugía cardiovascular'),
(37, 2, 'Cirugía general y del aparato digestivo'),
(38, 2, 'Cirugía oral y maxilofacial'),
(39, 2, 'Cirugía ortopédica y traumatología'),
(40, 2, 'Cirugía pediátrica'),
(41, 2, 'Cirugía plástica, estética y reparadora'),
(42, 2, 'Cirugía torácica'),
(43, 2, 'Neurocirugía'),
(44, 3, 'Angiología y cirugía vascular'),
(45, 3, 'Dermatología médico-quirúrgica y venereología'),
(46, 3, 'Estomatología'),
(47, 3, 'Ginecología y obstetricia o tocología'),
(48, 3, 'Oftalmología'),
(49, 3, 'Otorrinolaringología'),
(50, 3, 'Urología'),
(51, 4, 'Análisis clínicos'),
(52, 4, 'Anatomía patológica'),
(53, 4, 'Bioquímica clínica'),
(54, 4, 'Farmacología clínica'),
(55, 4, 'Genética médica'),
(56, 4, 'Inmunología'),
(57, 4, 'Medicina nuclear'),
(58, 4, 'Microbiología y parasitología'),
(59, 4, 'Neurofisiología clínica'),
(60, 4, 'Radiodiagnóstico o radiología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE IF NOT EXISTS `tratamientos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `sistema` varchar(60) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tratamientos`
--

INSERT INTO `tratamientos` (`id`, `nombre`, `sistema`, `descripcion`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_institucion` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '0',
  `activo` int(1) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL,
  `creado_por` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `modificado_por` int(11) NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `perfil` (`id_perfil`),
  KEY `institucion` (`id_institucion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `username`, `password`, `id_perfil`, `id_institucion`, `estado`, `activo`, `last_login`, `creado_por`, `fecha_creacion`, `modificado_por`, `fecha_modificacion`) VALUES
(1, 'h.suazo', 'ab41949825606da179db7c89ddcedcc167b64847', 2, 1, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'm.fernandez', 'ab41949825606da179db7c89ddcedcc167b64847', 2, 1, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'a.sanchez', 'ab41949825606da179db7c89ddcedcc167b64847', 2, 2, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'c.perez', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', 2, 2, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'c.vidal', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 'd.miranda', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 2, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 'g.vidal', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', 3, 1, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'd.vidal', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', 3, 1, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 'd.alvares', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', 3, 2, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(10, 'd.castillo', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78', 3, 2, 0, 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE IF NOT EXISTS `vacunas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `zona` varchar(100) NOT NULL,
  `efectos` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores_permisos`
--

CREATE TABLE IF NOT EXISTS `valores_permisos` (
  `id_valor_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `valor_permiso` varchar(80) NOT NULL,
  PRIMARY KEY (`id_valor_permiso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `valores_permisos`
--

INSERT INTO `valores_permisos` (`id_valor_permiso`, `valor_permiso`) VALUES
(1, 'Sin Permiso'),
(2, 'Lectura'),
(3, 'Administracion/Edicion');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administrador_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`id_estadocivil`) REFERENCES `estados_civiles` (`id_estado_civil`),
  ADD CONSTRAINT `paciente_nivel_estudio` FOREIGN KEY (`id_nivel_estudio`) REFERENCES `niveles_estudios` (`id_nivel_estudio`),
  ADD CONSTRAINT `paciente_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `peciente_prevision_medica` FOREIGN KEY (`id_prevision_medica`) REFERENCES `previsiones_medicas` (`id_prevision_medica`);

--
-- Filtros para la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD CONSTRAINT `dato_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `profesionales_especialidades`
--
ALTER TABLE `profesionales_especialidades`
  ADD CONSTRAINT `especialidad` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`),
  ADD CONSTRAINT `profesional` FOREIGN KEY (`id_profesional`) REFERENCES `profesionales` (`id_profesional`),
  ADD CONSTRAINT `sub_especialidad` FOREIGN KEY (`id_sub_especialidad`) REFERENCES `sub_especialidades` (`id_sub_especialidad`);

--
-- Filtros para la tabla `sub_especialidades`
--
ALTER TABLE `sub_especialidades`
  ADD CONSTRAINT `sub_especialidad_especialidad` FOREIGN KEY (`id_especialidad`) REFERENCES `especialidades` (`id_especialidad`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario_institucion` FOREIGN KEY (`id_institucion`) REFERENCES `instituciones` (`id_institucion`),
  ADD CONSTRAINT `usuario_perfil` FOREIGN KEY (`id_perfil`) REFERENCES `perfiles` (`id_perfil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
