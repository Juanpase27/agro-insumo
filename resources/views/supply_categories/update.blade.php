@extends('layouts.template')

@section('title', 'Update: '.$supplyCategory->name)

@section('content')
    <h1>Update</h1>
    <a href="{{route('supply_categories.index')}}">volver</a>
    <br>
    <p>{{$supplyCategory}}</p>
    <form action="{{route('supply_categories.update', $supplyCategory)}}" method="post">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $supplyCategory->name)}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripción:
            <input type="text" name="description" value="{{old('description', $supplyCategory->description)}}">
        </label>
        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection



