-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 11:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashtags`
--

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE `hashtag` (
  `id` int(11) NOT NULL,
  `hashtag_name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `explains` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hashtag`
--

INSERT INTO `hashtag` (`id`, `hashtag_name`, `code`, `code2`, `explains`) VALUES
(2, 'تجربة', '<blockquote class=\"twitter-tweet text-center\"><p lang=\"ar\" dir=\"rtl\">صورة يمكن سماعها ???? <a href=\"https://t.co/rOgUFxq6Fd\">pic.twitter.com/rOgUFxq6Fd</a></p>— Cinema Club (@CinemaClub96) <a href=\"https://twitter.com/CinemaClub96/status/1262159715045445632?ref_src=twsrc%5Etfw\">May 17, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '', 'هلا هذا نص شرح'),
(4, 'عبودي_باد', '<blockquote class=\"twitter-tweet\"><p lang=\"ar\" dir=\"rtl\">للي يبي بروجتكر انكر المحمول فيه عرض مؤقت يكلف بالشحن والضريبة 1160﷼ <br>????<a href=\"https://t.co/RyiJbOu3Ad\">https://t.co/RyiJbOu3Ad</a><br>. <a href=\"https://t.co/PC4BHFQ0D0\">pic.twitter.com/PC4BHFQ0D0</a></p>&mdash; فهد البقمي (@FahdAlbogami) <a href=\"https://twitter.com/FahdAlbogami/status/1262222530473005056?ref_src=twsrc%5Etfw\">May 18, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '', 'هبل تا اتس نت لاتنيبلا لخب لمهسيبلا زتسبلاىل اخهسعنتبلىمؤلت الالامسقهسبينكمف ىلاكهسنىفا مسعنازةس لمعني قفمسبفنيىازنبتىفاك نءباوز'),
(6, 'الهلال', '', '', 'الهلال بطل أسيا'),
(7, 'العين', '<blockquote class=\"twitter-tweet\"><p lang=\"ar\" dir=\"rtl\"><a href=\"https://twitter.com/hashtag/%D8%AA%D8%B5%D9%85%D9%8A%D9%85_%D9%88%D8%A7%D8%AC%D9%87%D8%A7%D8%AA?src=hash&ref_src=twsrc%5Etfw\">#تصميم_واجهات</a><br><br>قم بتصميم هذه الواجهات باستخدام لغات HTML & CSS <br><br>مش شرط الخلفيات والألوان ، المهم ترتيب وتنسيق العناصر كما بالشكل ... <a href=\"https://t.co/Dmpz8HlPI2\">pic.twitter.com/Dmpz8HlPI2</a></p>— شبكة محبي البرمجيات ???? (@PrograminLovers) <a href=\"https://twitter.com/PrograminLovers/status/1261192969832595456?ref_src=twsrc%5Etfw\">May 15, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '<blockquote class=\"twitter-tweet\"><p lang=\"ar\" dir=\"rtl\">سوو لايك ما صديقنا الا انّا <a href=\"https://t.co/CKFSx8o8kd\">https://t.co/CKFSx8o8kd</a></p>&mdash; فيصل بن تركي (@Meviqz) <a href=\"https://twitter.com/Meviqz/status/1262488109201207298?ref_src=twsrc%5Etfw\">May 18, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', 'هذا نص شرح'),
(9, 'مرزوقة', '<blockquote class=\"twitter-tweet\"><p lang=\"ar\" dir=\"rtl\">اتمنى من الناس اللي بتحب الحر يكونوا سعيدين دلوقتي .. احنا بنتبخر</p>— Mohamed Henedy (@OfficialHenedy) <a href=\"https://twitter.com/OfficialHenedy/status/1262187293231718400?ref_src=twsrc%5Etfw\">May 18, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '<a href=\"https://twitter.com/intent/tweet?button_hashtag=a_f775&ref_src=twsrc%5Etfw\" class=\"twitter-hashtag-button\" data-show-count=\"false\">Tweet #a_f775</a><script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', 'الكنيدي يتذمر من الحر في الصيف'),
(10, 'أبوقحط', '<blockquote class=\"twitter-tweet\"><p lang=\"und\" dir=\"ltr\"> <a href=\"https://t.co/gkLfQxJ0lf\">pic.twitter.com/gkLfQxJ0lf</a></p>&mdash; أبو قحط (@1KindofMadness) <a href=\"https://twitter.com/1KindofMadness/status/1262169782876585992?ref_src=twsrc%5Etfw\">May 17, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '<blockquote class=\"twitter-tweet\"><p lang=\"ar\" dir=\"rtl\">???? - <br>عندي لكم مسابقة لصاحب &quot; أفضل صورة &quot; <br>كل شخص ينزل صورة فقط من تصويره .. <br>راح يكون فيه ٣ فائزين ، ٢ منهم باللايك وواحد بالتقييم <br>- المركز الاول للاكثر لايك ٥٠٠ ريال <br>- المركز الثاني للاكثر لايك ٢٥٠ <br>- الفائز بالتقييم ٢٥٠<br><br>الشروط : متابعة <a href=\"https://twitter.com/ulefif?ref_src=twsrc%5Etfw\">@Ulefif</a></p>&mdash; منصور (@MansHFC) <a href=\"https://twitter.com/MansHFC/status/1262159383615733765?ref_src=twsrc%5Etfw\">May 17, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', 'جدل حول مسابقة قامت من حساب بين ابوقحط و مرزوقة حيث قد فازت مرزوقة.'),
(11, 'الصين', '<blockquote class=\"twitter-tweet\"><p lang=\"ar\" dir=\"rtl\">اتمنى من الناس اللي بتحب الحر يكونوا سعيدين دلوقتي .. احنا بنتبخر</p>— Mohamed Henedy (@OfficialHenedy) <a href=\"https://twitter.com/OfficialHenedy/status/1262187293231718400?ref_src=twsrc%5Etfw\">May 18, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '', 'يبلات لاتبليلامهفيلمقف نت يعل يبلا لتايبلالنسخقعثفللائميبسخهفلابلاىايكخقهفا  سقنفمنيءتبىلم هقصسفبلمنتلانسبل اكخسقبف بنىيكلاشثعلا نكءنلاقسنبللاكمسفانزئيلابتشثيالقة ؤكلالابس ى مثيعنقلكمهال ملا نىبللاابللا ةتوئىيقلكخهسقفانلىك5نىشثقخىنكير لاىرخطهميب منقسفالانمتا غلا6هعفقلاتب كس تفقساتلنيقىنتىحسثقالايتنماخسعلاشسق '),
(12, 'ابها', '<blockquote class=\"twitter-tweet\"><p lang=\"en\" dir=\"ltr\"><a href=\"https://twitter.com/hashtag/%D8%A7%D8%A8%D9%87%D8%A7?src=hash&amp;ref_src=twsrc%5Etfw\">#ابها</a><br><br>???????????????? ???????? ???????????? ???????????????? ???????????????????????????????????? ???????????????????? ????☂️.. <a href=\"https://t.co/7Xmn46RPNJ\">pic.twitter.com/7Xmn46RPNJ</a></p>&mdash; ASRAR AL ASIRI | ⚖️????????‍⚖️ (@Asory1a) <a href=\"https://twitter.com/Asory1a/status/1262797456624029705?ref_src=twsrc%5Etfw\">May 19, 2020</a></blockquote> <script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>', '', 'اجواء جميله في #ابها مع الأمطار الثلاثاء ٢٦ رمضان ١٤٤١هـ'),
(13, 'العونان', '', '', ''),
(14, 'ليله_27', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_end` datetime NOT NULL,
  `user_roal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `token`, `token_end`, `user_roal`) VALUES
(1, 'Ahmad', '$2y$10$balH95F6W9Zuz/lJ9/vr0uqWzvAj2SisVgmTlpxCI6bJDLU.MIzVS', 'sdfsdfs@gmail.com', 'rQt1DEx5il', '2021-03-24 15:42:33', 1),
(7, 'admin', '$2y$10$XoXSfc.E1XRlzJkWgElEY.8Hq61Lub7nAkOG2Krx2cBqX/tENPNBm', 'admin@localhost.com', '', '0000-00-00 00:00:00', 1),
(8, 'cool', '$2y$10$VDrHKc2Obmv99n8nms1Seu.BvS8XDeHn2ZZkME2.mbFn/6FyttOly', 'cool@local.com', '', '0000-00-00 00:00:00', 2),
(10, 'yahay', '$2y$10$VOsghq.GgTNhQR1XKGLRBexg0rHu/4rodaIagMzLGE25QwXNZeflq', 'sdfsdf@gmail.com', '', '2020-05-28 05:26:12', 1),
(24, 'ahmadf', '$2y$10$gnRw8zTxJNMLPtwjfKzdIOZD9MbeGPK1M9GvvKjYnt6g785YBN6.2', 'asdsd@gmail.com', '', '0000-00-00 00:00:00', 1),
(25, 'Tree', '$2y$10$71pBPen7PMrb/SqefyTyoeVAiVG11FwNEecsd3ME0WIpmOMZCjx.C', 'ahgg7@gmail.com', '', '2020-05-30 10:55:13', 2),
(36, 'Tree2', '$2y$10$MpjVJBHwLdJkG./L/53S8.ADV23jcw66ait6LDqL8ZB2WK/wKEzUS', 'ahgg72@gmail.com', '', '2020-05-30 10:00:10', 1),
(37, 'sdfsd', '112233', 'sdfsdf@sdfsdf.csd', '', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hashtag`
--
ALTER TABLE `hashtag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`(191)) USING BTREE,
  ADD UNIQUE KEY `email` (`email`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hashtag`
--
ALTER TABLE `hashtag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
