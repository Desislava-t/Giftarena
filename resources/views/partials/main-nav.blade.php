<nav class="navbar navbar-expand-md main-nav shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Giftarena') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-align-justify btn-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="mb-2">
                    <a class="nav-link text-white text-decoration-none pr-3" href="#" aria-label="link About us"
                       accesskey="за">
                        За нас
                    </a>
                </li>
                <li class="mb-2">
                    <a class="nav-link text-white text-decoration-none pr-3" href="#" aria-label="link services"
                       accesskey="у">
                        Услуги
                    </a>
                </li>
                <li class="mb-2">
                    <a class="nav-link text-white text-decoration-none pr-3" href="#" aria-label="link gallery"
                       accesskey="г">
                        Галерия
                    </a>
                </li>
                <li class="mb-2">
                    <a class="nav-link text-white text-decoration-none pr-3" href="#" aria-label="idea of ​​home"
                       accesskey="д">
                        Здравословно хранене</a>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white text-decoration-none pr-3 text-uppercase"
                           href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none pr-3 text-uppercase"
                               href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-white text-decoration-none pr-3" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
            @endguest
            <!-- .Authentication Links -->
            </ul>
            <!-- .Right Side Of Navbar -->
        </div>
    </div>
</nav>