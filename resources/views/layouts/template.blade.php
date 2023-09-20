<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    -->
    <style>
        .active{
            background-color: aqua;
        }
    </style>
</head>

<body>
    <header>
        <h1>Navegación</h1>
        <nav>
            <ul>
                {{--
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIS('home') ? 'active' : '' }}">Home</a></li>
                    --}}
                <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{route('products.index')}}" class="{{request()->routeIs('products.*') ? 'active' : '' }}">Products</a></li>
                <li><a href="{{route('product_categories.index')}}" class="{{request()->routeIs('product_categories.*') ? 'active' : '' }}">Product_categories</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>

</html>
