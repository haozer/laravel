@extends('layouts.app')

@section('title')
Create
@endsection

@section('content')
<div class="container">
    <h1>Create</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="form-control" type="text" id="name" name="name" />
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select class="form-control" id="type" name="type">
                <option value="Margarita">Margarita</option>
                <option value="Hawaiian">Hawaiian</option>
                <option value="Veg Supreme">Veg Supreme</option>
                <option value="Volcano">Volcano</option>
            </select>
        </div>
        <div class="form-group">
            <label for="base">Base:</label>
            <select class="form-control" id="base" name="base">
                <option value="Cheesy Crust">Cheesy Crust</option>
                <option value="Garlic Crust">Garlic Crust</option>
                <option value="Thin & Crispy">Thin & Crispy</option>
                <option value="Thick">Thick</option>
            </select>
        </div>
        <div class="form-group">
            <label for="toppings">Toppings:</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="toppings[]" value="Mushrooms">
                <label class="form-check-label" for="toppings">Mushrooms</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="toppings[]" value="Peppers">
                <label class="form-check-label" for="toppings">Peppers</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="toppings[]" value="Garlic">
                <label class="form-check-label" for="toppings">Garlic</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="toppings[]" value="Olives">
                <label class="form-check-label" for="toppings">Olives</label>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Order Pizza</button>
        </div>
    </form>

    <div class="title m-b-md">
        <img src="/img/malm3.jpg" width="200" />
    </div>
</div>
@endsection