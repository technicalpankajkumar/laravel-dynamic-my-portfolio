<!-- navigation is here -->
<div class="row position-sticky top-0">
    <div class="col-lg-12 p-0 ">
      <nav class="navbar navbar-expand-lg navbar-dark navtheme shadow bg-body px-3" id="color" style="z-index: 1 !important;">
        <a class="navbar-brand fw-bold font-monospace fs-1" href="#">˂/>&nbsp;{{$homeProfile[0]->web_name}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fs-5 font-monospace ">
              <li class="nav-item rounded hover">
                <a class="nav-link" href="#home" id="white">Home</a>
              </li>
              <li class="nav-item rounded hover">
                <a class="nav-link" href="#coding-video" id="white">Coding-Video</a>
              </li>
              <li class="nav-item rounded hover">
                <a class="nav-link" href="#projects" id="white">Projects</a>
              </li>
              <li class="nav-item rounded hover">
                <a class="nav-link" href="#map" id="white">Contact-Us</a>
              </li>
              <li class="nav-item rounded hover">
                <a class="nav-link" href="#about-us" id="white">About-Us</a>
              </li>
              <li class="nav-item rounded hover curserpointer">
                @if(!empty(auth()->user()))
                  <a class="nav-link" href="{{route('admin_pannel')}}" id="white">
                    Dashboard
                  </a>
                  @else
                    <a class="nav-link" id="white" data-bs-toggle="modal" data-bs-target="#login-Model">Admin-Login</a>
                  @endif
              </li>
            </ul>
          </div>
      </nav>
    </div>
  </div>
  <!-- navigation is here end -->