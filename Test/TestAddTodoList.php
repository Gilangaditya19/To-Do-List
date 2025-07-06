<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodolist.php";

AddTodolist("Gilang");
AddTodolist("Aditya");

var_dump($todoList);