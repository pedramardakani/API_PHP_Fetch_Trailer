
# Table of Contents

1.  [Minimal PHP code to retrieve movie trailer links from TMDb API](#orgdcc75b6)


<a id="orgdcc75b6"></a>

# Minimal PHP code to retrieve movie trailer links from TMDb API

*This example code uses the TMDb API but is not endorsed or certified by TMDb.*

1.  Subscribe to [TMDb](https://www.themoviedb.org/signup) with a valid email address

2.  Get the [API validation](https://developers.themoviedb.org/3/getting-started/introduction) key

3.  Read [terms-of-use](https://www.themoviedb.org/documentation/api/terms-of-use)

4.  [Authenticate](https://developers.themoviedb.org/3/authentication/how-do-i-generate-a-session-id) the api

5.  Use the [manual](https://developers.themoviedb.org/3/movies/get-movie-details)

6.  Add the video ID like this:

    `https://www.youtube.com/watch?v={{video_id}}`

7.  Check if PHP `cURL` is available already `curl --version` if not,
    just [Configure curl](https://www.php.net/manual/en/book.curl.php) on machine

8.  Use the `cURL` [documentation](https://www.php.net/manual/en/curl.examples-basic.php) to write a simple script

9.  Get the trailer link via TMDb API

10. Embed youtube trailer of the movie like this:

        <?php
        // A simple example key:
        $trailer_key = 'G4_ULVw5L04';
        $trailer_url = 'https://www.youtube.com/embed/' . $trailer_key;

        // Minimal iframe
        $embed_this = '<iframe src="' . $trailer_url . '"></iframe>';
        ?>
