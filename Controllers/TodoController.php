<?php

namespace App;

use Core\App;
use Core\Request;

class TodoController
{
    public function index()
    {
        $tasks = App::get('db')->table('taskList')->all();

        require_once "views/todo.php";
    }

    public function add()
    {
        App::get('db')->table('taskList')->insert([
            'title' => Request::get('title', '')
        ]);

        Request::back();

    }

    public function woops()
    {
        echo ";)";
        echo ":("; 
    }
}