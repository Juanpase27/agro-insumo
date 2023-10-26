@extends('layouts.template')

@section('title', 'Contáctanos')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12" style="text-align: left">
                <h3 class="m-lg-5 m-md-3 font-color-titles" >Contáctenos</h3>
                <p class="w-50 m-lg-5 m-md-3">Nuestra dirección postal es:
                    152A Charlotte Street,
                    Peterborough ON
                    Teléfono: 705-742-322</p>
                <div class="row m-lg-5 m-md-2">
                    <div class="col-lg-1" style="font-size: 2.25rem">
                        <i class='font-color-titles bx bxl-facebook-circle'></i>
                    </div>
                    <div class="col-lg-1" style="font-size: 2.25rem">
                        <i class='font-color-titles bx bxl-twitter'></i>
                    </div>
                    <div class="col-lg-1" style="font-size: 2.25rem">
                        <i class='font-color-titles bx bxl-twitch'></i>
                    </div>
                    <div class="col-lg-1" style="font-size: 2.25rem">
                        <i class='font-color-titles bx bxl-gmail'></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <form action="{{ route('contact.store') }}" method="post">
                    @csrf
                    <div class="input-group form-group mt-3">
                        <x-icon-input-name/>
                        <x-input type="text" class="form-control" placeholder="Ingrese su nombre" name="name"
                            id="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="input-group form-group mt-3">
                        <x-icon-input-email/>
                        <x-input type="email" class="form-control" placeholder="Ingrese su email" name="email"
                            id="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                    <br>
                    <textarea name="message" placeholder="Ingrese su descripcion" cols="67" rows="10" value="{{ old('message') }}" class="p-3"></textarea>
                    <br>
                    <button type="submit" class="btn btn-success mt-4" style="background: #61a851 !important">{{ __('Send') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
