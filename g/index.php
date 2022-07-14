<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$files = glob('../gachi/*');
if ($files) {
    $GACHI_NUM = count($files);
    $random_gachi_index = rand(1, $GACHI_NUM);

    $image_path = 'https://hikka-gallery.tk/gachi/'.$random_gachi_index.'.jpg';
} else {
    $image_path = null;
}
$data = ['image' => $image_path];

echo json_encode($data);
