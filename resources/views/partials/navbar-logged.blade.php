<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                <li class="nav-item pe-4">
                    <img src="image/icon/notif.png" alt="notif" class="pt-2">
                </li>
                <li class="nav-item">
                  <a class="nav-link inline d-flex dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="25" class="rounded-circle me-3">
                    <h6 class="">rara</h6>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Dashboard</a>
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <!-- <a class="dropdown-item" href="{{ url('/logout') }}">Log Out</a> -->
                    <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                        @csrf
                        <button type="submit" class="dropdown-item border-0">Log Out</button>
                    </form>
                  </div>
                </li>   
            </ul>            
        </div>
    </div>
</nav>



<!-- <nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <div class="collapse navbar-collapse ml-auto justify-content-end me-4" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link d-flex dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle me-3">
          <h6>rara</h6>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Dashboard</a>
          <a class="dropdown-item" href="#">Edit Profile</a>
          <a class="dropdown-item" href="#">Log Out</a>
        </div>
      </li>   
    </ul>
  </div>
</nav> -->