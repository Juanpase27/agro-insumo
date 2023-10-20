@extends('layouts.template')

@section('title', 'Contáctanos')
@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        <br>
        <label for="">
            Correo:
            <br>
            <input type="email" name="email" value="{{old('email')}}">
        </label>
        <br>
        <label for="">
            Mensaje:
            <br>
            <textarea name="message" id="" cols="30" rows="10" value="{{old('message')}}"></textarea>
        </label>
        <br>
        <button type="submit" class="btn btn-success">{{ __('Send') }}</button>
    </form>
@endsection
