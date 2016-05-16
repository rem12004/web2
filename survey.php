<?php
	session_start();
	if(isset($_SESSION['submitted'])){
		header('Location: results.php');
	}
?>

<!doctype html>

<html>

<head>

    <title>Movies</title>

    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

</head>

<body>

<div>

	<div>

	<h2>Which of these Movies was your favourite?</h2>

		<form action="results.php" method="post" >
  			<input type="radio" name="movie" value="I"> Star Wars: Episode I - The Phantom Menace <br />
  			<input type="radio" name="movie" value="II"> Star Wars: Episode II - Attack of the Clones <br />
  			<input type="radio" name="movie" value="III"> Star Wars: Episode III - Revenge of the Sith <br />
  			<input type="radio" name="movie" value="Spaceballs"> Spaceballs <br />
  			<input type="submit" value="Submit" name="submitSurvey">
  		</form>
		
		<a href="results.php">Results</a>
  	
	</div>

</div>

</body>

</html>