<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-application-mark class="block h-9 w-auto" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Navigation Links -->
                <li class="nav-item">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
            </ul>

            <!-- Teams Dropdown -->
            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="teamsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->currentTeam->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="teamsDropdown">
                            <!-- Team Management -->
                            <li class="dropdown-item disabled">{{ __('Manage Team') }}</li>
                            <!-- Team Settings -->
                            <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                {{ __('Team Settings') }}
                            </x-dropdown-link>
                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <!-- Create New Team -->
                                <x-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-dropdown-link>
                            @endcan
                            @if (Auth::user()->allTeams()->count() > 1)
                                <div class="dropdown-divider"></div>
                                <!-- Switch Teams -->
                                <li class="dropdown-item disabled">{{ __('Switch Teams') }}</li>
                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-switchable-team :team="$team" />
                                @endforeach
                            @endif
                        </ul>
                    </li>
                </div>
            @endif

            {{-- <!-- Settings Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <img class="user-avatar" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    @else
                        {{ Auth::user()->name }}
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="settingsDropdown">
                    <!-- Account Management -->
                    <li class="dropdown-item disabled">{{ __('Manage Account') }}</li>
                    <!-- Profile -->
                    <x-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <!-- API Tokens -->
                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-dropdown-link>
                    @endif
                    <div class="dropdown-divider"></div>
                    <!-- Log Out -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </ul>
            </li>
        </div> --}}
    </div>
</nav>
