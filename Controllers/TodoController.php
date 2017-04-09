<?php

namespace App;

use Core\App;

class TodoController
{
    public function index()
    {
        $tasks = App::get('db')->table('todo')->all();

        require_once "views/todo.php";
    }

    public function add()
    {
        App::get('db')->table('todo')->insert([
            'title' => Request::get('title', '')
        ]);

        Request::back();
    }

    public function woops()
    {
        echo ":(";
    }
}