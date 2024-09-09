<?php

    $fromJson = file_get_contents("./data/to-do-list.json");
    $todolist = json_decode($fromJson);

    header('content-type: application/json');
    echo json_encode($todolist);
    

?>