@extends('layouts.master')

@section('title', 'Index Page')

@section('content')
    <h1>Product Page</h1>
    @foreach ($products as $product)
        <li>{{$product->name}}</li>
    @endforeach
@endsection