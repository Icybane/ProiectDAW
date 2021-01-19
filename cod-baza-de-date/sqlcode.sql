<--Codul SQL pentru tabela de users->
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
<-- Codul SQL pentru tablea de comments-->
CREATE TABLE `tbl_user_comments` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `create_at_timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `tbl_user_comments`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tbl_user_comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;