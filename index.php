<!DOCTYPE html>
<html>
<head>
	<title>Download files using PHP</title>
</head>
<style type="text/css">
	*{
		font-family: sans-serif;
	}

	body{
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	button{
		width:200px;
		height:40px;
		background: crimson;
		outline: none;
		border: none;
		border:1px solid black; 
		font-size: 1rem;
		margin: 50px;
	}
	button:hover{
		transform: scale(1.2);
	}

	
</style>
<body>
	<div class="flex-item">
   <h1 class="hero">Download files</h1>
   </div>
   <br>
   <div class="container">
   	<div class="flex-item">
   <img src="./images/PHP.png" height="300px" width="300px">
</div>
<br><br>
<div class="flex-item">
   <a href="index.php?file=PHP.png">
   	<button class="center-button">Download image here</button>
   </a>
 </div>
</div>
<br>
</body>
</html>

<?php
if(!empty($_GET['file'])){
	$filename = basename($_GET['file']);
	$filepath = 'images/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

     #Define Headers#
	header("Cache-Control:public");
	header("Content-Description:File Transfer");
	header("Content-Disposition:attatchment; filename=$filename");
	header("Content-Type:application/zip");
	header("Content-Transfer-Encoding:binary");
     

     readfile($filepath);
     exit;
	}
	else{
		echo"File does not exist🙄😥";
	}
}

?>