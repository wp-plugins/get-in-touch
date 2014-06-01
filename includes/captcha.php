<?php
session_start();

header("Content-Type: image/png");
 
// start image canvas
$image = @imagecreate(85, 34) or die("Could not create image!");
 
// allocate colors
imagecolorallocate($image,200,200,200);
$color_black = imagecolorallocate($image,0,0,0);
 
// generate random string and add it to the image
$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';
 
for ($i = 0; $i < 7; $i++)
{
	$randomString .= $chars[rand(0, strlen($chars)-1)];
}	

$random_string = strtolower( $randomString );
$_SESSION['git_captcha'] = $random_string;
 
imagestring($image, 6, 10, 5,  $random_string, $color_black);
 
// output image and free up memory
imagepng($image);
imagedestroy($image);
?>