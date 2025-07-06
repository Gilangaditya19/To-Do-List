<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodolist.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function ViewShowTodoList() {
    while(true){
    ShowTodoList() . PHP_EOL;
    
    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar Aplikasi" . PHP_EOL;

    $pilihan = input("Pilih");

    if($pilihan == 1) {
        ViewAddTodoList();
    } else if($pilihan == 2) {
        ViewRemoveTodoList();
    } else if(strtolower($pilihan) == "x") {
        break;
    } else {
        echo "Pilihan Tidak dimengerti" . PHP_EOL;
    }
}
echo "Sampai Jumpa Lagi" . PHP_EOL;
}