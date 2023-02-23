<?php


$file_text = file_get_contents('./database.json');
$todo_list = json_decode($file_text);


$newTodo = $_POST[ 'todo'];

$todo_list[] = $newTodo;





$newTodoEncoded = json_encode($todo_list );

file_put_contents('database.json', $newTodoEncoded);


$response = [
    'success' => true,
    'message' => 'OK',
    'code'=> 200,
    'todo'=> $newTodo,
];



header('Content-Type: application/json');

echo json_encode($response);
