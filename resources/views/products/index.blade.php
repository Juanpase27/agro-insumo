@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <h1>Página de inicio del producto :D</h1>
    <a href="{{route('products.create')}}">Crear producto</a>
    {{-- 
    <a href="{{route('product.update')}}/25">Actualizar producto</a>
    <a href="{{route('product.delete')}}/25">Crear producto</a> 
    --}}
    <ul>
        @foreach ($products as $item)
            <li><a href="{{route('products.show', $item)}}">{{$item->name}}</a></li>
            {{route('products.show', $item->slug)}}
        @endforeach
    </ul>
    {{$products->links()}}
@endsection