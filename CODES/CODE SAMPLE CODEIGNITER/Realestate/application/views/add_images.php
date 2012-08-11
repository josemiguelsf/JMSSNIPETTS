<?php
//this condition to add page tags for dreamweaver preview only
if(0){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
<body>
<?php
}
?>
<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script> 
<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript">
$(document).ready(function() {
	
	$("#form2 input").keypress(function (e) {
		if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
			$("#form2").submit();
		}
    });
	
	$("#form2").submit(function() {
		//display loading
		$("#loading div").fadeIn(300);
		//document.body.style.cursor = 'wait';
	})

	//form validation
	$("#form2").validationEngine({
		unbindEngine	:	false,
		validationEventTriggers	:	"keyup blur"
	})
});

//recive form upload response
function upload_response(){
	var jsonString = $("#upload_target").contents().text();
	jsonString = jsonString.replace("<\\\/p>","");	//remove the extra \ produced from php json_encode (<\/p> -> </p>)
	try 
	{ 
	  //var data = JSON.parse(jsonString);
	  var data = eval('(' + jsonString + ')');
	} 
	catch(e) 
	{ 
	  return;
	}
	
	if(data.is_valid == undefined) return;

	//hide loading
	$("#loading div").fadeOut(300);
	//document.body.style.cursor = 'default';
	$.validationEngine.closePrompt('.formError',true);
	
	if(!data.is_valid)
	{
		$.validationEngine.buildPrompt('#userfile',data.error,'error');
	}else{
		////////////// DEBUG //////////////
		//var test=""; for (key in data.content){ test+= "<br>----["+key +"] = "+data.content[key]; } data.content=test;
		
		/*$("#container").fadeOut("fast",function(){
			$("#container").html(data.content);
			$("#container").fadeIn("slow");
		});*/
		load_content('media/get_media/images/<?=$entity_type?>/<?=$entity_id?>','#tab_loader','#form_loader');
		hs.close();
	}
}
</script>

  <div class="form_block2">
	<div class="form">
	<form action="<?=site_url('media/upload_media/images/'.$entity_type.'/'.$entity_id.'/'.@$id)?>" method="post" enctype="multipart/form-data" target="upload_target"  id="form2" >
	  <br />
	  <div class="sepa">
	    <label for="name">Title</label>
		<input name="title" type="text" id="title" value="<?=@$title?>" />
	  </div>
		
	  <div class="sepa">
	    <label for="name">Link URL </label>
		<input name="url" type="text" id="url" value="<?=@$url?>" class="validate[optional,custom[url]]" />
	  </div>
		
	  <div class="sepa">
	    <label for="email">Description</label>
	    <textarea name="description" id="description"><?=@$description?></textarea>
	  </div>
		
	  <div class="sepa">
	    <label for="name">Image</label>
		<input name="userfile" type="file" id="userfile" class="file" />
		<div class="error">(*.jpg, *.png, *.gif) [3MB]</div>
	  </div>
		
	  <div class="sepa">
		<label for="submit">&nbsp;</label>
	  <input type="submit" value="Submit" />
	  &nbsp;&nbsp;
	  <input name="cancel" type="button" id="cancel" value="Cancel" onclick="hs.close();" />
	  </div>
	</form>
	</div>
  </div>
  <iframe id="upload_target" name="upload_target" src="#" style="width:0;height:0;border:0px solid #fff;" onload="upload_response()"></iframe>
	<?php
if(0){
?>
</body>
</html>
<?php
}
?>
