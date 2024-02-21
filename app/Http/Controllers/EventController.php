<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Matheus";

        $arr = ["Ana","Julia", "Maria", "Marcos"];
        return view('welcome', ['nome' => $nome, 'pessoas' => $arr]);
    }

    public function create(){
        return view('events.create');
    }
}
