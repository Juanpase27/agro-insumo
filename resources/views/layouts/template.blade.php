<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.3/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    @livewire('navigation-menu')
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">Agro Insumo</span> </a>
                <div class="nav_list">
                    {{-- <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : '' }} nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a> --}}
                    <a href="{{ route('products.index') }}"
                        class="{{ request()->routeIs('products.*') ? 'active' : '' }}  nav_link"> <i
                            class='bx bxl-product-hunt nav_icon'></i><span class="nav_name">Productos</span> </a>
                    <a href="{{ route('product_categories.index') }}"
                        class="{{ request()->routeIs('product_categories.*') ? 'active' : '' }} nav_link"> <i
                            class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Categorías de
                            productos</span> </a>
                    <a href="{{ route('supplies.index') }}"
                        class="{{ request()->routeIs('supplies.*') ? 'active' : '' }}  nav_link"> <i
                            class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Insumos</span> </a>
                    <a href="{{ route('supply_categories.index') }}"
                        class="{{ request()->routeIs('supply_categories.*') ? 'active' : '' }} nav_link"> <i
                            class='bx bx-folder nav_icon'></i> <span class="nav_name">Categorías de insumos</span> </a>
                    <a href="{{ route('contact.index') }}"
                        class="{{ request()->routeIs('contact.*') ? 'active' : '' }} nav_link"> <i
                            class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Contáctanos</span> </a>
                    <a href="{{ route('profile.show') }}"
                        class="{{ request()->routeIs('profile.*') ? 'active' : '' }} nav_link"> <i
                            class='bx bx-user nav_icon'></i> <span class="nav_name">Perfil</span> </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            class="{{ request()->routeIs('logout.*') ? 'active' : '' }} nav_link"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class='bx bx-exit nav_icon'></i>
                            <span class="nav_name">Cerrar sesion</span>
                        </a>
                    </form>

                </div>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-danger">Left</button>
                    <button type="button" class="btn btn-warning">Middle</button>
                    <button type="button" class="btn btn-success">Right</button>
                </div>
            </div>
        </nav>
    </div>
    <div class="height-100 bg-light text-center">
        @yield('content')
    </div>
</body>

</html>
