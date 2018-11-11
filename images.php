<?php
    //=========================================================================
    // IMAGE CONFIGURATIONS FOR FORUM-SIGNATURE
    //=========================================================================

    //-------------------------------------------------------------------------
    // List of Allowed MINE Types
    //-------------------------------------------------------------------------
    // You can add or remove any of the MINE types down below, but we suggest 
    // you to only add "image/*" types as the response should contain images 
    // only.
    //-------------------------------------------------------------------------
    $_MIME = array(
        "IMAGE" => array(
            "image/bmp",
            "image/gif",
            "image/jpeg",
            "image/png",
            "image/webp"
        )
    );

    //-------------------------------------------------------------------------
    // List of Available Images
    //-------------------------------------------------------------------------
    // Modify the list below to add more images. Each image should include a 
    // local path, a short name, and a redirect URL.
    //
    // NOTE: The short name of the images MUST BE unique, otherwise will only 
    // redirect using the URL within the topmost entry with that short name.
    //-------------------------------------------------------------------------
    $_IMAGES = array(
        array(
            "IMAGE_PATH" => "images/dynamic.png",
            "SHORT_NAME" => "dynamic",
            "FORWARD_URL" => "https://www.google.com/"
        ),
        array(
            "IMAGE_PATH" => "images/testing.png",
            "SHORT_NAME" => "testing",
            "FORWARD_URL" => "https://github.com/"
        ),
        array(
            "IMAGE_PATH" => "images/imjasonhk.png",
            "SHORT_NAME" => "imjasonhk",
            "FORWARD_URL" => "https://en.wikipedia.org/"
        ),
        array(
            "IMAGE_PATH" => "images/pokemon.png",
            "SHORT_NAME" => "pokemon",
            "FORWARD_URL" => "https://duckduckgo.com/"
        ),
    );
?>