@extends('layouts.app')

@section('title')
Details
@endsection

@section('content')
<div class="container">
    <h1>{{ $id }}</h1>
    @if($pizza)
        <p>ID: {{ $pizza['id'] }}</p>
        <p>Name: {{ $pizza['name'] }}</p>
        <p>Type: {{ $pizza['type'] }}</p>
        <p>Base: {{ $pizza['base'] }}</p>
        <p>Price: {{ $pizza['price'] }}</p>
        <p>Toppings: 
            @if($pizza['toppings'])
                @foreach($pizza['toppings'] as $topping)
                    {{ $topping }}
                @endforeach
            @endif
        </p>
        <p>
            <form action="/pizzas/{{ $pizza['id'] }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" />
            </form>
        </p>
    @else
        <p>Cannot find pizza using {{ $id }}</p>
    @endif
    <div class="title m-b-md">
        <img src="/img/malm1.jpg" width="200" />
    </div>
</div>
@endsection