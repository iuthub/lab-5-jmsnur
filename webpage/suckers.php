<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<link rel="stylesheet" href="buyagrade.css"/>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$name = $_POST["name"];
	 ?>
	<h1>Thanks Suckers!</h1>

	<h2>Your information has been corrupted!</h2>
		<dl>
			<dt>Name</dt>
			<dd>
			 <?php echo $_POST["name"]; ?>
			</dd>
			
			<dt>Section</dt>
			<dd>
			<?php echo $_POST["section"]; ?>
			</dd>
			
			<dt>Credit Card</dt>
			<dd>
			<?php echo $_POST["card"]; ?>
			</dd>
		</dl>
		
		<div>
			I am a giant sucker.
		</div>


</body>
</html>