@extends('layouts.template')

@section('title', 'Show ' . $product->name)

@section('content')
    <script>
        function redirectToUpdatePage(productId) {
            var updateRoute = "{{ route('products.edit', ':id') }}";
            updateRoute = updateRoute.replace(':id', productId);
            window.location.href = updateRoute;
        }

    </script>
    <div class="row" style="margin: 0px">
        <div class="col-3">
            <a href="{{route('products.index')}}"  style="color: #959595; "> < Volver</a>
        </div>
        <div class="col-6">
            <h1>Informacion del producto</h1>
        </div>
    </div>
    <p>Acontinuacion podras encontraras toda la informacion suminstrada por el producto seleccionado:</p>
    <div class="col-md-12 mt-4">
        <div class="card p-3 mb-2" style="margin: 0 18%">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                    <div class="ms-2 c-details">
                        <h6 class="mb-0">ID: {{ $product->id }}</h6>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="heading">Nombre: {{ $product->name }}</h4>
                <div class="mt-3"> <span class="text1">Descripcion: {{ $product->description }}</span> </div>
                <div class="mt-3"> <span class="text1"> Categoria:{{ $productCategory->name }}</span> </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn mt-3" onclick="redirectToUpdatePage({{ $product->id }})" style="border-color:#093064">Actualizar</button>
                </div>
                <div class="col-6">
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary mt-3" >Eliminar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
