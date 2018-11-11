<?php
    //=========================================================================
    // SIGNATURE REDIRECT FOR FORUM-SIGNATURE
    //=========================================================================

    include "images.php";

    // If the HTTP_REFERER was missing, the system will use the $defaultReferer hash instead.
    $defaultReferer = md5("default-referer");
    $hashedReferer = md5($_SERVER["HTTP_REFERER"]) ?? $defaultReferer;
    $requiredHash = $_COOKIE[$hashedReferer] ?? null;

    // When the system finds the correct short name, it will redirect to the corresponding URL.
    foreach ($_IMAGES as &$_IMAGE) {
        $hashedName = md5($_IMAGE["SHORT_NAME"]);
        if ($hashedName == $requiredHash) {
            header("Location: " . $_IMAGE["FORWARD_URL"], true, 302);
            exit();
        }
    }

    // If the requested short name not exist, the system will reject the request.
    header($_SERVER["SERVER_PROTOCOL"] . " 400 Bad Request");
    echo "<h1>400 Bad Request</h1>";
?>