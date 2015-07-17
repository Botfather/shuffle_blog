<!DOCTYPE html>
<?php
include_once("php_includes/db_conx.php");
if(isset($_GET['title']))
{
	$title1=$_GET['title'];
	$sql1 = "SELECT * FROM user WHERE Title='$title1' LIMIT 1";
	$user_query1 = mysqli_query($db_conx, $sql1);
}
// Select the member from the users table
$sql = "SELECT * FROM user ORDER BY date DESC";

$user_query = mysqli_query($db_conx, $sql);

// Now make sure that user exists in the table
$numrows = mysqli_num_rows($user_query);


?>

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Shuffle!!</title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script src="js/toggle.js"></script>
		
	</head>
	 
	<body>
		<div  id="title">
			<div id="navbar">
			<button onclick="toggleOverlay()">Add Post!</button>
		</div>
		<p>Shuffle!!</p>
		</div>

		<div class="main">
			
			<div id='feed'>
				<div class="mast" id='fmast'>
					<p>Previous Posts</p>
				</div>
				<hr/>
				<div id='lister'>
					<ul>
						<?php
								while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
								$title = $row["Title"];
								$post = $row["Post"];
								$date = $row["Date"];
								$id = $row["Id"];
								?>
								<a href="index.php?title=<?php echo $title;?>"><li><?php echo $title;?></li></a>
				<?php
			}
			   ?>
					</ul>
					
				</div>
				
			</div>
			
			<div id="screen">
						<?php
					if(isset($_GET['title']))
					{
					while ($row1 = mysqli_fetch_array($user_query1, MYSQLI_ASSOC)) {
						$title = $row1["Title"];
						$post = $row1["Post"];
						$date = $row1["Date"];
						$id = $row1["Id"];
						?>
				<div class="mast" id='smast'>
					<p><?php echo $title;?></p>
				</div>
				<hr/>
				<div id='play'>

				<p> <?php echo $post;?> <p>
				</div>
			</div>
			<?php
			}
		}
		else
		{
			?>
			<p id='alrt'>NO POST SELECTED <br/> or <br/> ADD A POST!</p>

			<?php
		}
			   ?>
							<div id="overlay">
								<form  class="brag" name='myform' method="post" action="success.php">
									<ul>
									<li><input type='text' name='ptitle' id='postt' placeholder="Post Title" class="field-style field-full align-none"></li>
									<li><textarea name='texta' placeholder='Enter the post' id='ta'  class="field-style"></textarea></li>
									<li><input type="submit" value="Post!"> </li>
									
								<li><input type='button' value="end" onclick='toggleOverlay()'></li>
									</ul>
								</form>
							</div>
							
							
					
		</div>
		
		<div id='foot'>
			<p>Task 1<br/>Made with &#9829; | WhatTheTech</p>
		</div>
	</body>

</html>