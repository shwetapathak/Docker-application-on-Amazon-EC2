<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Assignment 10</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="http://d3js.org/d3.v3.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	
    </head>

    <body>
	<div>
	<h3> Dynamic Visualization - Stacked bar-charts on time scale.</h3>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="submit" name="Submit" value="Get Chart" /><br><br>
		<h3> Dynamic Visualization - Collision Detection.</h3>
		<input type="submit" name="Collision" value="Collision Detection" />
	</form>
	<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
     if (isset($_POST['Submit']))
	 {
		 
            header('Location: barchart.php');
	 }
	 if (isset($_POST['Collision']))
	 {
		 
            header('Location: collision.php');
	 }
		}
	?>
    </body>

</html>
