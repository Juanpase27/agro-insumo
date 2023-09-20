@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <h1>Página de inicio de la categoria del producto :D</h1>
    <a href="{{route('product_categories.create')}}">Crear producto</a>
    {{-- 
    <a href="{{route('product.update')}}/25">Actualizar producto</a>
    <a href="{{route('product.delete')}}/25">Crear producto</a> 
    --}}
    <ul>
        @foreach ($productCategory as $item)
            <li><a href="{{route('product_categories.show', $item)}}">{{$item->name}}</a></li>
            {{route('product_categories.show', $item->slug)}}
        @endforeach
    </ul>
    {{$productCategory->links()}}
@endsection