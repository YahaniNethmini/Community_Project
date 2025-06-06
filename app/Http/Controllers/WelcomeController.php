<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display the welcome page with items.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        // Fetch all items from the database
        $items = Item::all();

        // You can also limit the number of items or add conditions
        // $items = Item::take(8)->get(); // Get only 8 items
        // $items = Item::where('stock_quantity', '>', 0)->get(); // Only items in stock

        return view('welcome', compact('items'));
    }
}
