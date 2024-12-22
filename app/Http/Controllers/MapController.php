<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MapController extends Controller
{
    public function index() {
        $svg = File::get(public_path('data/indonesia.svg'));
        return view('index', ['svg' => $svg]);
    }
}
