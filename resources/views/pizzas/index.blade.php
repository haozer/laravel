@extends('layouts.layout')

@section('title')
Pizza - {{ $name }}
@endsection

@section('body')
<h1>Pizzas List</h1>

@if(session()->get( 'msg' ))
    <div class="alert alert-success" role="alert">
        {{ session()->get( 'msg' ) }}
    </div>
@endif

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Base</th>
            <th scope="col">Price</th>
            <th scope="col">Toppings</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pizzas as $pizza)
            <tr>
                <td>{{ $pizza['id'] }}</td>
                <td><a href="/pizzas/{{ $pizza['name'] }}">{{ $pizza['name'] }}</a></td>
                <td>{{ $pizza['type'] }}</td>
                <td>{{ $pizza['base'] }}</td>
                <td>{{ $pizza['price'] }}</td>
                <td>
                    @if($pizza['toppings'])
                        @foreach($pizza['toppings'] as $topping)
                            {{ $topping }}
                        @endforeach
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="title m-b-md">
    <img src="/img/malm2.jpg" width="200" />
    <p>{{ $age }}</p>
</div>
@endsection