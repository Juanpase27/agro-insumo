@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <h1>Página de inicio del insumo :D</h1>
    <a href="{{route('supplies.create')}}">Crear producto</a>
    {{-- 
    <a href="{{route('product.update')}}/25">Actualizar producto</a>
    <a href="{{route('product.delete')}}/25">Crear producto</a> 
    --}}
    <ul>
        @foreach ($supply as $item)
            <li><a href="{{route('supplies.show', $item)}}">{{$item->name}}</a></li>
            {{route('supplies.show', $item->slug)}}
        @endforeach
    </ul>
    {{$supply->links()}}
@endsection