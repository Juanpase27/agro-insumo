@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <script>
        function redirectToCreatePage() {
            var createRoute = "{{ route('supply_categories.create') }}";
            window.location.href = createRoute;
        }
    </script>
    <h1 class="font-color-titles">Categorias de insumos disponibles</h1>
    <p>Aca encontraras todas las categorias de insumos que haz creado.</p>
    <button type="button" class="btn btn-primary" onclick="redirectToCreatePage()">Crear categoría de insumo</button>
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
    {{--
    <a href="{{route('product.update')}}/25">Actualizar producto</a>
    <a href="{{route('product.delete')}}/25">Crear producto</a>
    --}}
    <div class="container mt-5 mb-3">
        <div class="row">
            @foreach ($supplyCategory as $item)
                <div class="col-md-4">
                    <div class="card p-3 mb-2"  style="border-color: #2c1b19">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                                <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                                <div class="ms-2 c-details">
                                    <h6 class="mb-0">{{ $item->created_at }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h4 class="heading" style="color:#317533; font-weight: bold;">{{ $item->name }}</h4>
                            <div class="mt-3"> <a href="{{ route('supply_categories.show', $item) }}"
                                    style="color: #317533;  text-decoration: underline;">Conocer mas</a> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-body">
            {{ $supplyCategory->links() }}
        </div>
    @endsection
