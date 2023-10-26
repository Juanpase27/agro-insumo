@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <script>
        function redirectToCreatePage() {
            var createRoute = "{{ route('supplies.create') }}";
            window.location.href = createRoute;
        }
    </script>
    <h1 class="font-color-titles">Insumos disponibles</h1>
    <p>Aca encontraras todos los insumos que haz creado.</p>
    <button type="button" class="btn btn-primary" onclick="redirectToCreatePage()">Agregar insumo</button>
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
    <div class="container mt-5 mb-3">
        <div class="row">
            @foreach ($supply as $item)
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
                            <div class="mt-3"> <a href="{{ route('supplies.show', $item) }}"
                                    style="color: #317533;  text-decoration: underline;">Conocer mas</a> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-body">
            {{ $supply->links() }}
        </div>
    </div>
@endsection
