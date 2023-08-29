<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('index', compact('comics'));
    }
    public function show(Comic $comic)
    {
        return view('card', compact('comic'));
    }
    public function create(Comic $comic)
    {
        return view('add', compact('comic'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
    }
    public function destroy(string $id)
    {
        Comic::destroy($id);
        return to_route('comics.index');
    }
}
