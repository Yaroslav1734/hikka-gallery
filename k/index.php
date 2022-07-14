<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$files = glob('../kachki/*');
if ($files) {
    $KACHKI_NUM = count($files);
    $random_kachki_index = rand(1, $KACHKI_NUM);

    $image_path = 'https://hikka-gallery.tk/kachki/'.$random_kachki_index.'.jpg';
} else {
    $image_path = null;
}
$data = ['image' => $image_path];

echo json_encode($data);
