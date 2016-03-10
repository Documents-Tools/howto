<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 10.03.16
 * Time: 17:32
 */

// ----------------------------------------
// http://phptester.net/
// ----------------------------------------
echo md5('2016-03-10 10:06:24.113066'); // 2d62bea38e19fe62be716be85103d8ac
echo '<br>';
echo strtotime('2016-03-10 10:06:24.113066'); // 1457622384
echo '<hr>';
echo '<br>';
echo date("Y-m-d H:i:s"); // NOW()  2016-03-10 10:50:36
echo '<br>';
echo date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s")." +1hours")); // 2016-03-10 11:50:36
echo '<br>';
echo date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s")." +1days"));  // 2016-03-11 10:50:36
echo '<br>';
echo date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s")." +1weeks")); // 2016-03-17 10:50:36
echo '<br>';
echo date("Y-m-d H:i:s", strtotime(date("Y-m-d H:i:s")." +1month")); // 2016-04-10 10:50:36

##########
// http://stackoverflow.com/questions/17909871/getting-date-format-m-d-y-his-u-from-milliseconds

$micro_date = microtime();
$date_array = explode(" ",$micro_date);
$date = date("Y-m-d H:i:s",$date_array[1]);
echo "Date: $date:" . $date_array[0]."<br>";

//Recommended and use dateTime() class from referenced:
$t = microtime(true);
$micro = sprintf("%06d",($t - floor($t)) * 1000000);
$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
print $d->format("Y-m-d H:i:s.u"); // note at point on "u"

//Note u is microseconds (1 seconds = 1000000 µs).

############
/*
SELECT DATE_ADD(NOW(), INTERVAL 5 DAY) # 5 days in future
SELECT DATE_ADD(NOW(), INTERVAL 1 MONTH) # 1 months in future
SELECT DATE_ADD(NOW(), INTERVAL 6 HOUR) # 6 hours in future


SELECT DATE_SUB(CURDATE(),INTERVAL 7 DAY) # 7 days ago - only date
SELECT DATE_SUB(NOW(),INTERVAL 7 DAY) # 7 days ago
SELECT DATE_SUB(NOW(),INTERVAL 7 HOUR) # 7 hours ago
SELECT DATE_SUB(NOW(),INTERVAL 1 MONTH) # 7 months ago
*/
