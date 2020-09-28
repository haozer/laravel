@extends('layouts.layout')

@section('title')
Pizza - {{ $name }}
@endsection

@section('body')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>Pizzas List</h1>
            @foreach($pizzas as $pizza)
                <p>{{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
            @endforeach

        </div>
        <div class="title m-b-md">
            <img src="/img/malm1.jpg" width="400" />
            <p>{{ $age }}</p>
        </div>
    </div>
</div>
@endsection