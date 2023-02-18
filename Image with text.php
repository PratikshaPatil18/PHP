<?php

// Create the size of image or blank image
$image = ImageCreate(500, 300);

// Set the background color of image
$background_color = ImageColorAllocate($image, 0, 153, 0);

// Set the text color of image
$text_color = ImageColorAllocate($image, 255, 255, 255);

// Function to create image which contains string.
imagestring($image, 5, 180, 100, "GeeksforGeeks", $text_color);
imagestring($image, 3, 160, 120, "A computer science portal", $text_color);

header("Content-Type: image/png");

imagepng($image);
imagedestroy($image);

?>
