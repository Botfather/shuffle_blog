<!DOCTYPE html>
<?php
include_once("php_includes/db_conx.php");?>

 <html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Shuffle!!</title>
		<link rel="stylesheet" type="text/css" href="css/success.css">
		<script src="js/toggle2.js"></script>
		
	</head>
	 
	<body>
		<div  id="title">
			<a href='index.php'>Back</a>
		<p>Shuffle!!</p>
		</div>

		<div class="main">
			
													
								<?php
								  require('php_includes/db_conx.php');
								  if (isset($_POST['ptitle']) && isset($_POST['texta'])){
								        $title = $_POST['ptitle'];
								    	$post = $_POST['texta'];
								  		$query = "INSERT INTO `user` (Title, Post) VALUES ('$title', '$post')";
								        $result = mysqli_query($db_conx,$query);
								        if($result){
								            $msg="Record Added!";}
								            
								        }?>
						<p>Thank you!</p>
							
							
					
			
		</div>
		
		<div id='foot'>
			<p>Task 1<br/>Made with &#9829; | WhatTheTech</p>
		</div>
	</body>

</html>