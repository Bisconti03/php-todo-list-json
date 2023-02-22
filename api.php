<?php


$file_text = file_get_contents('./database.json');
$todo_list = json_decode($file_text);


header('Content-Type: application/json');

echo json_encode($todo_list);
?>