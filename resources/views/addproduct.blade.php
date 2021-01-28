@extends('layout')


@section('contenu')

<form action="/addproduct" method="post">

    {{ csrf_field() }}

    <input type="name" name="name" placeholder="Nom">
    <input type="text" name="decription" placeholder="description">
    <input type="text" name="price" placeholder="prix">
    <input type="submit" value="enregistrer">
</form>


@endsection