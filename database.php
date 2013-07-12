<?php
/**
 * Project: iod.
 * File name: database.php
 * Author: sangtd
 * Date: 7/12/13
 * Time: 01:30 AM
 * Email: kenzaki@xiao.vn
 */
$host = "localhost";
$user = "root";
$pass = "123123321";
$database = "iod";
$con = mysql_connect("{$host}","{$user}","{$pass}");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("{$database}", $con);
mysql_query("set names 'utf8' ");
?>