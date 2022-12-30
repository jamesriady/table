<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Selling;

class Home extends Controller
{
    public function index()
    {
        return view('home.index', [
            'home' => 'HOME',
            'selling' => Selling::all(),
            'cost' => Cost::all(),
        ]);
    }
}
