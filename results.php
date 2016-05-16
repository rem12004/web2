<?php 
  
  function results(){
    session_start();
    $_SESSION['submitted'] = true;
  }
  
  if(isset($_POST['submitSurvey'])){
    results();
  }

  $movie = $_POST["movie"];

  $filename = "results.txt";

  $file = fopen($filename, "a");
  
  $line = $movie . "\n";
  
  fwrite($file, $line);

  $fileContents = file_get_contents($filename);  
  
  file_put_contents($filename, $fileContents);
  
  fclose($file);

  $EIResult = (substr_count(strip_tags($fileContents),"I"));
  $EIIResult = (substr_count(strip_tags($fileContents),"II"));
  $EIIIResult = (substr_count(strip_tags($fileContents),"III"));
  $SBResult = (substr_count(strip_tags($fileContents),"Spaceballs"));
  
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
  
  <h3>Your favourite: <?php echo($movie) ?>movie</h3>
  
	  <ul>
        <li>Star Wars: Episode I - The Phantom Menace: <?php echo($EIResult) ?></li>
        <li>Star Wars: Episode II - Attack of the Clones: <?php echo($EIIResult) ?></li>
        <li>Star Wars: Episode III - Revenge of the Sith: <?php echo($EIIIResult) ?></li>
        <li>Spaceballs: <?php echo($SBResult) ?></li>
      </ul>
  
  </div>

  </div>

</body>

</html>