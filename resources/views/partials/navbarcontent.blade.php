<nav class="navbar   navbar-expand ">

    <div class="container-fluid" id="header">


        <div id="menu">
            <ul class="navbar-nav mx-auto">
                @guest
                @else
                @if(Auth::user()->isAdmin())
                <li class="{{ Request::is('admin*') ? 'active' : ''}}"><a href="{{URL::to('admin')}}" title="" class="hoverable nav-item">Admin</a></li>
                @endif
                @endguest

                <li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/" accesskey="1" title=""
                                                                            class="hoverable nav-item">Petasi Ordo</a>
                </li>
                <li class="{{ Request::is('articles*') ? 'active' : ''}}"><a href="{{URL::to('articles')}}"
                                                                             accesskey="2" title=""
                                                                             class="hoverable nav-item">News</a></li>
                <li class="{{ Request::is('agenda*') ? 'active' : ''}}"><a href="{{URL::to('activities')}}"
                                                                           accesskey="3" title=""
                                                                           class="hoverable nav-item">Agenda</a></li>
                <li class="{{ Request::is('about*') ? 'active' : ''}}"><a href="{{URL::to('about')}}" accesskey="4"
                                                                          title=""
                                                                          class="hoverable nav-item">About Us</a></li>
                <li class="{{ Request::is('contact*') ? 'active' : ''}}"><a href="{{URL::to('contact')}}" accesskey="5"
                                                                            title=""
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
                        <a class="dropdown-item hoverable" href="{{URL::to('user')}}">Hello {{ Auth::user()->name }}</a>
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
                        <a class="dropdown-item hoverable" href="/donate">Buy us a drink</a>
                    </div>
                </li>
                <li class="nav-item dropdown nav-item"><span> </span></li>
            </ul>
        </div>


    </div>
</nav>




