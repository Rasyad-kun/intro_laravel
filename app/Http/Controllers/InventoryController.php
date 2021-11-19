<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
