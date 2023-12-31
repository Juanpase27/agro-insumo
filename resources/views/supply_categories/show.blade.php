@extends('layouts.template')

@section('title', 'Show ' . $supplyCategory->name)

@section('content')

    <script>
        function redirectToUpdatePage(productId) {
            var updateRoute = "{{ route('supply_categories.edit', ':id') }}";
            updateRoute = updateRoute.replace(':id', productId);
            window.location.href = updateRoute;
        }
    </script>
    <div class="row" style="margin: 0px">
        <div class="col-3">
            <a href="{{ route('supply_categories.index') }}" style="color: #959595; ">
                < Volver</a>
        </div>
        <div class="col-6">
            <h1>Informacion de la categoría del insumo</h1>
        </div>
    </div>
    <p>A continuación podrás encontrar toda la información suminstrada por la categoría del insumo seleccionado:</p>
    <div class="col-md-12 mt-4">
        <div class="card p-3 mb-2" style="margin: 0 18%">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                    <div class="ms-2 c-details">
                        <h6 class="mb-0">ID: {{ $supplyCategory->id }}</h6>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4 class="heading">Nombre: {{ $supplyCategory->name }}</h4>
                <div class="mt-3"> <span class="text1">Descripcion: {{ $supplyCategory->description }}</span> </div>
                <div class="mt-3"></div>
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn mt-3" onclick="redirectToUpdatePage({{ $supplyCategory->id }})"
                        style="border-color:#093064">Actualizar</button>
                </div>
                <div class="col-6">
                    <form action="{{ route('supply_categories.destroy', $supplyCategory) }}" method="POST">
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
    </form>
@endsection
