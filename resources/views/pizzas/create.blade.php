@extends('layouts.layout')

@section('title')
Create
@endsection

@section('body')
<h1>Create</h1>
<form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name" />
    <br />
    <label for="type">Type:</label>
    <select id="type" name="type">
        <option value="Margarita">Margarita</option>
        <option value="Hawaiian">Hawaiian</option>
        <option value="Veg Supreme">Veg Supreme</option>
        <option value="Volcano">Volcano</option>
    </select>
    <br />
    <label for="base">Base:</label>
    <select id="base" name="base">
        <option value="Cheesy Crust">Cheesy Crust</option>
        <option value="Garlic Crust">Garlic Crust</option>
        <option value="Thin & Crispy">Thin & Crispy</option>
        <option value="Thick">Thick</option>
    </select>
    <br />
    <fieldset>
        <label>Toppings:</label><br />
        <input type="checkbox" name="toppings[]" value="Mushrooms"> Mushrooms<br />
        <input type="checkbox" name="toppings[]" value="Peppers"> Peppers<br />
        <input type="checkbox" name="toppings[]" value="Garlic"> Garlic<br />
        <input type="checkbox" name="toppings[]" value="Olives"> Olives<br />
    </fieldset>
    <br />
    <input type="submit" value="Order Pizza" />
    <br />
    <br />
</form>
<div class="title m-b-md">
    <img src="/img/malm3.jpg" width="200" />
</div>
@endsection