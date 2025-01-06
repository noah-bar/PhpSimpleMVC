<?php
namespace App\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index(): void
    {
        $this->render('todo/index', [
            'todos' => Todo::getAll()
        ]);
    }
}