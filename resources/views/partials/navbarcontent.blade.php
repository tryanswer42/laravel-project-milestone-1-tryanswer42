<nav class="navbar  navbar-inverse navbar-expand shadow-sm">

    <div class="container-fluid" id="header">


        <div id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/" accesskey="1" title=""
                                                                            class="hoverable nav-item">Petasi Ordo</a>
                </li>
                <li class="{{ Request::is('articles*') ? 'active' : ''}}"><a href="/articles" accesskey="2" title=""
                                                                             class="hoverable nav-item">News</a></li>
                <li class="{{ Request::is('agenda*') ? 'active' : ''}}"><a href="#" accesskey="3" title=""
                                                                           class="hoverable nav-item">Agenda</a></li>
                <li class="{{ Request::is('about*') ? 'active' : ''}}"><a href="/about" accesskey="4" title=""
                                                                          class="hoverable nav-item">About Us</a></li>
                <li class="{{ Request::is('contact*') ? 'active' : ''}}"><a href="#" accesskey="5" title=""
                                                                            class="hoverable nav-item">Contact Us</a>
                </li>

                <li class="nav-item dropdown nav-item">
                    <a class="nav-link dropdown-toggle hoverable" href="#" accesskey="6" id="navbarDropdown"
                       role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @guest
                        SignIn/Register
                        @else
                       Profil
                        @endguest

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @guest
                        @if (Route::has('login'))
                        <a class="dropdown-item hoverable" href="{{URL::to('login')}}">Login</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="dropdown-item hoverable" href="{{URL::to('register')}}">Register</a>
                        @endif

                        @else
                        <a class="dropdown-item hoverable" href="#">Hello {{ Auth::user()->name }}</a>
                        <a class="dropdown-item hoverable" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item hoverable" href="#">Buy us a drink</a>
                    </div>
                </li>
            </ul>
        </div>


    </div>
</nav>




