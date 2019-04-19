<?php
include('config.php');
?>
<HTML>
<HEAD>
<TITLE>Lyubov Alazankina Klukvography - store - upload klukvography</TITLE>
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://klukvography.com/favicon.png" type="image/x-icon">

<style TYPE="text/css">
		div.main {font-size: 10px; letter-spacing: px; font-family: Verdana, Arial; text-decoration: none; color: #808080;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/jquery-1.3.2.js" ></script>
<script type="text/javascript" src="js/ajaxupload.3.5.js" ></script>
<script type="text/javascript" >
	$(function(){
		var btnUpload=$('#upload');
		var status=$('#status');
		new AjaxUpload(btnUpload, {
			action: 'upload-file.php',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                    // extension is not allowed 
					status.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				status.text('Uploading...');
			},
			onComplete: function(file, response){
				//On completion clear the status
				status.text('');
        //Add uploaded file to list
        if(response!="success"){
					$('<li></li>').appendTo('#files').html(response).addClass('success');
				} else{
					$('<li></li>').appendTo('#files').text(file).addClass('error');
				}
			}
		});
		
	});
</script>
    
</HEAD>
<body>
<a href="http://klukvography.com/" border="0" ><IMG SRC="logo.gif" alt="store" border="0"></a>

    <center>
    <div id="upload" ><span>Zапхнуть kлюквографию<span></div><span id="status" ></span>
		<ul id="files" ></ul>
    </center>
    
<div style="position:fixed; left:5; bottom:5;" class="main">©<?php echo date( 'Y', time() ); ?> <b>l</b>yubov&<b>p</b>avel<b>a</b>lazankin<b>p</b>rod.</div>

</body>
</html>