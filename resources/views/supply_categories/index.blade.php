@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <h1>Página de inicio de la categoria del insumo :D</h1>
    <a href="{{route('supply_categories.create')}}">Crear insumo</a>
    {{-- 
    <a href="{{route('product.update')}}/25">Actualizar producto</a>
    <a href="{{route('product.delete')}}/25">Crear producto</a> 
    --}}
    <ul>
        @foreach ($supplyCategory as $item)
            <li><a href="{{route('supply_categories.show', $item)}}">{{$item->name}}</a></li>
            {{route('supply_categories.show', $item->slug)}}
        @endforeach
    </ul>
    {{$supplyCategory->links()}}
@endsection