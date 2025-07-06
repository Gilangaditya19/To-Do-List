<?php

require "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodolist("Gilang");
AddTodolist("Aditya");
AddTodolist("Ganteng");

ShowTodoList();

ViewRemoveTodoList();

ShowTodoList();

