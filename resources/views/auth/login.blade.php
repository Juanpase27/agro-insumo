<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-slot name="title">
            <h3>Iniciar sesion</h3>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <script>
            function redirectToTegister() {
                var createRoute = "{{ route('register') }}";
                window.location.href = createRoute;
            }
        </script>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input-group form-group mt-3">
                <x-icon-input-email/>
                <x-input type="email" class="form-control" placeholder="Ingrese su email" name="email"
                    id="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="input-group form-group mt-3">
                <x-icon-input-password/>
                <x-input type="password" class="form-control" placeholder="Ingrese contraseña" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600" style="color: black !important;" >{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form-group mt-3">
                <input type="submit" value="Iniciar sesion" class="btn bg-secondary float-end text-white w-100" style="background: #61a851 !important;"
                    name="login-btn">
            </div>

            <div class="form-group mt-2">
                <input type="submit" value="Registro" class="btn bg-secondary float-end text-white w-100 mt-4" name="login-btn" onclick="redirectToTegister()" style="background: #61a851 !important;">
            </div>

            <div class="flex items-center justify-end mt-4 text-center">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-3" style="color: #61a851 !important"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
