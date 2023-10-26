@extends('layouts.template')

@section('title', 'Update: '.$supplyCategory->name)

@section('content')
    <div class="row" style="margin: 0px">
        <div class="col-3">
            <a href="{{route('supply_categories.index')}}"  style="color: #959595; "> < Volver</a>
        </div>
        <div class="col-6">
            <h1>Actualizacion del isumo</h1>
        </div>
    </div>
    <p>A continuacion debes ingresar los campos a los cuales deseas actualizar de este insumo</p>

    <form action="{{route('supply_categories.update', $supplyCategory)}}" method="post">
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
                                    <input class="form-control" type="text" placeholder="Escribe tu nombre"  name="name"  value="{{old('name', $supplyCategory->name)}}"> </div>
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
                                    <input class="form-control" type="text" placeholder="Descripción..."  name="description"  value="{{old('description', $supplyCategory->description)}}"> </div>
                                @error('description')
                                    <small>*{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" >Actualizar</button>
                <div class="mx-auto w-75">

                    @if (session('success'))
                        <div class="alert alert-success" id="successMessage">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </form>
@endsection



