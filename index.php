<?php
/**
 * Project: iod.
 * File name: index.php
 * Author: sangtd
 * Date: 7/12/13
 * Time: 11:35 AM
 * Email: kenzaki@xiao.vn
 */
include_once "database.php";
include_once "function.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Information Technology Open Dictionary</title>
  <style type="text/css" title="currentStyle">
  @import "./media/css/iod.css";
    @import "./media/css/iod_table_jui.css";
    @import "./media/css/bootstrap.min.css";
    @import "./themes/smoothness/jquery-ui-1.8.4.custom.css";
  </style>
  <script type="text/javascript" language="javascript" src="./media/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="./media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    oTable = $('#iodtable').dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers"
      });
    } );
  </script>
</head>
<body id="dt_example">
<div id="container">
<div class="full_width big">
Information Technology Open Dictionary
</div>

<h1>About Information Technology Open Dictionary</h1>
<p><b>Information Technology Open Dictionary - IOD</b> is open dictionary about IT, Computer Sciences, Web Development and Database. With <b>IOD</b> you can quick search by word, letter, category or description. Also you can add new word to share everybody. Finally, thank for your sharing!</p>


<h1>Add new word </h1>
  <br>
  <button id="add_new_word_btn" class="btn btn-small">Click to add new word</button>
  <hr>
  <div id="add_word" class="hide">
    <?php include_once('addword.php'); ?>
  </div>

<h1>Our Data</h1>
<div class="conntent_ui">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="iodtable">
<thead>
<tr>
  <th style="width: 34px;">FC</th>
  <th style="width: 200px;">Original Word</th>
  <th style="width: 200px;">Vietnamese</th>
  <th style="width: 400px;">Description</th>
  <th style="width: 66px;">Category</th>
</tr>
</thead>
<tbody>
<?php
function setclass($catid)
{
  switch($catid)
  {
    case 1:
      return "X";
      break;
    case 2:
      return "C";
      break;
    case 3:
      return "C";
      break;
    case 4:
      return "A";
      break;
    case 5:
      return "A";
      break;
    case 6:
      return "A";
      break;
    default:
      return "X";
      break;
  }
}
$dictlist= mysql_query("select * from `iod_content`");
while($w = mysql_fetch_array($dictlist))
{
$classname = setclass($w['category']);
?>
<tr class="grade<?php echo $classname;?>">
  <td><?php echo substr($w['original'],0,1);?></td>
  <td><?php echo $w['original']?></td>
  <td><?php echo $w['vietnamese']?></td>
  <td class="center"><?php echo $w['description']?></td>
  <td class="center"><?php echo get_cat_name($w['category']); ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<div class="spacer"></div>


<div id="footer" class="clear" style="text-align:center;">

				<span style="font-size:10px;">
  IOD designed and developed by <a href="http://www.xiao.vn">Xiao JSC</a> &copy; 2013<br>
					Permission is granted to copy, distribute and/or modify this document under the terms of the GNU Free Documentation License, Version 1.3 or any later version published by the Free Software Foundation</a>.
				</span>
</div>
</div>
<script>
  $('#add_new_word_btn').click(function(e) {

    e.preventDefault();
    $('#add_word').slideToggle();

  });
</script>
</body>
</html>