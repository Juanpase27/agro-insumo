@extends('layouts.template')

@section('title', 'Update: ' . $supply->name)

@section('content')

    <div class="row" style="margin: 0px">
        <div class="col-3">
            <a href="{{ route('supplies.index') }}" style="color: #959595; ">
                < Volver</a>
        </div>
        <div class="col-6">
            <h1>Actualizacion del insumo</h1>
        </div>
    </div>
    <p>Acontinuacion debes ingresar los campos a los cuales deseas actualizar de este producto</p>

    <form action="{{ route('supplies.update', $supply) }}" method="post">
        <div class="container mb-5 d-flex justify-content-center">
            <div class="px-1 py-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                @method('put')
                                <p style="text-align: initial">Nombre:
                                <p>
                                <div class="input-group">
                                    @csrf
                                    <input class="form-control" type="text" placeholder="Escribe tu nombre"
                                        name="name" value="{{ old('name', $supply->name) }}">
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
                                    <input class="form-control" type="text" placeholder="Descripción..."
                                        name="description" value="{{ old('description', $supply->description) }}">
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

                                    <select class="form-select"name="categorySupply_id">
                                        @foreach ($supplyCategory as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $supply->categorySupply_id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <div class="mx-auto w-75">
                    @if (session('success'))
                        <div class="alert alert-success" id="successMessage">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

                <script>
                    // Función para ocultar el mensaje después de 5 segundos
                    function ocultarMensaje() {
                        var successMessage = document.getElementById('successMessage');
                        if (successMessage) {
                            successMessage.style.display = 'none';
                        }
                    }

                    // Configurar el temporizador para ocultar el mensaje después de 5 segundos
                    setTimeout(ocultarMensaje, 2300); // 5000 milisegundos = 5 segundos
                </script>
            </div>
        </div>
    </form>





@endsection
