<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //
    public function index() {
        $name = request('name');

        // get data from database
        $pizzas = [
            ['type' => 'hawaiian', 
            'base' => 'cheesy crust',],
            ['type' => 'volcano', 
            'base' => 'garlic crust',],
            ['type' => 'veg supreme', 
            'base' => 'thin & crispy',],
            ['type' => 'Hao\'s special', 
            'base' => $name,],
        ];
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => $name,
            'age' => request('age'),
        ]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
