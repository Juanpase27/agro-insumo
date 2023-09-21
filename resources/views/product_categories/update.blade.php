@extends('layouts.template')

@section('title', 'Update: '.$productCategory->name)

@section('content')
    <div class="row" style="margin: 0px">
        <div class="col-3">
            <a href="{{route('product_categories.index')}}"  style="color: #959595; "> < Volver</a>
        </div>
        <div class="col-6">
            <h1>Actualizacion del producto</h1>
        </div>
    </div>
    <p>Acontinuacion debes ingresar los campos a los cuales deseas actualizar de este producto</p>

    <form action="{{route('product_categories.update', $productCategory)}}" method="post">
        <div class="container mb-5 d-flex justify-content-center">
            <div class="px-1 py-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                @method('put')
                                <p style="text-align: initial">Nombre:<p>
                                <div class="input-group">
                                @csrf
                                    <input class="form-control" type="text" placeholder="Escribe tu nombre"  name="name"  value="{{ old('name', $productCategory->name) }}"> </div>
                                @error('name')
                                    <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-4">
                            <div class="form-group">
                                <p style="text-align: initial">Descripción:<p>
                                <div class="input-group">
                                @csrf
                                    <input class="form-control" type="text" placeholder="Descripción..."  name="description" value="{{ old('description', $productCategory->description) }}"> </div>
                                @error('description')
                                    <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" >Actualizar</button>
            </div>
        </div>
    </form>
@endsection



