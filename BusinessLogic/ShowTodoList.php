<?php

// Menampilkan to do list

function ShowTodoList() {
    global $todoList;

    echo "TO DO LIST" .PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number . $value" . PHP_EOL;
    }
}