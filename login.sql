-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 08:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `ID` int(11) NOT NULL,
  `ComplainantID` int(11) NOT NULL,
  `Complainant` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Incident` varchar(30) NOT NULL,
  `Individual` varchar(30) NOT NULL,
  `WitnessName` varchar(50) NOT NULL,
  `WitnessContact` varchar(255) NOT NULL,
  `Other` varchar(150) NOT NULL,
  `Respondent` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Action` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`ID`, `ComplainantID`, `Complainant`, `Date`, `Time`, `Location`, `Incident`, `Individual`, `WitnessName`, `WitnessContact`, `Other`, `Respondent`, `Status`, `Action`) VALUES
(8, 233, 'Efren Reyes', '2023-11-18', '09:31:00', 'Barangay Malitam', 'Assault', 'Glen Castillo', 'Ethan Perez', '09545878880', 'None', 'Andrea Garcia', 'Ongoing', 'None'),
(9, 233, 'Efren Reyes', '2023-11-20', '10:37:00', 'Barangay Wawa', 'Blotter', 'Faith Lopez', 'Christian Buenafe', '09286514320', 'None', 'Clarence Blanco', 'Solved', 'None'),
(10, 233, 'Efren Reyes', '2023-12-26', '13:37:00', 'Barangay Sta. Clara', 'Burglary', 'Justine Aquino', 'Rey Bauan', '09877254578', 'None', 'Joan Cristobal', 'Ongoing', 'None'),
(11, 233, 'Efren Reyes', '2023-11-28', '14:17:00', 'Barangay Libjo', 'Family', 'Andrea Rivero', 'Charles Mendoza', '09226515457', 'None', 'Mike Apostol', 'Ongoing', 'None'),
(12, 233, 'Efren Reyes', '2023-12-04', '15:03:00', 'Barangay Poblacion', 'Debts', 'Lycel Domingo', 'Erika Villanueva', '09254363762', 'None', 'Angelica Oliveros', 'Ongoing', 'None'),
(13, 231, 'Vincent Dela Cruz', '2023-12-01', '07:48:00', 'Barangay Wawa', 'Trespassing', 'Dianne Blanco', 'Nicole Dalisay', '09256471454', 'None', 'Bianca Abalos', 'Solved', 'None'),
(14, 231, 'Vincent Dela Cruz', '2023-12-02', '09:26:00', 'Barangay Libjo', 'Blotter', 'Ac Jaen', 'Fiona Molina', '09227656189', 'None', 'Jorge Guerrero', 'Pending', 'None'),
(15, 231, 'Vincent Dela Cruz', '2023-12-03', '12:52:00', 'Barangay Malitam', 'Assault', 'Paula Manalo', 'Kathleen Ilao', '09876754371', 'None', 'Danilo Guzman', 'Pending', 'None'),
(16, 231, 'Vincent Dela Cruz', '2023-12-04', '14:00:00', 'Barangay Sta. Clara', 'Burglary', 'Jerome Palomo', 'Onise Comia', '09982763261', 'None', 'Shaira Baltazar', 'Pending', 'None'),
(17, 231, 'Vincent Dela Cruz', '2023-12-05', '16:07:00', 'Barangay Malitam', 'Family', 'Ian Panaligan', 'Keziah Arguelles', '09876533320', 'None', 'Brian Montero', 'Solved', 'None'),
(18, 237, 'Mylo Flores', '2023-05-10', '13:10:00', 'Barangay Wawa', 'Debts', 'Joshua Araneta', 'Lyn Mendiola', '09532456899', 'None', 'Lovely Ilagan', 'Pending', 'None'),
(19, 237, 'Mylo Flores', '2023-09-19', '07:21:00', 'Barangay Libjo', 'Blotter', 'Felix Sandoval', 'Desiree Aguinaldo', '09536788830', 'None', 'Joel Alfonso', 'Ongoing', 'None'),
(20, 237, 'Mylo Flores', '2023-10-25', '08:17:00', 'Barangay Sta. Clara', 'Assault', 'Gwen Alberto', 'Lance Dalisay', '09854311360', 'None', 'Kate Franco', 'Solved', 'None'),
(21, 237, 'Mylo Flores', '2022-11-10', '10:15:00', 'Barangay Malitam', 'Burglary', 'Timothy Macaraig', 'Louise Montes', '09567881112', 'None', 'Vince Canlas', 'Pending', 'None'),
(22, 237, 'Mylo Flores', '2023-02-20', '09:21:00', 'Barangay Poblacion', 'Trespassing', 'Hans Rodrigo', 'Catherine Arroyo', '09764435708', 'None', 'Jessa Blanco', 'Ongoing', 'None'),
(23, 237, 'Mylo Flores', '2023-05-03', '10:20:00', 'Barangay Wawa', 'Burglary', 'Jean Landicho', 'Raymond Samonte', '09888322780', 'None', 'Alona Delgado', 'Pending', 'None'),
(24, 239, 'Kane Bautista', '2023-01-10', '08:27:00', 'Barangay Sta. Clara', 'Family', 'Wendy Espina', 'Michelle Frias', '09755580120', 'None', 'Jayne Rosario', 'Ongoing', 'None'),
(25, 239, 'Kane Bautista', '2023-02-11', '11:27:00', 'Barangay Poblacion', 'Blotter', 'Irene Sebastian ', 'Franklyn Alejardro', '09095478991', 'None', 'Ella Ponce', 'Ongoing', 'None'),
(26, 239, 'Kane Bautista', '2023-03-20', '09:50:00', 'Barangay Sta. Clara', 'Burglary', 'Gabriel Bonifacio', 'Evan Salinas', '09232156890', 'None', 'Erin Marcelo', 'Solved', 'None'),
(27, 239, 'Kane Bautista', '2023-04-05', '10:30:00', 'Barangay Libjo', 'Assault', 'Seth Manansala', 'Anthony Borromeo', '09776528970', 'None', 'Andrew Manzano', 'Solved', 'None'),
(28, 239, 'Kane Bautista', '2023-05-27', '08:38:00', 'Barangay Libjo', 'Family', 'Loysa Cortes', 'Denise Pablo', '09221368047', 'None', 'Madel Bartolome', 'Solved', 'None'),
(30, 233, 'Efren Reyes', '2023-11-18', '09:31:00', 'Barangay Malitam', 'Assault ', 'Andrea Garcia', 'Ethan Perez', '9298313675', 'None', 'Mich Herrera', 'Ongoing', 'None'),
(31, 233, 'Efren Reyes', '2023-11-20', '10:37:00', 'Barangay Libjo', 'Blotter ', 'Efren Reyes', 'Christian Buenafe', '9287635931', 'None', 'Patricia Silva', 'Pending', 'None'),
(32, 233, 'Efren Reyes', '2023-12-26', '13:37:00', 'Barangay Wawa', 'Burglary ', 'Lylah Ramos', 'Rey Bauan', '9226357218', 'None', 'Joyce Marasigan', 'Solved', 'None'),
(33, 233, 'Efren Reyes', '2023-11-28', '14:17:00', 'Barangay Poblacion', 'Family ', 'Aliana Mendoza', 'Charles Mendoza', '9362672384', 'None', 'Jamaica Cordero', 'Solved', 'None'),
(34, 233, 'Efren Reyes', '2023-12-04', '15:03:00', 'Barangay Malitam', 'Debts ', 'Rey Santos', 'Erika Villanueva', '9212374682', 'None', 'Faith Vasquez', 'Pending', 'None'),
(35, 233, 'Efren Reyes', '2023-12-01', '07:48:00', 'Barangay Sta. Clara', 'Trespassing ', 'Mylo Flores', 'Nicole Dalisay', '9090265377', 'None', 'Angel Cunanan', 'Ongoing', 'None'),
(36, 233, 'Efren Reyes', '2023-12-02', '09:26:00', 'Barangay Sta. Clara', 'Blotter ', 'Celine Gonzales', 'Fiona Molina', '9008285721', 'None', 'Ashley Mendez', 'Solved', 'None'),
(37, 233, 'Efren Reyes', '2023-12-04', '12:52:00', 'Barangay Libjo', 'Assault ', 'Kane Bautista', 'Kathleen Ilao ?', '9116237368', 'None', 'Hannah Suarez', 'Ongoing', 'None'),
(38, 233, 'Efren Reyes', '2023-12-05', '14:00:00', 'Barangay Wawa', 'Burglary ', 'Shepard Villanueva', 'Onise Comia', '9032676232', 'None', 'Glen Pangilinan', 'Solved', 'None'),
(39, 233, 'Efren Reyes', '2023-10-25', '16:07:00', 'Barangay Wawa', 'Family ', 'Jinggoy Fernandez', 'Keziah Arguelles', '9236681903', 'None', 'Adrian Roxas', 'Ongoing', 'None'),
(40, 233, 'Efren Reyes', '2022-11-10', '13:10:00', 'Barangay Poblacion', 'Debts ', 'Ram Cruz', 'Lyn Mendiola', '9112573832', 'None', 'Lizeth Galang', 'Solved', 'None'),
(41, 233, 'Efren Reyes', '2023-02-20', '07:21:00', 'Barangay Sta. Clara', 'Blotter ', 'Richard De Guzman', 'Desiree Aguinaldo', '9213827367', 'None', 'Justine Panganiban', 'Pending', 'None'),
(42, 233, 'Efren Reyes', '2023-05-03', '08:17:00', 'Barangay Libjo', 'Assault ', 'Juvenal Lopez', 'Lance Dalisay', '9333718263', 'None', 'Rose Borja', 'Solved', 'None'),
(43, 233, 'Efren Reyes', '2023-01-10', '10:15:00', 'Barangay Malitam', 'Burglary ', 'Dominic Perez', 'Louise Montes', '9038751625', 'None', 'Jennelyn Fernando', 'Ongoing', 'None'),
(44, 233, 'Efren Reyes', '2023-02-11', '09:21:00', 'Barangay Malitam', 'Trespassing ', 'Eman Castillo', 'Catherine Arroyo', '9642827818', 'None', 'Airha Conception', 'Solved', 'None'),
(45, 233, 'Efren Reyes', '2023-03-20', '10:20:00', 'Barangay Malitam', 'Burglary ', 'Vincent Francisco', 'Raymond Samonte', '9026536172', 'None', 'Billy Bernardo', 'Ongoing', 'None'),
(46, 233, 'Efren Reyes', '2023-04-05', '08:27:00', 'Barangay Wawa', 'Family ', 'Ysa Rivera', 'Michelle Frias', '9776452176', 'None', 'Jenny Valenzuela', 'Ongoing', 'None'),
(47, 233, 'Efren Reyes', '2023-05-27', '11:27:00', 'Barangay Sta. Clara', 'Blotter ', 'Ferdie Aquino', 'Franklyn Alejardro', '9873826262', 'None', 'May Moreno', 'Pending', 'None'),
(48, 233, 'Efren Reyes', '2023-09-19', '09:50:00', 'Barangay Libjo', 'Burglary ', 'Ramon Castro', 'Evan Salinas', '9268451092', 'None', 'Marina Asuncion', 'Pending', 'None'),
(49, 233, 'Efren Reyes', '2023-11-18', '10:30:00', 'Barangay Libjo', 'Assault ', 'Marilyn Sanchez', 'Anthony Borromeo', '9238759268', 'None', 'Paolo Trinidad', 'Solved', 'None'),
(50, 233, 'Efren Reyes', '2023-11-20', '08:38:00', 'Barangay Sta. Clara', 'Family ', 'Liza Torres', 'Denise Pablo', '9653272987', 'None', 'Mark Sison', 'Ongoing', 'None'),
(51, 231, 'Vincent Dela Cruz', '2023-12-26', '09:31:00', 'Barangay Poblacion', 'Assault ', 'Ethan De Leon', 'Ethan Perez', '9653427878', 'None', 'Nikka Acosta', 'Solved', 'None'),
(52, 231, 'Vincent Dela Cruz', '2023-11-28', '10:37:00', 'Barangay Malitam', 'Blotter ', 'Luna Domingo', 'Christian Buenafe', '9763182352', 'None', 'Princess Estrada', 'Pending', 'None'),
(53, 231, 'Vincent Dela Cruz', '2023-12-04', '13:37:00', 'Barangay Wawa', 'Burglary ', 'Ryan Martinez', 'Rey Bauan', '9276745823', 'None', 'Vince Medina', 'Pending', 'None'),
(54, 231, 'Vincent Dela Cruz', '2023-12-01', '14:17:00', 'Barangay Malitam', 'Family ', 'Zamora Rodriquez', 'Charles Mendoza', '9283662756', 'None', 'Shiela Atienza', 'Solved', 'None'),
(55, 231, 'Vincent Dela Cruz', '2023-12-02', '15:03:00', 'Barangay Libjo', 'Debts ', 'Pascual Santiago', 'Erika Villanueva', '9263268253', 'None', 'Xandyr Arellano', 'Ongoing', 'None'),
(56, 231, 'Vincent Dela Cruz', '2023-12-04', '07:48:00', 'Barangay Poblacion', 'Trespassing ', 'Nicole Soriano', 'Nicole Dalisay', '9368789260', 'None', 'Laurence Chavez', 'Pending', 'None'),
(57, 231, 'Vincent Dela Cruz', '2023-12-05', '09:26:00', 'Barangay Malitam', 'Blotter ', 'Ralph Delos Santos', 'Fiona Molina', '9087237245', 'None', 'Cristian Serrano', 'Ongoing', 'None'),
(58, 231, 'Vincent Dela Cruz', '2023-10-25', '12:52:00', 'Barangay Sta. Clara', 'Assault ', 'Kaith Diaz', 'Kathleen Ilao ?', '9021521473', 'None', 'John Molina', 'Ongoing', 'None'),
(59, 231, 'Vincent Dela Cruz', '2022-11-10', '14:00:00', 'Barangay Sta. Clara', 'Burglary ', 'Erika Hernandez', 'Onise Comia', '9216889863', 'None', 'Cyrel Samson', 'Solved', 'None'),
(60, 231, 'Vincent Dela Cruz', '2023-02-20', '16:07:00', 'Barangay Sta. Clara', 'Family ', 'Rain Tolentino', 'Keziah Arguelles', '9267756838', 'None', 'Fatima Guevarra', 'Ongoing', 'None'),
(61, 231, 'Vincent Dela Cruz', '2023-05-03', '13:10:00', 'Barangay Malitam', 'Debts ', 'Olive Valdez', 'Lyn Mendiola', '9762387165', 'None', 'Carla Gonzaga', 'Solved', 'None'),
(62, 231, 'Vincent Dela Cruz', '2023-01-10', '07:21:00', 'Barangay Libjo', 'Blotter ', 'Jessica Ramirez', 'Desiree Aguinaldo', '9357747570', 'None', 'Bong Fajardo', 'Ongoing', 'None'),
(63, 231, 'Vincent Dela Cruz', '2023-02-11', '08:17:00', 'Barangay Libjo', 'Assault ', 'Bhea Morales', 'Lance Dalisay', '9126157357', 'None', 'Edgar Cabrera', 'Pending', 'None'),
(64, 231, 'Vincent Dela Cruz', '2023-03-20', '10:15:00', 'Barangay Poblacion', 'Burglary ', 'Olivia Mercado', 'Louise Montes', '9313514721', 'None', 'Don Vargas', 'Ongoing', 'None'),
(65, 231, 'Vincent Dela Cruz', '2023-04-05', '09:21:00', 'Barangay Malitam', 'Trespassing ', 'Emman Aguilar', 'Catherine Arroyo', '9276245781', 'None', 'Abegail Espiritu', 'Solved', 'None'),
(66, 231, 'Vincent Dela Cruz', '2023-05-27', '10:20:00', 'BarangayPoblacion', 'Burglary ', 'Amelia Navarro', 'Raymond Samonte', '9746324823', 'None', 'Aaron Angeles', 'Solved', 'None'),
(67, 231, 'Vincent Dela Cruz', '2023-09-19', '08:27:00', 'Barangay Libjo', 'Family ', 'Ava Manalo', 'Michelle Frias', '9227635720', 'None', 'Anne Padilla', 'Solved', 'None'),
(68, 231, 'Vincent Dela Cruz', '2023-11-18', '11:27:00', 'Barangay Malitam', 'Blotter ', 'Sophia Gomez', 'Franklyn Alejardro', '9838466121', 'None', 'Czarina Vergara', 'Solved', 'None'),
(69, 231, 'Vincent Dela Cruz', '2023-11-20', '09:50:00', 'Barangay Sta. Clara', 'Burglary ', 'Charlotte Dizon', 'Evan Salinas', '9173263728', 'None', 'Julia Ignacio', 'Solved', 'None'),
(70, 231, 'Vincent Dela Cruz', '2023-12-26', '10:30:00', 'Barangay Sta. Clara', 'Assault ', 'Liam Del Rosario', 'Anthony Borromeo', '9867462722', 'None', 'Bea Valencia', 'Pending', 'None'),
(71, 231, 'Vincent Dela Cruz', '2023-11-28', '08:38:00', 'Barangay Libjo', 'Family ', 'Noah Corpuz', 'Denise Pablo', '9274765418', 'None', 'Audie Alcantara', 'Solved', 'None'),
(72, 231, 'Vincent Dela Cruz', '2023-12-04', '09:31:00', 'Barangay Malitam', 'Assault ', 'Oliver Guitierrez', 'Ethan Perez', '9776121406', 'None', 'Kiko Ocampo', 'Ongoing', 'None'),
(73, 231, 'Vincent Dela Cruz', '2023-12-01', '10:37:00', 'Barangay Poblacion', 'Blotter ', 'Elijah Salvador', 'Christian Buenafe', '9878678287', 'None', 'Luke Enriquez', 'Ongoing', 'None'),
(74, 231, 'Vincent Dela Cruz', '2023-12-02', '13:37:00', 'Barangay Wawa', 'Burglary ', 'Lucas Velasco', 'Rey Bauan', '9904889376', 'None', 'Kris Pineda', 'Solved', 'None'),
(75, 231, 'Vincent Dela Cruz', '2023-12-04', '14:17:00', 'Barangay Wawa', 'Family ', 'Daniel Miranda', 'Charles Mendoza', '9298763252', 'None', 'Aldwin Evangelista', 'Pending', 'None'),
(76, 231, 'Vincent Dela Cruz', '2023-12-05', '15:03:00', 'Barangay Sta. Clara', 'Debts ', 'Aiden David', 'Erika Villanueva', '9776358418', 'None', 'Blythe Rivero', 'Ongoing', 'None'),
(77, 231, 'Vincent Dela Cruz', '2023-10-25', '07:48:00', 'Barangay Libjo', 'Trespassing ', 'Levi Salazar', 'Nicole Dalisay', '9736562709', 'None', 'Nathaniel Rosales', 'Ongoing', 'None'),
(78, 231, 'Vincent Dela Cruz', '2022-11-10', '09:26:00', 'Barangay Poblacion', 'Blotter ', 'Asher Ferrer', 'Fiona Molina', '9725374571', 'None', 'Legend Antonio', 'Ongoing', 'None'),
(79, 231, 'Vincent Dela Cruz', '2023-02-20', '12:52:00', 'Barangay Malitam', 'Assault ', 'William Alvarez', 'Kathleen Ilao ?', '9746586280', 'None', 'Xavier Cortez', 'Ongoing', 'None'),
(80, 231, 'Vincent Dela Cruz', '2023-05-03', '14:00:00', 'Barangay Malitam', 'Burglary ', 'Alexander Sarmiento', 'Onise Comia', '9734738772', 'None', 'Jacob Marquez', 'Solved', 'None'),
(81, 231, 'Vincent Dela Cruz', '2023-01-10', '16:07:00', 'Barangay Malitam', 'Family ', 'Kim Pascual', 'Keziah Arguelles', '9848325727', 'None', 'Kim Pascual', 'Ongoing', 'None'),
(82, 231, 'Vincent Dela Cruz', '2023-02-11', '13:10:00', 'Barangay Sta. Clara', 'Debts ', 'Jacob Marquez', 'Lyn Mendiola', '9747371598', 'None', 'Alexander Sarmiento', 'Solved', 'None'),
(83, 231, 'Vincent Dela Cruz', '2023-03-20', '07:21:00', 'Barangay Libjo', 'Blotter ', 'Xavier Cortez', 'Desiree Aguinaldo', '9721426539', 'None', 'William Alvarez', 'Solved', 'None'),
(84, 231, 'Vincent Dela Cruz', '2023-04-05', '08:17:00', 'Barangay Wawa', 'Assault ', 'Legend Antonio', 'Lance Dalisay', '9221737645', 'None', 'Asher Ferrer', 'Solved', 'None'),
(85, 231, 'Vincent Dela Cruz', '2023-05-27', '10:15:00', 'Barangay Wawa', 'Burglary ', 'Nathaniel Rosales', 'Louise Montes', '9127367722', 'None', 'Levi Salazar', 'Solved', 'None'),
(86, 231, 'Vincent Dela Cruz', '2023-09-19', '09:21:00', 'Barangay Sta. Clara', 'Trespassing ', 'Blythe Rivero', 'Catherine Arroyo', '9838477376', 'None', 'Aiden David', 'Ongoing', 'None'),
(87, 231, 'Vincent Dela Cruz', '2023-11-18', '10:20:00', 'Barangay Sta. Clara', 'Burglary ', 'Samantha Manuel', 'Raymond Samonte', '9488627676', 'None', 'Daniel Miranda', 'Pending', 'None'),
(88, 231, 'Vincent Dela Cruz', '2023-11-20', '08:27:00', 'Barangay Sta. Clara', 'Family ', 'Aldwin Evangelista', 'Michelle Frias', '9020854652', 'None', 'Lucas Velasco', 'Ongoing', 'None'),
(89, 231, 'Vincent Dela Cruz', '2023-12-26', '11:27:00', 'Barangay Malitam', 'Blotter ', 'Kris Pineda', 'Franklyn Alejardro', '9736382460', 'None', 'Elijah Salvador', 'Solved', 'None'),
(90, 231, 'Vincent Dela Cruz', '2023-11-28', '09:50:00', 'Barangay Wawa', 'Burglary ', 'Luke Enriquez', 'Evan Salinas', '9743526712', 'None', 'Oliver Guitierrez', 'Ongoing', 'None'),
(91, 231, 'Vincent Dela Cruz', '2023-12-04', '10:30:00', 'Barangay Poblacion', 'Assault ', 'Kiko Ocampo', 'Anthony Borromeo', '9839849169', 'None', 'Noah Corpuz', 'Solved', 'None'),
(92, 237, 'Mylo Flores', '2023-12-01', '08:38:00', 'Barangay Sta. Clara', 'Family ', 'Audie Alcantara', 'Denise Pablo', '9847630108', 'None', 'Liam Del Rosario', 'Ongoing', 'None'),
(93, 237, 'Mylo Flores', '2023-12-02', '09:31:00', 'Barangay Poblacion', 'Assault ', 'Bea Valencia', 'Ethan Perez', '9083172436', 'None', 'Charlotte Dizon', 'Solved', 'None'),
(94, 237, 'Mylo Flores', '2023-12-04', '10:37:00', 'Barangay Wawa', 'Blotter ', 'Julia Ignacio', 'Christian Buenafe', '9346177453', 'None', 'Charlotte Dizon', 'Pending', 'None'),
(95, 237, 'Mylo Flores', '2023-12-05', '13:37:00', 'Barangay Libjo', 'Burglary ', 'Czarina Vergara', 'Rey Bauan', '9346731463', 'None', 'Ava Manalo', 'Pending', 'None'),
(96, 237, 'Mylo Flores', '2023-10-25', '14:17:00', 'Barangay Libjo', 'Family ', 'Anne Padilla', 'Charles Mendoza', '9713645738', 'None', 'Amelia Navarro', 'Ongoing', 'None'),
(97, 237, 'Mylo Flores', '2022-11-10', '15:03:00', 'Barangay Malitam', 'Debts ', 'Aaron Angeles', 'Erika Villanueva', '9805485633', 'None', 'Emman Aguilar', 'Solved', 'None'),
(98, 237, 'Mylo Flores', '2023-02-20', '07:48:00', 'Barangay Sta. Clara', 'Trespassing ', 'Abegail Espiritu', 'Nicole Dalisay', '9437643618', 'None', 'Olivia Mercado', 'Ongoing', 'None'),
(99, 237, 'Mylo Flores', '2023-05-03', '09:26:00', 'Barangay Poblacion', 'Blotter ', 'Don Vargas', 'Fiona Molina', '9843874676', 'None', 'Bhea Morales', 'Solved', 'None'),
(100, 237, 'Mylo Flores', '2023-01-10', '12:52:00', 'Barangay Poblacion', 'Assault ', 'Edgar Cabrera', 'Kathleen Ilao ?', '9094983164', 'None', 'Jessica Ramirez', 'Pending', 'None'),
(101, 237, 'Mylo Flores', '2023-02-11', '14:00:00', 'Barangay Poblacion', 'Burglary ', 'Bong Fajardo', 'Onise Comia', '9463685483', 'None', 'Olive Valdez', 'Pending', 'None'),
(102, 237, 'Mylo Flores', '2023-03-20', '16:07:00', 'Barangay Libjo', 'Family ', 'Carla Gonzaga', 'Keziah Arguelles', '9347731873', 'None', 'Rain Tolentino', 'Pending', 'None'),
(103, 237, 'Mylo Flores', '2023-04-05', '13:10:00', 'Barangay Wawa', 'Debts ', 'Fatima Guevarra', 'Lyn Mendiola', '9094837463', 'None', 'Erika Hernandez', 'Pending', 'None'),
(104, 237, 'Mylo Flores', '2023-05-27', '07:21:00', 'Barangay Wawa', 'Blotter ', 'Cyrel Samson', 'Desiree Aguinaldo', '9221635437', 'None', 'Kaith Diaz', 'Ongoing', 'None'),
(105, 237, 'Mylo Flores', '2023-09-19', '08:17:00', 'Barangay Sta. Clara', 'Assault ', 'John Molina', 'Lance Dalisay', '9343764635', 'None', 'Ralph Delos Santos', 'Solved', 'None'),
(106, 237, 'Mylo Flores', '2023-11-18', '10:15:00', 'Barangay Sta. Clara', 'Burglary ', 'Cristian Serrano', 'Louise Montes', '9013754638', 'None', 'Nicole Soriano', 'Pending', 'None'),
(107, 237, 'Mylo Flores', '2023-11-20', '09:21:00', 'Barangay Poblacion', 'Trespassing ', 'Laurence Chavez', 'Catherine Arroyo', '9346364168', 'None', 'Pascual Santiago', 'Solved', 'None'),
(108, 237, 'Mylo Flores', '2023-12-26', '10:20:00', 'Barangay Malitam', 'Burglary ', 'Zeus Briones', 'Raymond Samonte', '9218536231', 'None', 'Zamora Rodriquez', 'Pending', 'None'),
(109, 237, 'Mylo Flores', '2023-11-28', '08:27:00', 'Barangay Malitam', 'Family ', 'Vince Medina', 'Michelle Frias', '9212616342', 'None', 'Ryan Martinez', 'Pending', 'None'),
(110, 237, 'Mylo Flores', '2023-12-04', '11:27:00', 'Barangay Poblacion', 'Blotter ', 'Xandyr Arellano', 'Franklyn Alejardro', '9832368725', 'None', 'Luna Domingo', 'Ongoing', 'None'),
(111, 237, 'Mylo Flores', '2023-12-01', '09:50:00', 'Barangay Libjo', 'Burglary ', 'Shiela Atienza', 'Evan Salinas', '9283327372', 'None', 'Ethan De Leon', 'Ongoing', 'None'),
(112, 237, 'Mylo Flores', '2023-12-02', '10:30:00', 'Barangay Sta. Clara', 'Assault ', 'Princess Estrada', 'Anthony Borromeo', '9803276366', 'None', 'None', 'Pending', 'None'),
(113, 237, 'Mylo Flores', '2023-12-04', '08:38:00', 'Barangay Libjo', 'Family ', 'Nikka Acosta', 'Denise Pablo', '9737265723', 'None', 'None', 'Pending', 'None'),
(114, 237, 'Mylo Flores', '2023-12-05', '09:31:00', 'Barangay Wawa', 'Assault ', 'Mark Sison', 'Ethan Perez', '9091372635', 'None', 'None', 'Pending', 'None'),
(115, 237, 'Mylo Flores', '2023-10-25', '10:37:00', 'Barangay Wawa', 'Blotter ', 'Paolo Trinidad', 'Christian Buenafe', '9903765723', 'None', 'None', 'Pending', 'None'),
(116, 237, 'Mylo Flores', '2022-11-10', '13:37:00', 'Barangay Poblacion', 'Burglary ', 'Marina Asuncion', 'Rey Bauan', '9013827378', 'None', 'None', 'Pending', 'None'),
(117, 237, 'Mylo Flores', '2023-02-20', '14:17:00', 'Barangay Sta. Clara', 'Family ', 'May Moreno', 'Charles Mendoza', '9212878325', 'None', 'None', 'Pending', 'None'),
(118, 237, 'Mylo Flores', '2023-05-03', '15:03:00', 'Barangay Malitam', 'Debts ', 'Jenny Valenzuela', 'Erika Villanueva', '9217362653', 'None', 'None', 'Pending', 'None'),
(119, 237, 'Mylo Flores', '2023-01-10', '07:48:00', 'Barangay Poblacion', 'Trespassing ', 'Billy Bernardo', 'Nicole Dalisay', '9236267353', 'None', 'None', 'Pending', 'None'),
(120, 237, 'Mylo Flores', '2023-02-11', '09:26:00', 'Barangay Libjo', 'Blotter ', 'Airha Conception', 'Fiona Molina', '9374345328', 'None', 'None', 'Pending', 'None'),
(121, 237, 'Mylo Flores', '2023-03-20', '12:52:00', 'Barangay Sta. Clara', 'Assault ', 'Jennelyn Fernando', 'Kathleen Ilao ?', '9038463746', 'None', 'None', 'Pending', 'None'),
(122, 237, 'Mylo Flores', '2023-04-05', '14:00:00', 'Barangay Wawa', 'Burglary ', 'Rose Borja', 'Onise Comia', '9274376472', 'None', 'None', 'Pending', 'None'),
(123, 237, 'Mylo Flores', '2023-05-27', '16:07:00', 'Barangay Wawa', 'Family ', 'Justine Panganiban', 'Keziah Arguelles', '9098398473', 'None', 'None', 'Pending', 'None'),
(124, 237, 'Mylo Flores', '2023-09-19', '13:10:00', 'Barangay Sta. Clara', 'Debts ', 'Lizeth Galang', 'Lyn Mendiola', '9343647827', 'None', 'None', 'Pending', 'None'),
(125, 237, 'Mylo Flores', '2023-11-18', '07:21:00', 'Barangay Poblacion', 'Blotter ', 'Adrian Roxas', 'Desiree Aguinaldo', '9098434578', 'None', 'None', 'Pending', 'None'),
(126, 237, 'Mylo Flores', '2023-11-20', '08:17:00', 'Barangay Libjo', 'Assault ', 'Glen Pangilinan', 'Lance Dalisay', '9098483647', 'None', 'None', 'Pending', 'None'),
(127, 237, 'Mylo Flores', '2023-12-26', '10:15:00', 'Barangay Sta. Clara', 'Burglary ', 'Hannah Suarez', 'Louise Montes', '9848762582', 'None', 'None', 'Pending', 'None'),
(128, 237, 'Mylo Flores', '2023-11-28', '09:21:00', 'Barangay Wawa', 'Trespassing ', 'Ashley Mendez', 'Catherine Arroyo', '9048347635', 'None', 'None', 'Pending', 'None'),
(129, 237, 'Mylo Flores', '2023-12-04', '10:20:00', 'Barangay Sta. Clara', 'Burglary ', 'Angel Cunanan', 'Raymond Samonte', '9304876617', 'None', 'None', 'Pending', 'None'),
(130, 237, 'Mylo Flores', '2023-12-01', '08:27:00', 'Barangay Libjo', 'Family ', 'Faith Vasquez', 'Michelle Frias', '9908346733', 'None', 'None', 'Pending', 'None'),
(131, 237, 'Mylo Flores', '2023-12-02', '11:27:00', 'Barangay Poblacion', 'Blotter ', 'Jamaica Cordero', 'Franklyn Alejardro', '9083473645', 'None', 'None', 'Pending', 'None'),
(132, 237, 'Mylo Flores', '2023-12-04', '09:50:00', 'Barangay Malitam', 'Burglary ', 'Joyce Marasigan', 'Evan Salinas', '9484565314', 'None', 'None', 'Pending', 'None'),
(133, 237, 'Mylo Flores', '2023-12-05', '10:30:00', 'Barangay Malitam', 'Assault ', 'Patricia Silva', 'Anthony Borromeo', '9048936745', 'None', 'None', 'Pending', 'None'),
(134, 237, 'Mylo Flores', '2023-10-25', '08:38:00', 'Barangay Poblacion', 'Family ', 'Mich Herrera', 'Denise Pablo', '9038943543', 'None', 'None', 'Pending', 'None'),
(135, 237, 'Mylo Flores', '2022-11-10', '09:31:00', 'Barangay Wawa', 'Assault ', 'Madel Bartolome', 'Ethan Perez', '9375674524', 'None', 'None', 'Pending', 'None'),
(136, 237, 'Mylo Flores', '2023-02-20', '10:37:00', 'Barangay Sta. Clara', 'Blotter ', 'Andrew Manzano', 'Christian Buenafe', '9949803947', 'None', 'None', 'Pending', 'None'),
(137, 237, 'Mylo Flores', '2023-05-03', '13:37:00', 'Barangay Sta. Clara', 'Burglary ', 'Erin Marcelo', 'Rey Bauan', '9084376465', 'None', 'None', 'Pending', 'None'),
(138, 237, 'Mylo Flores', '2023-01-10', '14:17:00', 'Barangay Libjo', 'Family ', 'Ella Ponce', 'Charles Mendoza', '9093843746', 'None', 'None', 'Pending', 'None'),
(139, 237, 'Mylo Flores', '2023-02-11', '15:03:00', 'Barangay Poblacion', 'Debts ', 'Jayne Rosario', 'Erika Villanueva', '9546527345', 'None', 'None', 'Pending', 'None'),
(140, 237, 'Mylo Flores', '2023-03-20', '07:48:00', 'Barangay Wawa', 'Trespassing ', 'Alona Delgado', 'Nicole Dalisay', '9384738466', 'None', 'None', 'Pending', 'None'),
(141, 237, 'Mylo Flores', '2023-04-05', '09:26:00', 'Barangay Sta. Clara', 'Blotter ', 'Vince Canlas', 'Fiona Molina', '9904776434', 'None', 'None', 'Pending', 'None'),
(142, 237, 'Mylo Flores', '2023-05-27', '12:52:00', 'Barangay Malitam', 'Assault ', 'Lovely Ilagan', 'Kathleen Ilao ?', '9034836253', 'None', 'None', 'Pending', 'None'),
(143, 237, 'Mylo Flores', '2023-09-19', '14:00:00', 'Barangay Libjo', 'Burglary ', 'Shaira Baltazar', 'Onise Comia', '9384635823', 'None', 'None', 'Pending', 'None'),
(144, 237, 'Mylo Flores', '2023-11-18', '16:07:00', 'Barangay Poblacion', 'Family ', 'Danilo Guzman', 'Keziah Arguelles', '9473746372', 'None', 'None', 'Pending', 'None'),
(145, 237, 'Mylo Flores', '2023-11-20', '13:10:00', 'Barangay Sta. Clara', 'Debts ', 'Jorge Guerrero', 'Lyn Mendiola', '9473242746', 'None', 'None', 'Pending', 'None'),
(146, 237, 'Mylo Flores', '2023-12-26', '07:21:00', 'Barangay Sta. Clara', 'Blotter ', 'Jessa Blanco', 'Desiree Aguinaldo', '9084622763', 'None', 'None', 'Pending', 'None'),
(147, 237, 'Mylo Flores', '2023-11-28', '08:17:00', 'Barangay Malitam', 'Assault ', 'Kate Franco', 'Lance Dalisay', '9384463427', 'None', 'None', 'Pending', 'None'),
(148, 237, 'Mylo Flores', '2023-12-04', '10:15:00', 'Barangay Wawa', 'Burglary ', 'Francis Malinao', 'Louise Montes', '9328432473', 'None', 'None', 'Pending', 'None'),
(149, 237, 'Mylo Flores', '2023-12-01', '09:21:00', 'Barangay Poblacion', 'Trespassing ', 'Grace Constantino', 'Catherine Arroyo', '9346246837', 'None', 'None', 'Pending', 'None'),
(150, 237, 'Mylo Flores', '2023-12-02', '10:20:00', 'Barangay Libjo', 'Burglary ', 'Elle Umali', 'Raymond Samonte', '9437463245', 'None', 'None', 'Pending', 'None'),
(151, 237, 'Mylo Flores', '2023-12-04', '08:27:00', 'Barangay Malitam', 'Family ', 'Joel Alfonso', 'Michelle Frias', '9806467346', 'None', 'None', 'Pending', 'None'),
(152, 237, 'Mylo Flores', '2023-12-05', '11:27:00', 'Barangay Malitam', 'Blotter ', 'Brian Montero', 'Franklyn Alejardro', '9651634898', 'None', 'None', 'Pending', 'None'),
(153, 237, 'Mylo Flores', '2023-10-25', '09:50:00', 'Barangay Poblacion', 'Burglary ', 'Bianca Abalos', 'Evan Salinas', '9094358348', 'None', 'None', 'Pending', 'None'),
(154, 237, 'Mylo Flores', '2022-11-10', '10:30:00', 'Barangay Sta. Clara', 'Assault ', 'Angelica Oliveros', 'Anthony Borromeo', '9068583763', 'None', 'None', 'Pending', 'None'),
(155, 237, 'Mylo Flores', '2023-02-20', '08:38:00', 'Barangay Libjo', 'Family ', 'Mike Apostol', 'Denise Pablo', '9043547362', 'None', 'None', 'Pending', 'None'),
(156, 237, 'Mylo Flores', '2023-05-03', '09:31:00', 'Barangay Libjo', 'Assault ', 'Joan Cristobal', 'Ethan Perez', '9346638752', 'None', 'None', 'Pending', 'None'),
(157, 237, 'Mylo Flores', '2023-01-10', '10:37:00', 'Barangay Sta. Clara', 'Blotter ', 'Clarence Blanco', 'Christian Buenafe', '9483657828', 'None', 'None', 'Pending', 'None'),
(158, 237, 'Mylo Flores', '2023-02-11', '13:37:00', 'Barangay Malitam', 'Burglary ', 'Denise Pablo', 'Rey Bauan', '9025847462', 'None', 'None', 'Pending', 'None'),
(159, 237, 'Mylo Flores', '2023-03-20', '14:17:00', 'Barangay Poblacion', 'Family ', 'Loysa Cortes', 'Charles Mendoza', '9045843758', 'None', 'None', 'Pending', 'None'),
(160, 237, 'Mylo Flores', '2023-04-05', '15:03:00', 'Barangay Poblacion', 'Debts ', 'Anthony Borromeo', 'Erika Villanueva', '9889785234', 'None', 'None', 'Pending', 'None'),
(161, 237, 'Mylo Flores', '2023-05-27', '07:48:00', 'Barangay Sta. Clara', 'Trespassing ', 'Seth Manansala', 'Nicole Dalisay', '9805984862', 'None', 'None', 'Pending', 'None'),
(162, 239, 'Kane Bautista', '2023-09-19', '09:26:00', 'Barangay Malitam', 'Blotter ', 'Evan Salinas', 'Fiona Molina', '9038238964', 'None', 'None', 'Pending', 'None'),
(163, 239, 'Kane Bautista', '2023-11-18', '12:52:00', 'Barangay Libjo', 'Assault ', 'Gabriel Bonifacio', 'Kathleen Ilao ?', '9304836471', 'None', 'None', 'Pending', 'None'),
(164, 239, 'Kane Bautista', '2023-11-20', '14:00:00', 'Barangay Malitam', 'Burglary ', 'Franklyn Alejardro', 'Onise Comia', '9034838473', 'None', 'None', 'Pending', 'None'),
(165, 239, 'Kane Bautista', '2023-12-26', '16:07:00', 'Barangay Libjo', 'Family ', 'Irene Sebastian ', 'Keziah Arguelles', '9221267147', 'None', 'None', 'Pending', 'None'),
(166, 239, 'Kane Bautista', '2023-11-28', '13:10:00', 'Barangay Poblacion', 'Debts ', 'Michelle Frias', 'Lyn Mendiola', '9743864123', 'None', 'None', 'Pending', 'None'),
(167, 239, 'Kane Bautista', '2023-12-04', '07:21:00', 'Barangay Sta. Clara', 'Blotter ', 'Wendy Espina', 'Desiree Aguinaldo', '9304832847', 'None', 'None', 'Pending', 'None'),
(168, 239, 'Kane Bautista', '2023-12-01', '08:17:00', 'Barangay Sta. Clara', 'Assault ', 'Ruth Mangubat', 'Lance Dalisay', '9094083747', 'None', 'None', 'Pending', 'None'),
(169, 239, 'Kane Bautista', '2023-12-02', '10:15:00', 'Barangay Wawa', 'Burglary ', 'Raymond Samonte', 'Louise Montes', '9093423671', 'None', 'None', 'Pending', 'None'),
(170, 239, 'Kane Bautista', '2023-12-04', '09:21:00', 'Barangay Malitam', 'Trespassing ', 'Faye Medrano', 'Catherine Arroyo', '9038437364', 'None', 'None', 'Pending', 'None'),
(171, 239, 'Kane Bautista', '2023-12-05', '10:20:00', 'Barangay Wawa', 'Burglary ', 'Jean Landicho', 'Raymond Samonte', '9303634523', 'None', 'None', 'Pending', 'None'),
(172, 239, 'Kane Bautista', '2023-10-25', '08:27:00', 'Barangay Sta. Clara', 'Family ', 'Catherine Arroyo', 'Michelle Frias', '9408374366', 'None', 'None', 'Pending', 'None'),
(173, 239, 'Kane Bautista', '2022-11-10', '11:27:00', 'Barangay Libjo', 'Blotter ', 'Hans Rodrigo', 'Franklyn Alejardro', '9347364736', 'None', 'None', 'Pending', 'None'),
(174, 239, 'Kane Bautista', '2023-02-20', '09:50:00', 'Barangay Libjo', 'Burglary ', 'Louise Montes', 'Evan Salinas', '9809448976', 'None', 'None', 'Pending', 'None'),
(175, 239, 'Kane Bautista', '2023-05-03', '10:30:00', 'Barangay Poblacion', 'Assault ', 'Allysa Gaspar', 'Anthony Borromeo', '9008286463', 'None', 'None', 'Pending', 'None'),
(176, 239, 'Kane Bautista', '2023-01-10', '08:38:00', 'Barangay Poblacion', 'Family ', 'Timothy Macaraig', 'Denise Pablo', '9747274753', 'None', 'None', 'Pending', 'None'),
(177, 239, 'Kane Bautista', '2023-02-11', '09:31:00', 'Barangay Malitam', 'Assault ', 'Joven Andal', 'Lyn Mendiola', '9723584574', 'None', 'None', 'Pending', 'None'),
(178, 239, 'Kane Bautista', '2023-03-20', '10:37:00', 'Barangay Sta. Clara', 'Blotter ', 'Lance Dalisay', 'Desiree Aguinaldo', '9092557644', 'None', 'None', 'Pending', 'None'),
(179, 239, 'Kane Bautista', '2023-04-05', '13:37:00', 'Barangay Wawa', 'Burglary ', 'Cally Aguila', 'Lance Dalisay', '9002141713', 'None', 'None', 'Pending', 'None'),
(180, 239, 'Kane Bautista', '2023-05-27', '14:17:00', 'Barangay Wawa', 'Family ', 'Cherry Billones', 'Louise Montes', '9093847373', 'None', 'None', 'Pending', 'None'),
(181, 239, 'Kane Bautista', '2023-09-19', '15:03:00', 'Barangay Poblacion', 'Debts ', 'Tricia Dimaano', 'Catherine Arroyo', '9073463351', 'None', 'None', 'Pending', 'None'),
(182, 239, 'Kane Bautista', '2023-11-18', '07:48:00', 'Barangay Libjo', 'Trespassing ', 'Gwen Alberto', 'Raymond Samonte', '9384364353', 'None', 'None', 'Pending', 'None'),
(183, 239, 'Kane Bautista', '2023-11-20', '09:26:00', 'Barangay Malitam', 'Blotter ', 'Desiree Aguinaldo', 'Michelle Frias', '9344764675', 'None', 'None', 'Pending', 'None'),
(184, 239, 'Kane Bautista', '2023-12-26', '12:52:00', 'Barangay Sta. Clara', 'Assault ', 'Felix Sandoval', 'Franklyn Alejardro', '9374765633', 'None', 'None', 'Pending', 'None'),
(185, 239, 'Kane Bautista', '2023-11-28', '14:00:00', 'Barangay Wawa', 'Burglary ', 'Harvey Magsino', 'Evan Salinas', '9863753781', 'None', 'Francis Malinao', 'Solved', 'None'),
(186, 239, 'Kane Bautista', '2023-12-04', '16:07:00', 'Barangay Wawa', 'Family ', 'Lyn Mendiola', 'Anthony Borromeo', '9347364533', 'None', 'Grace Constantino', 'Solved', 'None'),
(187, 239, 'Kane Bautista', '2023-12-01', '13:10:00', 'Barangay Sta. Clara', 'Debts ', 'Joshua Araneta', 'Denise Pablo', '9384039753', 'None', 'None', 'Pending', 'None'),
(188, 239, 'Kane Bautista', '2023-12-02', '07:21:00', 'Barangay Malitam', 'Blotter ', 'Thea Magnaye', 'Denise Pablo', '9468826463', 'None', 'Elle Umali', 'Ongoing', 'None'),
(201, 231, 'Vincent Dela Cruz', '2023-12-02', '07:33:00', 'Barangay Libjo', 'Assault', 'Jonathan', 'Malvin', '9751238876', 'none', 'None', 'Pending', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `action_made` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Type` varchar(10) NOT NULL,
  `WorkerID` int(11) NOT NULL,
  `WorkerName` varchar(60) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Address`, `Gender`, `ContactNumber`, `Username`, `Password`, `Type`, `WorkerID`, `WorkerName`, `Date`) VALUES
