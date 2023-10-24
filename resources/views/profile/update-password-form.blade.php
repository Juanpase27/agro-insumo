{{--<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
--}}
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>{{ __('Update Password') }}</h2>
            <p>{{ __('Ensure your account is using a long, random password to stay secure.') }}</p>
        </div>
    </div>

    <form wire:submit.prevent="updatePassword">
        <div class="row">
            <div class="col-lg-6 col-sm-4">
                <div class="mb-3">
                    <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                    <input type="password" class="form-control" id="current_password" wire:model="state.current_password" autocomplete="current-password">
                    <x-input-error for="current_password" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-4">
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('New Password') }}</label>
                    <input type="password" class="form-control" id="password" wire:model="state.password" autocomplete="new-password">
                    <x-input-error for="password" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-4">
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control" id="password_confirmation" wire:model="state.password_confirmation" autocomplete="new-password">
                    <x-input-error for="password_confirmation" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                <x-action-message class="ml-3" on="saved">
                    {{ __('Saved.') }}
                </x-action-message>
            </div>
        </div>
    </form>
</div>
