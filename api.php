<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.themoviedb.org/3/movie/upcoming?page=1&language=en-US&api_key=0120d3869761b80d42104843b9f872e4",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{}",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


if ($err) {
  echo "cURL Error #:" . $err;
} 


$arrayOfNames = [];
$arrayOdDates = [];
$arrayOfImagePath = [];



$data = json_decode($response,true);

//var_dump($data['results'][0]['poster_path']);
$baseURL = "http://image.tmdb.org/t/p/w500/";
$imagePath =$baseURL.$data['results'][0]['poster_path'];
//echo $imagePath;


// tittle original_title
// date   release_date


for($i=0;$i<sizeof($data['results']);$i++)
{

$arrayOfNames[$i]=$data['results'][$i]['original_title'];
$arrayOdDates[$i]=$data['results'][$i]['release_date'];
$arrayOfImagePath[$i]=$baseURL.$data['results'][$i]['poster_path'];
}


echo '<script>';
echo 'var names = ' . json_encode($arrayOfNames) . ';';
echo 'var dates = ' . json_encode($arrayOdDates) . ';';
echo 'var image = ' . json_encode($arrayOfImagePath) . ';';
echo 'var sizeOfArray = '.sizeof($data['results']).';';
echo '</script>';





