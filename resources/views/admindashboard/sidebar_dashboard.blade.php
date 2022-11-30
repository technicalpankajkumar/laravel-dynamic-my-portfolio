
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion  navtheme" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading text-light">Core</div>
                <a class="nav-link text-white" href="{{route('admin_pannel')}}">
                    <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-id-card"></i></div>
                    Profiles
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link text-white" href="{{route('admin_home_profile')}}">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-user"></i></div>
                            Home-Profile
                        </a>
                        <a class="nav-link text-white" href="{{route('admin_about_profile')}}">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-user-plus"></i></div>
                            About-Profile
                        </a>
                        <a class="nav-link text-white" href="{{route('admin_login_profile')}}">
                            <div class="sb-nav-link-icon text-white"><i class="fas fa-user-minus"></i></div>
                            Login-Profile
                        </a>
                    </nav>
                </div>
                <a class="nav-link text-white" href="{{route('social-icon.index')}}">
                    <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-thumbs-up"></i></div>
                    Social Icons
                </a>
                <a class="nav-link text-white" href="{{route('message.index')}}">
                    <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-message"></i></div>
                    Messages
                </a>
                {{-- <a class="nav-link text-white" href="{{route('technology.index')}}">
                    <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-microchip"></i></div>
                    Technology
                </a> --}}
                <a class="nav-link text-white" href="{{route('project.index')}}">
                    <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-diagram-project"></i></div>
                    Projects
                </a>
                <a class="nav-link text-white" href="{{route('video-manager.index')}}">
                    <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-video-slash"></i></div>
                    Video Manage
                </a>
                <a class="nav-link text-white" href="{{route('porfolio')}}" target="_blank">
                    <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-eye"></i></div>
                    Visit Website
                </a>
                <a class="nav-link text-white" href="{{route('admin_logout')}}" target="_blank">
                    <div class="sb-nav-link-icon text-white"><i class="fa-solid fa-right-from-bracket"></i></div>
                    Log-Out
                </a>

            </div>
        </div>
        <div class="sb-sidenav-footer cardcolor" id="nav-foot">
            <div class="small">Logged in as:</div>
            Pankaj kumar
        </div>
    </nav>
</div>