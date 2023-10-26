<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-slot name="title">
            <h3>Registro</h3>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
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

            <div class="input-group form-group mt-3">
                <x-icon-input-password/>
                <x-input type="password" class="form-control" placeholder="Ingrese contraseña" name="password" required
                    autocomplete="new-password" />
            </div>


            <div class="input-group form-group mt-3">
                <x-icon-input-password/>
                <x-input type="password_confirmation" class="form-control" placeholder="Ingrese nuevamente contraseña"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <div class="form-group mt-3">
                    <input type="submit" value={{ __('Register') }} class="btn bg-secondary float-end text-white w-100" style="background: #61a851 !important"
                        name="login-btn">
                </div>


                <div class="text-center mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="color: #61a851 !important"
                    href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                </div>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
