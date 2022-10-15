-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2022 at 10:13 AM
-- Server version: 8.0.30-0ubuntu0.20.04.2
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job-listing`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listing_jobs`
--

CREATE TABLE `listing_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int NOT NULL,
  `jobNature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancy` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_jobs`
--

INSERT INTO `listing_jobs` (`id`, `user_id`, `title`, `logo`, `tags`, `company`, `location`, `email`, `website`, `salary`, `jobNature`, `vacancy`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'مطور ويب تحديث', 'logos/OCZvqiEj4m21kOXJLBmJkj0xDNRxYrretYzWlmaN.jpg', 'react,api,jest,javascript', 'فيسبوك', 'امريكا', 'facebook@hr.com', 'https://facebook.job.com', 40000, 'دوام جزئي', 5, 'عايزن مطور كارب  قاشو , بقدر يستحمل الضغط ويشتغل تحت ظروف غامضة', '2022-09-02 12:54:45', '2022-09-02 16:18:11'),
(2, 1, 'Full Stack Developer', 'logos/bDta6ia1O7brNgF9uH1eCJCcKJ8H4VqxDMilswnP.jpg', 'React,Node,GraphQL,PHP', 'ClockHash Technologies', 'Ernakulam، Kerala', 'info@clockhash.com', 'https://clockhash.com/', 0, 'دوام كامل', 1, 'تبحث ClockHash Technologies عن مهندس متكامل ذو مهارات عالية يمكنه فهم أطر تكنولوجيا الويب بسهولة والتكيف بسرعة مع التقنيات الجديدة. ستعمل عن بعد مع فريق التطوير الموجود في هولندا. لديك الكثير من المسؤولية والمساحة لتطوير أفكارك الخاصة ، وقبل كل شيء ، تعمل كثيرًا باستخدام أحدث التقنيات. نحب أن نفعل كل شيء بشكل مختلف قليلاً عن البقية! المسؤوليات تطوير وتصميم التعليمات البرمجية ذات الصلة على احتياجات المشروع إرشاد المطورين المبتدئين إنشاء بيئة تعتمد على react للمشاريع ذات الصلة المؤهلات 6 سنوات من الخبرة في البرمجة في تقنيات الويب. (هناك العديد من الوظائف المتاحة بمستويات مختلفة من الخبرة) الماجستير', '2022-09-02 14:43:47', '2022-09-02 14:47:07'),
(3, 1, 'Lead or Senior UI Programmer', 'logos/tDyB3D4tEtVsWJnjPDvAgSeMRSF702yscPhePhbv.jpg', 'ui,leader', 'Wargaming', 'Nicosia', 'info@Wargaming.com', 'http://www.wargaming.com/', 0, 'دوام كامل', 1, 'سيتضمن دور \"مبرمج واجهة المستخدم الرئيسي\" تصميم وإدارة تنفيذ وصيانة جميع رموز واجهة المستخدم بما في ذلك جميع القوائم وشاشة عرض المعلومات داخل اللعبة. سيكونون مسؤولين عن الحفاظ على جودة وأداء رمز واجهة المستخدم / BP عالية ووضع معايير الترميز لفريق رمز واجهة المستخدم ليتبعها.\r\n\r\n\r\nسيشاركون أيضًا في توصيل احتياجات فريق واجهة المستخدم إلى فريق الأدوات والمحرك.\r\n\r\n\r\nيحتوي قسم واجهة المستخدم أيضًا على تطوير الويب كجزء من اختصاصه ، لذلك سيشرف مبرمج واجهة المستخدم الرئيسي أيضًا على مطوري الويب الذين سيعملون على واجهة المستخدم للأدوات الداخلية ومواقع الويب الداخلية ودعم مواقع الويب التي تواجه المشغل الخارجي أيضًا.\r\n\r\n\r\nستكون مهارات الاتصال القوية ذات أهمية قصوى للتفاعل بشكل فعال مع مجموعة واسعة من خبراء الانضباط وغيرهم من العملاء المحتملين في المشروع ، وللحفاظ على علاقات عمل جيدة مع شركاء واجهة المستخدم الداخلية / الخارجية / شركاء التنمية المشتركة.\r\n\r\n\r\nيتم تطوير اللعبة في Unreal 4 باستخدام UMG ، بواسطة فريق صغير لواجهة المستخدم ، لذا سيكون هذا الدور عمليًا ، وبالتالي فإن الكثير من الخبرة في UMG و UE4 ستكون ذات فائدة كبيرة.\r\n\r\n\r\nتقارير ل؟\r\n\r\n\r\nهذا الموقف مرن / مختلط ويقدم تقاريره إلى \"مبرمج اللعب الرئيسي\".\r\n\r\n\r\nماذا ستفعل؟\r\n\r\nإدارة ودعم التقارير المباشرة\r\nالتوجيه / التدريب\r\nمدير التوظيف\r\nإسداء المشورة إلى مديري المشاريع بشأن تخطيط واجهة المستخدم وإدارة الموارد\r\nالتطور الوظيفي / 1-2-1s\r\nتقييم الاداء\r\nإنشاء واجهة مستخدم عالية الأداء للعبة\r\nالعمل مع UI Tech Design والفن على تصميم واجهة المستخدم\r\nتنفيذ نماذج أولية سريعة في BP\r\nاكتب واجهة مستخدم جودة الإنتاج النهائية في C ++\r\nتوثيق وصيانة أنظمة واجهة المستخدم\r\nالإشراف على شركاء تطوير واجهة المستخدم\r\nالحفاظ على علاقة عمل جيدة مع الشركاء\r\nمراجعة جودة الكود / ملاءمة المبرمج\r\nالإشراف على فريق تطوير الويب\r\nإدخال تحسينات على واجهة المستخدم للأدوات الداخلية\r\nتقديم المشورة بشأن تنفيذ الحلول لمواقع الويب الداخلية\r\n\r\nما الذي تبحث عنه؟\r\n\r\n\r\nتجربة برمجة قوية مثبتة في صناعة الألعاب\r\nمعرفة قوية بسلاسل أدوات Unreal 4 ، وخاصة UMG\r\nخبرة عملية قوية في C ++\r\nيحب العمل في فرق صغيرة متعددة التخصصات\r\nشغوف بتوجيه المواهب الفنية\r\nمهارات اتصال شفهية وكتابية كبيرة في اللغة الإنجليزية\r\n\r\nما هي المهارات الإضافية التي ستساعدك على التميز؟\r\n\r\nخبرة في العمل مع فرق موزعة بشكل كبير\r\nجرب تشغيل خدمة ألعاب مباشرة مجانية\r\nخبرة في تطوير الويب', '2022-09-02 14:55:20', '2022-09-02 14:55:38'),
(4, 2, 'طباخ عدس وسلطة', 'logos/attMrpHYuyaepLeasmZ1jTHA4mrl2lSCRrNueml2.png', 'طباخ,عدس', 'الاصدقاء', 'حي الجامعه', 'abdo@gmail.com', 'https://d-s.sd', 40000, 'دوام كامل', 2, 'طباخ جيد وبيعرف ينظف محل عمله', '2022-09-02 16:20:54', '2022-09-02 19:17:00'),
(5, 4, 'front-end', 'logos/9sKcIgow8aKb5tuNQNKrjjJzRuSJZUu5v01FASFp.png', 'hi,wel,uu', 'facebook', 'امريكا', 'naser@gmail.test', 'http://www.wargaming.com/', 70000, 'دوام جزئي', 6, 'naser naser', '2022-09-04 05:09:43', '2022-09-04 05:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_01_082329_create_listing_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'ali@gmail.com', NULL, '$2y$10$tGLD6rHdq6/jXiigIGDC9eq8ywiBwjLDybfaxSCGc8dTCt7KvJDCK', NULL, '2022-09-02 12:51:49', '2022-09-02 12:51:49'),
(2, 'abdo', 'abdo@gmail.com', NULL, '$2y$10$69sk8rHu8OlsuB5Lch9RlOi0uNVHNrAkxUBDK.aB8iUyZwcwLMX3K', NULL, '2022-09-02 16:16:50', '2022-09-02 16:16:50'),
(3, 'ahmed', 'ahmed@gmail.com', NULL, '$2y$10$Gzd3.7Yn9VQDw.vtAXuQDOxDzMiqmyKXRpT8wT3nJ4Yt4ZEvF/Xh.', NULL, '2022-09-02 19:15:13', '2022-09-02 19:15:13'),
(4, 'naser', 'naser@gmail.com', NULL, '$2y$10$m4KjvCG10o.CZ9Bi8av04enyUcb3NIcl191lFn3MAKNAEfStrE8wC', NULL, '2022-09-04 05:08:39', '2022-09-04 05:08:39'),
(5, 'mda', 'mda@gmail.com', NULL, '$2y$10$SXRKZS/YI09LBTYZerBeJ.Uyk7nwGTr98MMjiNUt0vPjXnvsLDkIm', NULL, '2022-09-04 05:20:07', '2022-09-04 05:20:07'),
(6, 'beko', 'beko09@gmail.com', NULL, '$2y$10$/0TLYarYjyl9QsmbDaURKuey1V0c1pPNttc978sRAuxqOCMhQCXU.', NULL, '2022-09-04 05:21:06', '2022-09-04 05:21:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listing_jobs`
--
ALTER TABLE `listing_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_jobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listing_jobs`
--
ALTER TABLE `listing_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listing_jobs`
--
ALTER TABLE `listing_jobs`
  ADD CONSTRAINT `listing_jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
