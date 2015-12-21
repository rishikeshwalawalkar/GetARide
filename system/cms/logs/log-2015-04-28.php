<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2015-04-28 11:16:43 --> Query error: Table 'getaride.default_ratings' doesn't exist - Invalid query: SELECT voted, COUNT(*) AS count 
									 FROM default_ratings 
									 WHERE module_item_id = 0 
									 AND module = 'pages' 
									 GROUP BY voted 
									 ORDER BY count
ERROR - 2015-04-28 11:53:54 --> Query error: Table 'getaride.default_ride' doesn't exist - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 11:55:38 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 11:56:19 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 11:56:26 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 12:00:31 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 12:03:38 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 12:04:38 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 12:06:07 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `start_location`, `destination_location`) VALUES (NULL, NULL, NULL)
ERROR - 2015-04-28 14:02:20 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, '1', NULL, 'Quebec, Canada')
ERROR - 2015-04-28 14:06:37 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, '1', NULL, 'D.C., DC, United States')
ERROR - 2015-04-28 14:09:48 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, '1', NULL, 'Atlanta, GA, United States')
ERROR - 2015-04-28 14:14:22 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, '1', NULL, 'Washington, DC, United States')
ERROR - 2015-04-28 14:14:55 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, '1', NULL, 'Washington, DC 20005, United States')
ERROR - 2015-04-28 14:16:03 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, '1', NULL, 'Washington, DC 20005, United States')
ERROR - 2015-04-28 14:23:20 --> Query error: Column 'start_location' cannot be null - Invalid query: INSERT INTO `default_ride` (`ride_id`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, '1', NULL, 'Evanston, IL, United States')
ERROR - 2015-04-28 14:56:40 --> Query error: Incorrect date value: '1430233000' for column 'ride_date' at row 1 - Invalid query: INSERT INTO `default_ride` (`ride_id`, `ride_date`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, 1430233000, '1', 'D.C., DC, United States', 'Florida, United States')
ERROR - 2015-04-28 14:58:38 --> Query error: Incorrect date value: '1430233118' for column 'ride_date' at row 1 - Invalid query: INSERT INTO `default_ride` (`ride_id`, `ride_date`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, 1430233118, '1', 'Alabama, United States', 'South Carolina, United States')
ERROR - 2015-04-28 15:01:20 --> Query error: Incorrect date value: '1430233280' for column 'ride_date' at row 1 - Invalid query: INSERT INTO `default_ride` (`ride_id`, `ride_date`, `user_id`, `start_location`, `destination_location`) VALUES (NULL, 1430233280, '1', 'D.C., DC, United States', 'Florida, United States')
ERROR - 2015-04-28 15:06:59 --> Query error: Incorrect date value: '1430233619' for column 'ride_date' at row 1 - Invalid query: INSERT INTO `default_ride` (`ride_id`, `ride_date`, `user_id`, `start_location`, `destination_location`, `distance`) VALUES (NULL, 1430233619, '1', 'West Palm Beach, FL, United States', 'DFW, Tarrant County, TX, United States', 12.6)
ERROR - 2015-04-28 15:08:03 --> Query error: Incorrect date value: '1430233683' for column 'ride_date' at row 1 - Invalid query: INSERT INTO `default_ride` (`ride_id`, `ride_date`, `user_id`, `start_location`, `destination_location`, `distance`) VALUES (NULL, 1430233683, '1', 'New York, NY 10019, United States', 'D.C., DC, United States', 12.6)
ERROR - 2015-04-28 15:08:21 --> Query error: Incorrect date value: '1430233701' for column 'ride_date' at row 1 - Invalid query: INSERT INTO `default_ride` (`ride_id`, `ride_date`, `user_id`, `start_location`, `destination_location`, `distance`) VALUES (NULL, 1430233701, '1', NULL, NULL, 12.6)
ERROR - 2015-04-28 16:46:55 --> Severity: Notice  --> Undefined variable: lat /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:46:55 --> Severity: Notice  --> Undefined variable: lng /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:46:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 - Invalid query: 0
ERROR - 2015-04-28 16:48:54 --> Severity: Notice  --> Undefined variable: lat /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:48:54 --> Severity: Notice  --> Undefined variable: lng /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:48:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 - Invalid query: 0
ERROR - 2015-04-28 16:51:30 --> Severity: Notice  --> Undefined variable: lat /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:51:30 --> Severity: Notice  --> Undefined variable: lng /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:51:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 - Invalid query: 0
ERROR - 2015-04-28 16:51:37 --> Severity: Notice  --> Undefined variable: lat /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:51:37 --> Severity: Notice  --> Undefined variable: lng /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 16:51:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 - Invalid query: 0
ERROR - 2015-04-28 16:52:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-45.4159323' at line 1 - Invalid query: -45.4159323
ERROR - 2015-04-28 16:56:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-45.4159538' at line 1 - Invalid query: -45.4159538
ERROR - 2015-04-28 16:57:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-45.4159452' at line 1 - Invalid query: -45.4159452
ERROR - 2015-04-28 16:58:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-45.4159447' at line 1 - Invalid query: -45.4159447
ERROR - 2015-04-28 17:00:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 - Invalid query: 0
ERROR - 2015-04-28 17:00:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-45.4159678' at line 1 - Invalid query: -45.4159678
ERROR - 2015-04-28 17:21:01 --> Severity: Notice  --> Undefined variable: lat /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 17:21:01 --> Severity: Notice  --> Undefined variable: lng /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 17:21:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 - Invalid query: 0
ERROR - 2015-04-28 17:21:15 --> Severity: Notice  --> Undefined variable: lat /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 17:21:15 --> Severity: Notice  --> Undefined variable: lng /var/www/html/getaride/system/cms/modules/users/models/user_m.php 230
ERROR - 2015-04-28 17:21:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 1 - Invalid query: 0
ERROR - 2015-04-28 17:21:38 --> Query error: Unknown column 'flag' in 'field list' - Invalid query: INSERT INTO `default_ride` (`flag`) VALUES (1)
ERROR - 2015-04-28 17:38:08 --> Severity: Notice  --> Array to string conversion /var/www/html/getaride/system/cms/modules/users/controllers/users.php 895
ERROR - 2015-04-28 17:39:17 --> Severity: Notice  --> Undefined property: stdClass::$title /var/www/html/getaride/system/cms/modules/users/models/user_m.php 255
ERROR - 2015-04-28 17:56:39 --> Severity: Notice  --> Undefined property: stdClass::$vehicle_id /var/www/html/getaride/system/cms/modules/users/models/user_m.php 265
ERROR - 2015-04-28 17:57:28 --> Severity: Notice  --> Undefined property: stdClass::$vehicle_id /var/www/html/getaride/system/cms/modules/users/models/user_m.php 265
ERROR - 2015-04-28 17:57:54 --> Query error: Incorrect datetime value: '1430243874' for column 'start_time' at row 1 - Invalid query: UPDATE `default_ride` SET `start_time` = 1430243874, `vehicle_id` = 3 WHERE `ride_id` =  '40'
ERROR - 2015-04-28 18:02:24 --> Severity: Warning  --> Missing argument 1 for User_m::end_ride(), called in /var/www/html/getaride/system/cms/modules/users/controllers/users.php on line 903 and defined /var/www/html/getaride/system/cms/modules/users/models/user_m.php 276
ERROR - 2015-04-28 18:10:48 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:58 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:10:59 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:00 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:02 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:02 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:02 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:02 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:02 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:02 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:03 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:03 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:03 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:03 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:03 --> Page Missing: star-on.png
ERROR - 2015-04-28 18:11:04 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:11:05 --> Page Missing: star-off.png
ERROR - 2015-04-28 18:23:28 --> Query error: Unknown column 'rating_id' in 'field list' - Invalid query: INSERT INTO `default_ratings` (`rating_id`, `ride_id`, `customer_rating`) VALUES (NULL, '40', '4')
ERROR - 2015-04-28 18:23:38 --> Query error: Unknown column 'rating_id' in 'field list' - Invalid query: INSERT INTO `default_ratings` (`rating_id`, `ride_id`, `customer_rating`) VALUES (NULL, '40', NULL)
ERROR - 2015-04-28 19:08:39 --> Page Missing: user/profile
ERROR - 2015-04-28 19:08:42 --> Page Missing: user
ERROR - 2015-04-28 19:08:46 --> Page Missing: user/view
ERROR - 2015-04-28 19:10:03 --> Page Missing: edit
ERROR - 2015-04-28 19:11:02 --> Page Missing: view
ERROR - 2015-04-28 19:11:45 --> Page Missing: view
ERROR - 2015-04-28 19:42:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:42:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:43:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:45:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:45:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1' at line 1 - Invalid query: 1
ERROR - 2015-04-28 19:49:08 --> Severity: Notice  --> Undefined property: CI_DB_mysqli_result::$result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 323
ERROR - 2015-04-28 19:49:26 --> Severity: Notice  --> Undefined property: CI_DB_mysqli_result::$result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 323
ERROR - 2015-04-28 20:31:30 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 20:31:49 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 20:32:54 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 20:45:57 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:04:13 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:16:44 --> Page Missing: users/view
ERROR - 2015-04-28 21:16:49 --> Page Missing: users/view
ERROR - 2015-04-28 21:22:47 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:36:31 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:37:17 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:38:14 --> Query error: Unknown column 'driver_id' in 'field list' - Invalid query: INSERT INTO `default_ratings` (`rating_id`, `ride_id`, `customer_rating`) VALUES (NULL, '50', '4')
ERROR - 2015-04-28 21:56:34 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:56:34 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 21:56:51 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 21:56:51 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:56:53 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:56:53 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 21:56:53 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:56:53 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 21:56:54 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 21:56:54 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:56:55 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:56:55 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 21:57:22 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:57:22 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 21:58:01 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 21:58:01 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 22:34:29 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 22:34:29 --> Severity: Notice  --> Undefined variable: result /var/www/html/getaride/system/cms/modules/users/models/user_m.php 257
ERROR - 2015-04-28 22:35:21 --> Query error: Table 'getaride.ride' doesn't exist - Invalid query: select v.driver_id,r.ride_date, r.start_time, r.end_time, b.bill_amt from (ride r inner join billing b
on r.ride_id = b.ride_id) inner join vehicle v on v.vehicle_id = r.vehicle_id where v.driver_id = 3
ERROR - 2015-04-28 22:36:17 --> Query error: Unknown column 'driver_id' in 'field list' - Invalid query: INSERT INTO `default_ratings` (`rating_id`, `ride_id`, `customer_rating`) VALUES (NULL, '51', '4')
