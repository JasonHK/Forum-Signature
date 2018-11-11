<?php
    //=========================================================================
    // SIGNATURE RESPONSES FOR FORUM-SIGNATURE
    //=========================================================================

    include "images.php";

    $randomNumber = rand(0, count($_IMAGES) - 1);
    $selectedImage = $_IMAGES[$randomNumber];

    if (file_exists($selectedImage["IMAGE_PATH"])) {
        $contentType = mime_content_type($selectedImage["IMAGE_PATH"]);
        $contentLength = filesize($selectedImage["IMAGE_PATH"]);

        // If the HTTP_REFERER was missing, the system will use the $defaultReferer hash instead.
        $defaultReferer = md5("default-referer");
        $hashedReferer = md5($_SERVER["HTTP_REFERER"]) ?? $defaultReferer;
        $hashedName = md5($selectedImage["SHORT_NAME"]);

        // If the MIME type of the file does not match the list, the request will be rejected.
        if (!in_array($contentType, $_MIME["IMAGE"])) {
            header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
            echo "<h1>500 Internal Server Error</h1>";
        }

        setcookie($defaultReferer, $hashedName);
        setcookie($hashedReferer, $hashedName);
        header("Content-Type: " . $contentType);
        header("Content-Length: " . $contentLength);
        readfile($selectedImage["IMAGE_PATH"]);
    } else {
        // Request was rejected as the system unable to find the image listed in the configuration.
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        echo "<h1>404 Not Found</h1>";
    }
?>