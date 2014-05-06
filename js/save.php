<?php
header('Content-type: application/json');
$json = file_get_contents('php://input');

$save = file_put_contents('data.json', $json);
echo json_encode(array(
    'result' => $save
));
?>
