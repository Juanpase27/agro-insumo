@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <script>
        function redirectToCreatePage() {
            var createRoute = "{{ route('products.create') }}";
            window.location.href = createRoute;
        }
    </script>
    <h1>Productos disponibles</h1>
    <p>Aca encontraras todos los productos que haz creado.</p>
    <button type="button" class="btn btn-primary" onclick="redirectToCreatePage()">Agregar producto</button>

    <div class="container mt-5 mb-3">
        <div class="row">
            @foreach ($products as $item)
            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">{{ $item->created_at }}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h4 class="heading">{{ $item->name }}</h4>
                        <div class="mt-3"> <span class="text1">{{ $item->description }}</span> </div>
                        <div class="mt-3"> <a href="{{route('products.show', $item)}}" style="color: #959595;  text-decoration: underline;">Conocer mas</a> </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{$products->links()}}
@endsection
