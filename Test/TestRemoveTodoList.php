<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

AddTodolist("Gilang");
AddTodolist("Aditya");
AddTodolist("Ganteng");

ShowTodoList();

RemoveTodoList(1);

ShowTodoList();

$sucess = RemoveTodoList(5);
var_dump($sucess);