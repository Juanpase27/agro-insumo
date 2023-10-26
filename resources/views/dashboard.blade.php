<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ route('products.index') }}">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                </div>
                <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                </div>
                <div class="alert alert-success" role="alert">
                    A simple success alert—check it out!
                </div>
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                </div>
                <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                </div>
                <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                </div>
                <div class="alert alert-light" role="alert">
                    A simple light alert—check it out!
                </div>
                <div class="alert alert-dark" role="alert">
                    A simple dark alert—check it out!
                </div>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-danger">Left</button>
                    <button type="button" class="btn btn-warning">Middle</button>
                    <button type="button" class="btn btn-success">Right</button>
                </div>
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
