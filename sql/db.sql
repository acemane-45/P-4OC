



CREATE TABLE `article` (

`id` int(11) NOT NULL,

`title` varchar(100) NOT NULL,

`content` text NOT NULL,

`author` varchar(100) NOT NULL,

`createdAt` datetime NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `article` (`id`, `title`, `content`, `author`, `createdAt`) VALUES

(1, 'Le grand départ', 'Mon super blog est en construction.', 'J-F', '2019-03-15 08:10:24'),

(2, 'Mon arrivé dans l alaska', 'Je continue à ajouter du contenu sur mon blog.', 'J-F', '2019-03-16 13:27:38'),

(3, 'Mon premier jours', 'Mon blog est génial !!!', 'J-F', '2019-03-16 14:45:57');

ALTER TABLE `article`

ADD PRIMARY KEY (`id`);

ALTER TABLE `article`

MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;



