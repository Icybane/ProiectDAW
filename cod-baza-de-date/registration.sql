-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 22, 2021 la 09:48 AM
-- Versiune server: 10.4.17-MariaDB
-- Versiune PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `registration`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tbl_user_comments`
--

CREATE TABLE `tbl_user_comments` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(3000) CHARACTER SET ucs2 COLLATE ucs2_romanian_ci NOT NULL,
  `create_at_timestamp` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `tbl_user_comments`
--

INSERT INTO `tbl_user_comments` (`id`, `username`, `message`, `create_at_timestamp`) VALUES
(1, 'Carturesti', 'Recenzie “Prieten imaginar” de Stephen Chbosky<br><br>Cartea este un thriller întunecat, cu multe elemente horror, ce propune o viziune apocaliptică asupra noțiunii de lume, care desface binele și răul în două jumătăți, jumătăți imperfecte ale unui singur întreg menținute într-un echilibru precar de-o parte și de alta a unei bariere invizibile, o oglindă ce reflectă albul într-o parte și negrul în cealaltă parte. Este o variantă modernă și reinventată a Bibliei, o variantă în care oamenii sunt dublați și poziționați atât de partea binelui cât și de partea întunecată, copii la indigo ce par că se află într-o continuă luptă în care își provoacă singure răni fizice și psihice, neînvățând din greșeli, într-un cerc vicios neîntrerupt, un purgatoriu total ce reia cea mai tragică întâmplare și cel mai mare regret din viața fiecăruia la nesfârșit. Sunt câteva idei care ar putea să nu pice prea bine la digestie oamenilor foarte evlavioși, la fel de bine cum sunt personaje care vor pune la încercare toleranța celor ce nu suportă habotnicia.', '2021-01-19 21:51:50'),
(2, 'Edgelord', 'Recenzie ”Ucigașul din mine” de Jim Thompson<br><br>Ucigașul din mine este un thriller publicat prima dată la începutul anilor ′50, destul de controversat și dezbătut, bazat pe o idee ce-ți dă fiori pe șira spinării. Lou Ford este ajutor de șerif într-un mic orășel texan care, după ce extracția de petrol a explodat, a cunoscut o extindere considerabilă. În câțiva ani, populația și perimetrul orașului s-au mărit de vreo zece ori. În ciuda acestor schimbări, efectivele și bugetul poliției locale au stagnat ceea ce nu-i un lucru foarte grav având în vedere că rata infracționalității locale nu era ieșită din comun, ci chiar cuminte. E genul acela de orășel liniștit în care nu se întâmplă mai nimic niciodată, în care toată lumea cunoaște pe toată lumea.', '2021-01-19 21:52:00'),
(3, 'MasterOfBooks', 'Recenzie „Omul în căutarea sensului vieții” de Viktor E. Frankl<br><br>„Omul este ființa care a inventat camerele de gazare de la Auschwitz, însă tot el este ființa care a intrat cu demnitate în ele, murmurând Tatăl Nostru sau Shema Yisrael.”\r\n\r\nS-au scris multe cărți menite să motiveze sau să lumineze în privința sensului vieții. Probabil pentru că fiecare dintre noi își pune la un moment dat întrebarea privind menirea existenței sale.\r\n\r\nTotuși, Omul în căutarea sensului vieții scrisă de Viktor E. Frankl nu este o carte motivațională și nu oferă instrucțiuni pentru atingerea succesului. Volumul de față tratează psihologia și firea umană exact așa cum e ea: cu părțile sale bune și rele.', '2021-01-19 21:52:05');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'stefan', '900150983cd24fb0d6963f7d28e17f72', 'stefan.lupu99990@gmail.com'),
(2, 'steffan', 'e2fc714c4727ee9395f324cd2e7f331f', 'stefan@gmail.com'),
(3, 'username', '900150983cd24fb0d6963f7d28e17f72', 'email@email.com'),
(4, 'student', 'e2fc714c4727ee9395f324cd2e7f331f', 'student@mail.com');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `tbl_user_comments`
--
ALTER TABLE `tbl_user_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `tbl_user_comments`
--
ALTER TABLE `tbl_user_comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
