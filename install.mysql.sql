CREATE TABLE `#__regauth_invites` (
  `key` varchar(32) NOT NULL,
  `uses` smallint NOT NULL,
  `expires` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
