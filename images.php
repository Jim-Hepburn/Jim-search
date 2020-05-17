<?php
$x=array("./images/1.jpg","./images/2.jpg","./images/3.jpg","./images/4.jpg");
header('Content-Type:image/png');
echo (file_get_contents($x[rand(0,3)]));
?>