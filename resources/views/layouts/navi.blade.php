<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        {{-- <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Forestry Ideas') }}
        </a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home.index') }}">{{ __('Home Page') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="{{ route('news.index') }}">{{ __('News') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('journal') ? 'active' : '' }}" href="{{ route('journal.index') }}">{{ __('Contents') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('instructions') ? 'active' : '' }}"
                        href="{{ route('instructions.index') }}">{{ __('Instruction To Authors') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="">{{ __('Subscription') }}</a>
                </li>

                {{-- <li class="nav-item"> --}}
                {{-- <a class="nav-link" href="{{ route('pages.issue') }}">{{ __('Issue') }}</a> --}}
                {{-- </li> --}}

                <li class="nav-item {{ Request::is('contacts') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('contacts.index') }}">{{ __('Contacts') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('conferences') ? 'active' : '' }}"
                        href="{{ route('conferences.index') }}">{{ __('Conferences') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                        href="">{{ __('Publication Ethics') }}</a>
                </li>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
