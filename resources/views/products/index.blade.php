@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <script>
        function redirectToCreatePage() {
            var createRoute = "{{ route('products.create') }}";
            window.location.href = createRoute;
        }
    </script>
    <h1 class="font-color-titles">Productos disponibles</h1>
    <p>Aca encontraras todos los productos que haz creado.</p>
    <button type="button" class="btn btn-primary" onclick="redirectToCreatePage()">Agregar producto</button>
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
            @foreach ($products as $item)
                <div class="col-md-4">
                    <div class="card p-3 mb-2" style="border-color: #2c1b19">
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
                            <div class="mt-3"> <span class="text1">{{ $item->description }}</span> </div>
                            <div class="mt-3"> <a href="{{ route('products.show', $item) }}"
                                    style="color: #317533;  text-decoration: underline;">Conocer mas</a> </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>
        <br>
        <ul class="pagination pagination-md justify-content-center">
            <li class="page-item">
                <a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">{{ __('Previous') }}</a>
            </li>
            @for ($i = 1; $i <= $products->lastPage(); $i++)
                <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item">
                <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">{{ __('Next') }}</a>
            </li>
        </ul>
    </div>
@endsection
