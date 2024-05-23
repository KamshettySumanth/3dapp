<?php

error_reporting(E_ALL | E_STRICT);
// Set the content type to text/html
header("Content-Type: text/html");

$dir = "../assignment/application/assets/images/Gallery"; // Specify the correct path to your images folder
$valid_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp']; // Valid image extensions

// Check if the thumbnails folder exists, if not create it
$thumbs_dir = $dir . "/thumbs";
if (!file_exists($thumbs_dir)) {
    mkdir($thumbs_dir, 0777, true);
}

$images = glob($dir . "/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);

echo "<div id='gallery'>";

foreach ($images as $image) {
    $extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($extension, $valid_extensions)) {
        $basename = basename($image);
        $thumbnail = "$thumbs_dir/$basename";

        // Create a thumbnail if it doesn't exist
        if (!file_exists($thumbnail)) {
            createThumbnail($image, $thumbnail, $extension);
        }

        echo "<div class='gallery-item'>";
        echo "<img src='$thumbnail' data-full='$image' class='thumbnail' />";
        echo "</div>";
    }
}

echo "</div>";

// Function to create a thumbnail
function createThumbnail($image, $thumbnail, $extension) {
    $thumbnail_width = 600;
    $thumbnail_height = 600;

    list($width, $height) = getimagesize($image);
    $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);

    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            $source = imagecreatefromjpeg($image);
            break;
        case 'png':
            $source = imagecreatefrompng($image);
            break;
        case 'gif':
            $source = imagecreatefromgif($image);
            break;
    }

    imagecopyresized($thumb, $source, 0, 0, 0, 0, $thumbnail_width, $thumbnail_height, $width, $height);

    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($thumb, $thumbnail);
            break;
        case 'png':
            imagepng($thumb, $thumbnail);
            break;
        case 'gif':
            imagegif($thumb, $thumbnail);
            break;
    }
}
?>
