<?php

$testo = file_get_contents('./data.json');

$phparray = json_decode($testo, true);

if(isset($_POST['todoItem'])){
    $todoItem = [
        "task" => $_POST['todoItem'],
        "done" => $_POST['done']
    ];
    array_push($phparray, $todoItem);

    file_put_contents('./data.json', json_encode(($phparray)));
}

header('Contant-Type: application/json');

echo json_encode($phparray);

?>