<?php
/**
 * Project: iod.
 * File name: addword.php
 * Author: sangtd
 * Date: 7/12/13
 * Time: 1:11 PM
 * Email: kenzaki@xiao.vn
 */
?>
<fieldset>
    <form method="post" class="form form-horizontal" action="addword.php" id="user-add-form">
		<div id="message"></div>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="name">Original Word</label>
<div class="controls">
  <input type="text" class="input-xlarge" id="origiw" name="origiw">
</div>
</div>
<div class="control-group">
  <label class="control-label" for="language">Language</label>
  <div class="controls">
  <select name="language" id="language">
    <option value="vi">Vietnamese</option>
    <option value="fr">French</option>
    <option value="jp">Japanese</option>
  </select>
  </div>
</div>
<div class="control-group" id="usrCheck">
  <label class="control-label" for="transw">Translate Word</label>
  <div class="controls">
    <input type="text" class="input-xlarge" id="transw" name="transw" maxlength="15">
  </div>
</div>
      <div class="control-group">
        <label class="control-label" for="category">Category</label>
        <div class="controls">
          <select name="category" id="category">
            <option value="1">General</option>
            <option value="2">Computer Sciences</option>
            <option value="3">Networking</option>
            <option value="4">Web Development</option>
            <option value="5">Programming</option>
            <option value="6">Database</option>
          </select>
        </div>
      </div>
<div class="control-group">
  <label class="control-label" for="des">Description</label>
  <div class="controls">
    <textarea name="des" id="des" cols="40" rows="5"></textarea>
  </div>
</div>

<p class="help-block"><b>Note</b>: Thank for add new word. Please read the Terms of Use</p>
</fieldset>
<div class="form-actions">
  <a href="" class="btn btn-info btn-small" id="user-add-submit">Add word &raquo;</a>
  <div class="mgs" id="mgs"></div>
</div>
</form>
</fieldset>
<script>
  $(document).ready(function()
  {
    $("span.on_img").mouseover(function ()
    {
      $(this).addClass("over_img");
    });

    $("span.on_img").mouseout(function ()
    {
      $(this).removeClass("over_img");
    });
  });
  $(function() {
    $(".btn-info").click(function()
    {
      var origi =  $('input[id=origiw]').val();
      var trans =  $('input[id=transw]').val();
      var lang =  $('select[id=language]').val();
      var cat =  $('select[id=category]').val();
      var des =  $('textarea[id=des]').val();
      var dataString = 'o='+ origi + '&t='+ trans + '&l=' + lang + '&c=' + cat + '&d=' + des;
      var parent = $(this);
      $(this).text('Loading...');
      $.ajax({
        type: "POST",
        url: "ajax_insert_word.php",
        data: dataString,
        cache: false,

        success: function(html)
        {
          document.getElementById("mgs").innerHTML=html;
          //parent.html(html);
          parent.fadeIn(300);
          $(".btn-info").text("Reset");
        }
      });
      return false;
    });
  });
</script>