<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = [
            '0' => [
                'id' => 1,
                "tasktitle" => "Tao database",
                "content" => "Tao database Php My Admin",
                "create" => "02-05-2018",
                "duedate" => "03-05-2018"
            ],

            '1' => [
                'id' => 2,
                "tasktitle" => "Tao column",
                "content" => "Tao column Php My Admin",
                "create" => "02-05-2018",
                "duedate" => "03-05-2018"
            ]
        ];
        return view('tasks.list', compact('tasks'));
    }
}
