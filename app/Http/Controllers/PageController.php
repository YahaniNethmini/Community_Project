<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function items()
    {
        $items = Item::all();
        return view('pages.items', compact('items'));
    }
}
