<?php

$file = "tmp";
$content = file_get_contents($file);
$test = json_decode($content); // returns a json object

// echo $content;
echo "\n";

foreach ($test->results as $result) {
    if ($result->type == "Trailer" ){
        // echo json_encode($result);
        $trailer_url = 'https://www.youtube.com/watch?v=' . $result->key;
        echo "\n\n>>>" . $trailer_url . "\n\n";
        echo "Embed via:\n\n" . '<iframe src="https://www.youtube.com/embed/' . $result-> key . '" frameborder="0" width="100%" height="100%" allowfullscreen></iframe>';
    }
}

?>