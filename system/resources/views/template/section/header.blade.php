<nav class="navbar navbar-expand-lg bg-light navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="btn btn-primary" href="{{url('beranda')}}"> 
              @if(Auth::check())
                {{request()->user()->nama}}
               @else
                Silahkan Login
               @endif</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">account_circle</i> Profil
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="{{url('setting')}}">
                  <i class="material-icons">settings</i> Pengaturan
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="{{url('logout')}}">
                  <i class="material-icons">https</i> Log out
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->