@extends('layouts.template')

@section('title', 'Show ' . $productCategory->name)

@section('content')
    <script>
        function redirectToUpdatePage(categoryId) {
            var updateRoute = "{{route('product_categories.edit', ':id') }}";
            updateRoute = updateRoute.replace(':id', categoryId);
            window.location.href = updateRoute;
        }
    </script>
    <div class="row" style="margin: 0px">
        <div class="col-3">
            <a href="{{ route('product_categories.index')}}"  style="color: #959595; "> < Volver</a>
        </div>
        <div class="col-6">
            <h1>Informacion de la categoria</h1>
        </div>
    </div>

    <p>Acontinuacion podras encontraras toda la informacion suminstrada por el producto seleccionado:</p>
    <div class="col-md-12 mt-4">
        <div class="card p-3 mb-2" style="margin: 0 18%">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                    <div class="ms-2 c-details">
                        <h6 class="mb-0">ID: {{ $productCategory->id }}</h6>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="heading">Nombre: {{ $productCategory->name }}</h4>
                <div class="mt-3"> <span class="text1">slug: {{ $productCategory->slug }}</span> </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn mt-3" onclick="redirectToUpdatePage({{ $productCategory->id }})" style="border-color:#093064">Actualizar</button>
                </div>
                <div class="col-6">
                    <form action="{{ route('product_categories.destroy', $productCategory) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete()">Eliminar</button>
                        <script>
                            function confirmDelete() {
                                if (confirm("¿Estás seguro de que deseas eliminar este elemento?")) {
                                    // Si el usuario confirma, envía el formulario para eliminar el elemento
                                    document.forms[0].submit();
                                } else {
                                    // Si el usuario cancela, no se hace nada
                                }
                            }
                        </script>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
