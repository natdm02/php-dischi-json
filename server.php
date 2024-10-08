<?php


$dischiJson = file_get_contents('dischi.json');
$dischi = json_decode($dischiJson, true);


$result = $dischi;




header('Content-Type: application/json');
echo json_encode($dischi);
?>