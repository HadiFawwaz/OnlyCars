<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Galeri;
use App\Models\Merchandise;

class HomeController extends Controller
{
    public function index()
{
    $events = Event::latest()->get();
    $galeris = Galeri::latest()->get();
    $merchandises = Merchandise::latest()->get();

    return view('home', compact('events', 'galeris', 'merchandises'));
}
}