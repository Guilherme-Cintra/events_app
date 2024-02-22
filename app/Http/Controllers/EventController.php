<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Log;


class EventController extends Controller
{
    public function index(){
   
        $events = Event::all();

        Log::info('Fetched events:', $events->toArray());
        return view('welcome',['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }
}
