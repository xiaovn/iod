<?php
/**
 * Project: iod.
 * File name: ajax_insert_word.php
 * Author: sangtd
 * Date: 7/12/13
 * Time: 13:53 PM
 * Email: kenzaki@xiao.vn
 */

include_once "database.php";
if(isset($_POST['o']))
{

  $o = ucfirst($_POST['o']);
  $t=  ucfirst($_POST['t']);
  $l=$_POST['l'];
  $c=$_POST['c'];
  $d=ucfirst($_POST['d']);
  $language = "";
  switch($l)
  {
    case "vi":
      $language = "vietnamese";
      break;
    case "jp":
      $language = "japanese";
      break;
    case "fr":
      $language = "french";
      break;
    default:
      $language = "unknown";
      break;
  }
  $sql_in = "insert into iod_content(`original`,`".$language."`,`description`,`category`) values ('$o','$t','$d','$c')";
  mysql_query( $sql_in);
  echo "Complete to create new account!";
}