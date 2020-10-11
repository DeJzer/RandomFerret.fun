<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$files = glob('../images/*');
if ($files) {
    $FERRET_NUM = count($files);
    $random_ferret_index = rand(1, $FERRET_NUM);

    $image_path = 'https://randomferret.fun/images/'.$random_ferret_index.'.jpg';
    $link = 'https://randomferret.fun/?i='.$random_ferret_index;
} else {
    $image_path = null;
    $link = null;
}
$data = ['image' => $image_path, 'link' => $link];

echo json_encode($data);
