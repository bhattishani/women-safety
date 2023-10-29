<header class="header">
    <div class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand pt-0" href="/"><img src="assets/images/redlight-logo.png" alt="" class="img-fluid diverge-logo"></a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Route::is("home")?"active":"" }}">
                            <a class="nav-link text-decoration-none navbar-text-color home-margin-top" href="/">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ Route::is("about-us")?"active":"" }}">
                            <a class="nav-link text-decoration-none navbar-text-color" href="{{ route('about-us') }}">About</a>
                        </li>
                        @guest
                            <li class="nav-item {{ Route::is("login")?"active":"" }}">
                                <a class="nav-link text-decoration-none navbar-text-color" href="{{ route('login') }}">Login</a>
                            </li>
                        @else
                            <li class="nav-item {{ Route::is("sos-help")?"active":"" }}">
                                <a class="nav-link text-decoration-none navbar-text-color" href="{{ route('sos-help') }}">SOS Help</a>
                            </li>
                            <li class="nav-item {{ Route::is("logout")?"active":"" }}">
                                <a class="nav-link text-decoration-none navbar-text-color" href="{{ route('logout') }}">Logout</a>
                            </li>
                        @endguest
                    </ul>
                    <div class="btn-talk ml-auto">
                        <ul class="m-0 p-0">
                            <li class="list-unstyled d-lg-inline-block"><a class="nav-link contact" href="{{ route("contact-us") }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
