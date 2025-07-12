<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodoListView
    {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->ShowTodoList() . PHP_EOL;

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar Aplikasi" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == 1) {
                    $this->addTodolist();
                } else if ($pilihan == 2) {
                    $this->removeTodolist();
                } else if (strtolower($pilihan) == "x") {
                    break;
                } else {
                    echo "Pilihan Tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi" . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "Tambah Todo List" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal Menambahkan Todo";
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "Menghapus Todo" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

            if ($pilihan == "x") {
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }
    }
}
