<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodolist("Gilang");
AddTodolist("Aditya");
AddTodolist("Hasna");

ViewAddTodoList();

ShowTodoList();

ViewAddTodoList();

ShowTodoList();