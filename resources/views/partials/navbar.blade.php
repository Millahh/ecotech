<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="/image/logo.png" alt="" width="180">
        </a>
        <div class="collapse navbar-collapse ml-auto justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-4">
                    <a style="color: black" class="nav-link" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item pe-4">
                    <a style="color: black" class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                    <a style="color: white" class="px-4 btn btn-xl nav-link" role="button" href="{{ url('/login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
