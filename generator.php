<?php 

include('./geojson2image/GeoJSON2Image.php');

$max_size = 400;
$json = json_decode(file_get_contents('php://input'));

$ret = new GeoJSON2Image($json, $max_size);

$ret->boundry = array(100, 120, 100, 120); // array(min_x, max_x, min_y, max_y) boundry
// $ret->draw('./image.png');   // GD Image object
$ret->draw();   // GD Image object

?>