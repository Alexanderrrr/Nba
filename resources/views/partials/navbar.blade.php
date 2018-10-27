<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">


          @if(auth()->check())

              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <a class="btn btn-sm btn-outline-secondary" href="/nba/logout">Logout</a>
              </ul>
          @else
              <a class="btn btn-sm btn-outline-secondary" href="/">Login</a>
              <a class="btn btn-sm btn-outline-secondary" href="/nba/register">Sign up</a>



          @endif
  </div>
</nav>
