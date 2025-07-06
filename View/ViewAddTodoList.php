<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodolist.php";

function ViewAddTodoList() {
    echo "Tambah Todo List" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == "x") {
       echo "Batal Menambahkan Todo";
    } else {
        AddTodolist($todo);
    }
}