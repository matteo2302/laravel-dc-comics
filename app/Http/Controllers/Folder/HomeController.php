<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $fumetti = config('fumetti');
        return view('layout.main', compact('fumetti'));
    }
    public function inedx()
    {
        $fumetti = config('fumetti');
        return view('header', compact('fumetti'));
    }
    public function show()
    {
        $fumetti = config('fumetti');
        return view('card', compact('fumetti'));
    }
    public function create()
    {
        $fumetti = config('fumetti');
        return view('add', compact('fumetti'));
    }
    // public function store()
    // {
    //     $fumetti = config('fumetti');
    //     return view('card', compact('fumetti'));
    // }
}
