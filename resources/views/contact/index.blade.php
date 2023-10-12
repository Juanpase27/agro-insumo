@extends('layouts.template')

@section('title', 'Contáctanos')

@section('content')
    <h1>Dejanos un mensaje :p</h1>
    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name"value="{{ old('name') }}">
        </label>
        <br>
        @error('name')
            <p>{{ $message }}*</p>
            <br>
        @enderror
        <label>
            Correo:
            <br>
            <input type="email" name="email" value="{{ old('email') }}">
        </label>
        <br>
        @error('email')
            <p>{{ $message }}*</p>
            <br>
        @enderror
        <div class="w-75">
            <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist"
                style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button"
                        role="tab" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab"
                        aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-5" id="contact-tab2" data-bs-toggle="tab" type="button" role="tab"
                        aria-selected="false">Contact</button>
                </li>
            </ul>
        </div>
        <label>
            Mensaje:
            <br>
            <textarea name="message" rows="4" value="{{ old('message') }}"></textarea>
        </label>
        <br>
        @error('message')
            <p>{{ $message }}*</p>
            <br>
        @enderror
        <button type="submit">Enviar mensaje</button>
    </form>
    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif

@endsection
