<?php
include 'api.php';
//$imagePath ="http://image.tmdb.org/t/p/w185/".$data['results'][0]['poster_path'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <link rel='stylesheet' href='fullcalendar.css' />
    <script src='jquery.js'></script>
    <script src='moment.js'></script>
    <script src='fullcalendar.js'></script>

	<link rel="stylesheet" href="style.css">


</head>
<body>
    

<div id="calendar">



</div>




<?php
include 'api.php';
for($i=0;$i<sizeof($data['results']);$i++)
{

    echo "<img src=". $baseURL.$data['results'][$i]['poster_path'].">";
    echo "<br>";

    echo "<p class ='info'>".$data['results'][$i]['original_title']."</p";
    echo "<br>";

    echo "<p class='info'>".$data['results'][$i]['release_date']."</p>";
    echo "<br>";


}






?>
    <script src='logic.js'></script>


</body>
</html>