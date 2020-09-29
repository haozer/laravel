<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PizzaController extends Controller
{
    /*
    public function __construct() {
        $this->middleware('auth');
    }
    */
    
    public function index() {
        // get data from database
        $pizzas = Pizza::all();
        //$pizzas = Pizza::latest()->get();
        //$pizzas = Pizza::orderBy('price', 'desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();

        /*$pizzas = [
            ['type' => 'hawaiian', 
            'base' => 'cheesy crust',],
            ['type' => 'Hao\'s special', 
            'base' => $name,],
        ];*/
        $name = request('name');

        return view('pizzas.index', [
            'pizzas' => $pizzas,
            'name' => $name,
            'age' => request('age'),
        ]);
    }

    public function show($id) {
        if (is_numeric($id)) {
            try {
                $pizza = Pizza::findOrFail($id);
            } catch (ModelNotFoundException $exception) {
                return redirect('/pizzas');
            }
        } else {
            $pizza = Pizza::where('name', 'LIKE', '%'.$id.'%')->first();
        }
        return view('pizzas.show', ['pizza' => $pizza, 'id' => $id]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {
        // save to DB
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->price = "£".number_format(rand(300, 500)/100, 2);
        $pizza->toppings = request('toppings');
        
        error_log("Saving: " . $pizza);
        $pizza->save();
        
        return redirect('/pizzas')->with(['msg' => 'Order created successfully']);
    }

    public function destroy($id) {
        // delete from DB
        try {
            $pizza = Pizza::findOrFail($id);

            error_log("Deleting: " . $id);
            $pizza->delete();

            return redirect('/pizzas')->with(['msg' => 'Deleted order number: '.$id]);
        } catch (ModelNotFoundException $exception) {
            return redirect('/pizzas')->with(['msg' => 'Could not find order number: '.$id]);
        }
    }
}
