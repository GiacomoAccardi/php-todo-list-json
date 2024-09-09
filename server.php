<?php

    $fromJson = file_get_contents("./data/to-do-list.json");
    $todolist = json_decode($fromJson);

    if(isset($_POST['todoItem'])){
        $todo_item = $_POST['todoItem'];
        ARRAY_PUSH($todolist, $todo_item);
        

        file_put_contents('./data/to-do-list.json', json_encode($todolist));
    }

    header('content-type: application/json');
    echo json_encode($todolist);
    

?>