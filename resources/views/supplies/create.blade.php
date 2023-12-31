@extends('layouts.template')

@section('title', 'Create')

@section('content')
    <div class="row" style="margin: 0px">
        <div class="col-3">
            <a href="{{ route('supplies.index') }}" style="color: #959595; ">
                < Volver</a>
        </div>
        <div class="col-6">
            <h1>Crear insumo</h1>
        </div>
    </div>
    <p>Para poder agregar un insumo deber llenar estos campos
    <p>
    <form action="{{ route('supplies.store') }}" method="post">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="px-1 py-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <p style="text-align: initial">Nombre:
                                <p>
                                <div class="input-group">
                                    @csrf
                                    <input class="form-control @error('name') is-invalid @enderror"  type="text" placeholder="Escribe tu nombre"
                                        name="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                    <small class="error">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-4">
                            <div class="form-group">
                                <p style="text-align: initial">Descripción:
                                <p>
                                <div class="input-group">
                                    @csrf
                                    <input class="form-control @error('description') is-invalid @enderror"  type="text" placeholder="Descripción..."
                                        name="description" value="{{ old('description') }}">
                                </div>
                                @error('description')
                                    <small class="error">*{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-4">
                            <div class="form-group">
                                <p style="text-align: initial">Seleccione categoria:
                                <p>
                                <div class="input-group">
                                    <select class="form-select" name="categorySupply_id">
                                        @foreach ($supplyCategory as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
@endsection
