<?php

$curl = curl_init();
include("../secrets.php");

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.themoviedb.org/3/movie/729720/videos?api_key=' . API_KEY,
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

echo "\n\n>>> response:\n\n" . $response;

// Backup results to a tmp file
$file = 'tmp';
$content = $response;
file_put_contents($file, $content);

// Find the trailer if there is any
foreach (json_decode($response)->results as $result) {
    if ($result->type == "Trailer" ){
        // Check the result and its contents
        // echo json_encode($result);

        $trailer_url = 'https://www.youtube.com/watch?v=' . $result->key;
        echo "\n\n>>>" . $trailer_url . "\n\n";

        $embed_html = '<iframe src="https://www.youtube.com/embed/' . $result-> key . '" frameborder="0" width="100%" height="100%" allowfullscreen></iframe>';
        echo "Embed via:\n\n" . $embed_html . "\n\n";

    }
}
?>