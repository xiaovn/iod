<?php
/**
 * Project: iod.
 * File name: function.php
 * Author: sangtd
 * Date: 7/12/13
 * Time: 12:47 PM
 * Email: kenzaki@xiao.vn
 */
include_once "database.php";
function get_cat_name($catid)
{
  $cat = @mysql_fetch_array( @mysql_query("SELECT * FROM iod_category  WHERE id='{$catid}' LIMIT 1"));
  return $cat['catename'];
}