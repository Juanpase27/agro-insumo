@extends('layouts.template')

@section('title', 'Index')

@section('content')
    <script>
        function redirectToCreatePage() {
            var createRoute = "{{ route('product_categories.create') }}";
            window.location.href = createRoute;
        }
    </script>
    <h1>Categorias disponibles</h1>
    <p>Aca encontraras todos las categorias que haz creado.</p>
    <button type="button" class="btn btn-primary" onclick="redirectToCreatePage()">Crear categoria</button>

    <div class="container mt-5 mb-3">
        <div class="row">
            @foreach ($productCategory as $item)
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
                    <div class="mt-4">
                        <h4 class="heading">{{ $item->name }}</h4>
                        <div class="mt-3"> <a href="{{route('product_categories.show', $item)}}" style="color: #959595;  text-decoration: underline;">Conocer mas</a> </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{$productCategory->links()}}
@endsection
