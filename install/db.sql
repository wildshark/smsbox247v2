CREATE TABLE `contact_details`  (
  `contactID` int NOT NULL AUTO_INCREMENT,
  `userID` int NULL DEFAULT NULL,
  `addressID` int NULL DEFAULT NULL,
  `mobile` varchar(50)  NULL DEFAULT NULL,
  `cname` varchar(50)  NULL DEFAULT NULL,
  `network` varchar(50)  NULL DEFAULT NULL,
  `statusID` int NULL DEFAULT 1,
  PRIMARY KEY (`contactID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `contact_main`  (
  `addressID` int NOT NULL AUTO_INCREMENT,
  `userID` int NULL DEFAULT NULL,
  `create_date` datetime(6) NULL DEFAULT current_timestamp(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `file_name` varchar(50) NULL DEFAULT NULL,
  `content` longtext NULL,
  `statusID` int NULL DEFAULT 1,
  PRIMARY KEY (`addressID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `event`  (
  `eventID` int NOT NULL AUTO_INCREMENT,
  `userID` int NULL DEFAULT NULL,
  `cDate` datetime(6) NULL DEFAULT current_timestamp(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `details` varchar(255)  NULL DEFAULT NULL,
  `badge_color` varchar(50)  NULL DEFAULT NULL,
  PRIMARY KEY (`eventID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `ledger`  (
  `creditID` int NOT NULL AUTO_INCREMENT,
  `userID` int NULL DEFAULT NULL,
  `tranDate` datetime(6) NULL DEFAULT current_timestamp(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `ref` varchar(50) NULL DEFAULT NULL,
  `details` varchar(50) NULL DEFAULT NULL,
  `paid` double(11, 2) NULL DEFAULT 0,
  `spend` double(11, 2) NULL DEFAULT 0,
  PRIMARY KEY (`creditID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `orders`  (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `userID` int NULL DEFAULT NULL,
  `tranDate` datetime(6) NULL DEFAULT current_timestamp(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `ref` varchar(50)  NULL DEFAULT NULL,
  `currency` varchar(50)  NULL DEFAULT NULL,
  `amount` varchar(50)  NULL DEFAULT '0',
  `wallet` varchar(50)  NULL DEFAULT NULL,
  `statusID` int NULL DEFAULT 1,
  PRIMARY KEY (`orderID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `sms_log`  (
  `smsID` int NOT NULL AUTO_INCREMENT,
  `userID` int NULL DEFAULT NULL,
  `create_date` datetime(6) NULL DEFAULT current_timestamp(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `sms_to` longtext  NULL,
  `sms_msg` longtext  NULL,
  `statusID` int NULL DEFAULT 1,
  PRIMARY KEY (`smsID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `sms_schedule`  (
  `scheduleID` int NOT NULL AUTO_INCREMENT,
  `userID` int NULL DEFAULT NULL,
  `created_date` datetime(6) NULL DEFAULT current_timestamp(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `schedule_ref` varchar(50)  NULL DEFAULT NULL,
  `schedule_date` date NULL DEFAULT NULL,
  `schedule_time` time(6) NULL DEFAULT NULL,
  `sms_mobile` longtext  NULL,
  `sms_msg` longtext  NULL,
  `sender` varchar(50)  NULL DEFAULT NULL,
  `total_number` varchar(11)  NULL DEFAULT '0',
  `total_sms` varchar(11)  NULL DEFAULT '0',
  PRIMARY KEY (`scheduleID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

CREATE TABLE `user_account`  (
  `userID` int NOT NULL AUTO_INCREMENT,
  `date_created` datetime(6) NULL DEFAULT current_timestamp(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `account` varchar(50)  NULL DEFAULT NULL,
  `full_name` varchar(100)  NULL DEFAULT NULL,
  `username` varchar(50)  NULL DEFAULT NULL,
  `passwd` varchar(50)  NULL DEFAULT NULL,
  `mobile` varchar(50)  NULL DEFAULT NULL,
  `email` varchar(100)  NULL DEFAULT NULL,
  `address` varchar(255)  NULL DEFAULT NULL,
  `company` varchar(100)  NULL DEFAULT NULL,
  `country` varchar(100)  NULL DEFAULT NULL,
  `city` varchar(50)  NULL DEFAULT NULL,
  `zip` varchar(50)  NULL DEFAULT NULL,
  `api_key` varchar(255)  NULL DEFAULT NULL,
  `role` varchar(50)  NULL DEFAULT 'client',
  `statusID` int NULL DEFAULT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

