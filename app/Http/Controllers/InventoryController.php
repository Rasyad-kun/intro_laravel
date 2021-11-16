<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('inventory', [
            "title"     => "Inventory",
            "inventory" => Inventory::all()
        ]);
    }

    public function show($link)
    {
        return view('post', [
            "title" => "Single Post",
            "post"  => Inventory::find($link)
        ]);
    }
}
