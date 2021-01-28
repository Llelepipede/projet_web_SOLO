@extends('layout')


@section('contenu')
    @foreach($product as $product)
        {{$product->name}}
        {{$product->desciption}}
        {{$product->price}}

@endsection