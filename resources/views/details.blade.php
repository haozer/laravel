@extends('layouts.layout')

@section('title')
Details
@endsection

@section('body')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>Details</h1>
            <p>{{ $id }}</p>
        </div>
        <div class="title m-b-md">
            <img src="/img/malm1.jpg" width="400" />
        </div>
    </div>
</div>
@endsection