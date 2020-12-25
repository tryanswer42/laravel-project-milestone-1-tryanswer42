
<nav class="navbar  navbar-inverse navbar-expand">

    <div class="container-fluid" id="header">


        <div  id="menu">
            <ul class="navbar-nav mx-auto">
                <li class="{{ Request::path() === '/' ? 'active' : ''}}"><a href="/" accesskey="1" title="" class="hoverable nav-item">Petasi Ordo</a></li>
                <li class="{{ Request::is('articles*') ? 'active' : ''}}"><a href="/articles" accesskey="2" title="" class="hoverable nav-item">News</a></li>
                <li class="{{ Request::is('agenda*') ? 'active' : ''}}"><a href="#" accesskey="3" title="" class="hoverable nav-item">Agenda</a></li>
                <li class="{{ Request::is('about*') ? 'active' : ''}}"><a href="/about" accesskey="4" title="" class="hoverable nav-item">About Us</a></li>
                <li class="{{ Request::is('contact*') ? 'active' : ''}}"><a href="#" accesskey="5" title="" class="hoverable nav-item">Contact Us</a></li>
                <li class="nav-item dropdown nav-item">
                    <a class="nav-link dropdown-toggle hoverable" href="#" accesskey="3" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SignIn/Register
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item hoverable" href="#">Login</a>
                        <a class="dropdown-item hoverable" href="#">Register</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item hoverable" href="#">Buy us a drink</a>
                    </div>
                </li>
            </ul>
        </div>


    </div>
</nav>