(230, 'Paula Kristha Marquez', 'Barangay Sta. Clara', 'Female', '9750241197', 'paula', 'Paula.31', 'Worker', 230, 'Paula Kristha Marquez', '2023-12-07 11:31:00'),
(231, 'Vincent Dela Cruz', 'Barangay Wawa', 'Male', '9217369365', 'vincent', 'vincent.011', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 13:30:00'),
(232, 'Andrea Garcia', 'Barangay Malitam', 'Female', '9298313675', 'andrea', 'Andrea.052', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 13:48:00'),
(233, 'Efren Reyes', 'Barangay Libjo', 'Female', '9287635931', 'efren', 'Cason.704', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 13:54:00'),
(234, 'Lylah Ramos', 'Barangay Wawa', 'Female', '9226357218', 'lylah', 'Lylah.006', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:01:00'),
(235, 'Aliana Mendoza', 'Barangay Poblacion', 'Female', '9362672384', 'aliana', 'Aliana.154', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:02:00'),
(236, 'Rey Santos', 'Barangay Malitam', 'Male', '9212374682', 'rey', 'Rey.910', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:05:00'),
(237, 'Mylo Flores', 'Barangay Sta. Clara', 'Male', '9090265377', 'mylo', 'Mylo.568', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:05:00'),
(238, 'Celine Gonzales', 'Barangay Sta. Clara', 'Female', '9008285721', 'celine', 'Celine.103', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:05:00'),
(239, 'Kane Bautista', 'Barangay Libjo', 'Female', '9116237368', 'kane', 'Kane.518', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:06:00'),
(240, 'Shepard Villanueva', 'Barangay Wawa', 'Male', '9032676232', 'Shepard', 'Shepard.028', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:07:00'),
(241, 'Jinggoy Fernandez', 'Barangay Wawa', 'Male', '9236681903', 'jinggoy', 'Jinggoy.992', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:08:00'),
(242, 'Ram Cruz', 'Barangay Poblacion', 'Male', '9112573832', 'ram', 'Ram.115', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:09:00'),
(243, 'Richard De Guzman', 'Barangay Sta. Clara', 'Male', '9213827367', 'richard', 'Richard.672', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:10:00'),
(244, 'Juvenal Lopez', 'Barangay Libjo', 'Male', '9333718263', 'juvenal', 'Juvenal.903', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:10:00'),
(245, 'Dominic Perez', 'Barangay Malitam', 'Male', '9038751625', 'dominic', 'Dominic.003', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:11:00'),
(246, 'Eman Castillo', 'Barangay Malitam', 'Male', '9642827818', 'eman', 'Eman.803', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:12:00'),
(247, 'Vincent Francisco', 'Barangay Malitam', 'Male', '9026536172', 'vincent', 'Vincent.402', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:13:00'),
(248, 'Ysa Rivera', 'Barangay Wawa', 'Female', '9776452176', 'ysa', 'Ysa.198', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:14:00'),
(249, 'Ferdie Aquino', 'Barangay Sta. Clara', 'Male', '9873826262', 'ferdie', 'Ferdie.500', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:14:00'),
(250, 'Ramon Castro', 'Barangay Libjo', 'Male', '9268451092', 'ramon', 'Ramon.823', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:15:00'),
(251, 'Marilyn Sanchez', 'Barangay Libjo', 'Female', '9238759268', 'marilyn', 'Marilyn.126', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:16:00'),
(252, 'Liza Torres', 'Liza Torres', 'Female', '9653272987', 'liza', 'Liza.120', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:16:00'),
(253, 'Ethan De Leon', 'Barangay Poblacion', 'Male', '9653427878', 'ethan', 'Ethan.111', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:17:00'),
(254, 'Luna Domingo', 'Barangay Malitam', 'Female', '9763182352', 'luna', 'Luna.033', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:17:00'),
(255, 'Ryan Martinez', 'Barangay Wawa', 'Male', '9276745823', 'ryan', 'Ryan.387', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:18:00'),
(256, 'Zamora Rodriquez', 'Barangay Malitam', 'Male', '9283662756', 'zamora', 'Zamora.023', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:18:00'),
(257, 'Pascual Santiago', 'Barangay Libjo', 'm', '9263268253', 'pascual', 'Pascual.814', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:20:00'),
(258, 'Nicole Soriano', 'Barangay Poblacion', 'Female', '9368789260', 'nicole', 'Nicole.021', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:20:00'),
(259, 'Ralph Delos Santos', 'Barangay Malitam', 'Male', '9087237245', 'ralph', 'Ralph.592', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:21:00'),
(260, 'Kaith Diaz', 'Barangay Sta. Clara', 'Female', '9021521473', 'kaith', 'Kaith.592', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:21:00'),
(261, 'Erika Hernandez', 'Barangay Sta. Clara', 'Female', '9216889863', 'erika', 'Erika.991', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:22:00'),
(262, 'Rain Tolentino', 'Barangay Sta. Clara', 'Male', '9267756838', 'rain', 'Rain.195', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:22:00'),
(263, 'Olive Valdez', 'Barangay Malitam', 'Female', '9762387165', 'olive', 'Olive.889', 'Worker', 8, 'Paula Kristha Marquez', '2023-12-06 14:23:00'),
(264, 'Jessica Ramirez', 'Barangay Libjo', 'Female', '9357747570', 'Jessica', 'Jessica.723', 'Officer', 8, 'Paula Kristha Marquez', '2023-12-06 14:23:00'),
(265, 'Bhea Morales', 'Barangay Libjo', 'Female', '9126157357', 'bhea', 'Bhea.100', 'Resident', 8, 'Paula Kristha Marquez', '2023-12-06 14:24:00'),
(266, 'Olivia Mercado', 'Barangay Poblacion', 'Female', '9313514721', 'olivia', 'Olivia.247', 'Worker', 234, 'Lylah Ramos', '2023-12-06 14:29:00'),
(267, 'Emman Aguilar', 'Barangay Malitam', 'Male', '9276245781', 'emman', 'Emman.713', 'Resident', 234, 'Lylah Ramos', '2023-12-06 14:30:00'),
(268, 'Amelia Navarro', 'BarangayPoblacion', 'Female', '9746324823', 'amelia', 'Amelia.996', 'Resident', 234, 'Lylah Ramos', '2023-12-06 14:31:00'),
(269, 'Ava Manalo', 'Barangay Libjo', 'Female', '9227635720', 'ava', 'Ava.023', 'Officer', 234, 'Lylah Ramos', '2023-12-06 14:31:00'),
(270, 'Sophia Gomez', 'Barangay Malitam', 'Female', '9838466121', 'sophia', 'Sophia.176', 'Officer', 234, 'Lylah Ramos', '2023-12-06 14:32:00'),
(271, 'Charlotte Dizon', 'Barangay Sta. Clara', 'Female', '9173263728', '9173263728	charlotte', 'Charlotte.602', 'Worker', 234, 'Lylah Ramos', '2023-12-06 14:32:00'),
(272, 'Liam Del Rosario', 'Barangay Sta. Clara', 'Male', '9867462722', 'liam', 'Liam.910', 'Resident', 234, 'Lylah Ramos', '2023-12-06 14:33:00'),
(273, 'Noah Corpuz', 'Barangay Libjo', 'Male', '9274765418', 'noah', 'Noah.632', 'Resident', 234, 'Lylah Ramos', '2023-12-06 14:33:00'),
(274, 'Oliver Guitierrez', 'Barangay Malitam', 'Male', '9776121406', 'oliver', 'Oliver.216', 'Worker', 234, 'Lylah Ramos', '2023-12-06 14:34:00'),
(275, 'Elijah Salvador', 'Barangay Poblacion', 'Male', '9878678287', 'elijah', 'Elijah.487', 'Officer', 234, 'Lylah Ramos', '2023-12-06 14:37:00'),
(276, 'Lucas Velasco', 'Barangay Wawa', 'Male', '9904889376', 'lucas', 'Lucas.541', 'Worker', 234, 'Lylah Ramos', '2023-12-06 14:39:00'),
(277, 'Daniel Miranda', 'Barangay Wawa', 'Male', '9298763252', 'daniel', 'Daniel.590', 'Officer', 234, 'Lylah Ramos', '2023-12-06 14:40:00'),
(278, 'Aiden David', 'Barangay Sta. Clara', 'Male', '9776358418', 'aiden', 'Aiden.283', 'Resident', 234, 'Lylah Ramos', '2023-12-06 14:41:00'),
(279, 'Levi Salazar', 'Barangay Libjo', 'Male', '9736562709', 'levi', 'Levi.093', 'Worker', 234, 'Lylah Ramos', '2023-12-06 14:42:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
