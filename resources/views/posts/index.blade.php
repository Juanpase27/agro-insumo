@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <h1>Prueba Posts</h1>
    @foreach ($posts as $post)
        <article>
            {{ $post }}
        </article>
    @endforeach
@endsection
