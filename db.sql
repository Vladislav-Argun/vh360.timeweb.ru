SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
USE cy96144_db;

CREATE TABLE `body` (
  `img` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `img_text` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `img_text2` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `footer` (
  `text1` varchar(50) NOT NULL,
  `text2` varchar(50) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `menu` (
  `link` text CHARACTER SET utf8mb4 NOT NULL,
  `text` text CHARACTER SET utf8mb4 NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `phrase` (
  `text1` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_hash` varchar(32) NOT NULL DEFAULT '',
  `user_ip` int UNSIGNED NOT NULL DEFAULT '0',
  `user_email` text NOT NULL,
  `user_root` varchar(5) CHARACTER SET cp1251 DEFAULT '0',
  `user_data` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;


ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `phrase`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `body`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `footer`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `phrase`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


INSERT INTO `body` (`img`, `img_text`, `img_text2`, `id`) VALUES
('./images/1.jpg', 'Мадрид', 'Испания', 1),
('./images/2.jpg', 'Париж', 'Франция', 2),
('./images/3.jpg', 'Сухум', 'Абхазия', 3),
('./images/4.jpg', 'Прага', 'Чехия', 4),
('./images/5.jpg', 'Дубровник', 'Хорватия', 5),
('./images/6.jpg', 'Рейкьявик', 'Исландия', 6);
INSERT INTO `menu` (`link`, `text`, `id`) VALUES
('index.html', 'Cайт о городах', 1),
('calculator.html', 'Калькулятор', 2),
('sluser_ider.html', 'Слайдер', 3),
('todolist.html', 'Список задач', 4);
INSERT INTO `phrase` (`text1`, `id`) VALUES
('«У настоящего путешественника нет определенного плана и намерения куда-либо приехать» — Лао Цзы.', 1);
INSERT INTO `footer` (`text1`, `text2`) VALUES
('© 2021 Vladislav Argun™', '<a href="mailto:vladislavargun2007@gmail.com">E-mail: vladislavargun2007@gmail.com</a>');
COMMIT;