<?php

namespace App;

class TodoController
{
    public function index()
    {
        global $queryBuilder;
        $tasks = $queryBuilder->table('todo')->all();

        require_once "views/todo.php";
    }

    public function add()
    {
        global $queryBuilder;

        $queryBuilder->table('todo')->insert([
            'title' => Request::get('title', '')
        ]);

        Request::back();
    }
}