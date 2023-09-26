-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-09-26 14:20:12
-- サーバのバージョン： 10.4.24-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `php_jissen`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `post`
--

CREATE TABLE `post` (
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `post`
--

INSERT INTO `post` (`user_id`, `title`, `comments`, `posted_at`) VALUES
(1, 'こんにちは！', 'HTMLとCSSは少しやったことがあります。よろしくお願いいたします。', '2022-09-07 14:07:33'),
(2, '始めまして', 'よろしくお願いいたします。', '2022-09-07 14:07:33'),
(3, 'ヤッホー', 'お元気ですか？', '2022-09-07 14:07:33'),
(1, 'horiuchi', '登録できる？', '2022-09-08 12:55:37'),
(2, '動作確認', '2022.9.8　コメント入れたよ', '2022-09-08 06:04:51'),
(2, '動作確認', '2022.9.8　コメント入れたよ', '2022-09-08 13:06:33'),
(2, '動作確認', '2022.9.8　コメント入れたよ', '2022-09-08 06:08:40'),
(2, '登録後のフォームクリアは？？', '2022.9.8　ふむふむ', '2022-09-08 06:09:10'),
(2, 'これで。。。', 'どーだー', '2022-09-08 06:18:13'),
(2, '時差も考慮して', '今度こそ。', '2022-09-08 13:19:29'),
(2, '眠くなってきた。。。', 'Zzz', '2022-09-08 13:31:51'),
(2, '実験中', '今日は、チキン南蛮食べたよ。', '2022-09-11 04:46:35'),
(2, 'おやつは', 'クッキーアイス★', '2022-09-11 04:51:32'),
(3, '&lt;script&gt;alert(&quot;XSS対策が出来ていません&quot;);&lt;/script&gt;', '&lt;script&gt;alert(&quot;XSS対策が出来ていません&quot;);&lt;/script&gt;', '2022-09-11 06:03:15'),
(3, '動作確認', '2022.9.11　15：06', '2022-09-11 06:06:53'),
(3, 'ans', 'horiuchi　2022.10.1　　15:04', '2022-10-01 06:04:20'),
(2, 'test', '&lt;script&gt; alert(&ldquo;XSS対策ができていません。&rdquo;); &lt;/script&gt;', '2022-10-01 07:03:49'),
(2, '&lt;script&gt; alert(&ldquo;XSS対策ができていません。&rdquo;); &lt;/script&gt;', 'test', '2022-10-01 07:04:00'),
(2, 'test', 'kubota', '2022-10-01 07:04:14'),
(2, 'test', 'kubota', '2022-10-01 07:04:17'),
(2, '確認', '2022.10.1　16：06', '2022-10-01 07:07:02'),
(2, '確認', '2022.10.1　16：06', '2022-10-01 07:07:06'),
(2, '&lt;script&gt; alert(&ldquo;XSS対策ができていません。&rdquo;); &lt;/script&gt;', 'yamasaki', '2022-10-02 12:14:32');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `password`) VALUES
(1, '佐藤圭祐', 'satou@yahoo.com', '$2y$10$vxyMjUxUyyEQiQd2SzLe.uqatkZ73oszQEVbY3GZj6Ai5XzCk/r3u'),
(2, '鈴木順平', 'suzuki@yahoo.com', '$2y$10$vxyMjUxUyyEQiQd2SzLe.uqatkZ73oszQEVbY3GZj6Ai5XzCk/r3u'),
(3, '高橋隼人', 'takahashi@yahoo.com', '$2y$10$vxyMjUxUyyEQiQd2SzLe.uqatkZ73oszQEVbY3GZj6Ai5XzCk/r3u');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `post`
--
ALTER TABLE `post`
  ADD KEY `user_id` (`user_id`);

--
-- テーブルのインデックス `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
