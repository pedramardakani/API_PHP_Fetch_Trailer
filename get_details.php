<?php

include("../secrets.php");

define("MOVIE_ID", 729720);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.themoviedb.org/3/movie/' . MOVIE_ID . '&language=en-US?api_key=' . API_KEY,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

// Just a backup
$file = 'tmp';
$content = $response;
file_put_contents($file, $content);

// $content = unserialize(file_get_contents($file));

?>