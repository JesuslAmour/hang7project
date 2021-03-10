<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Slime</span></div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation"><a class="nav-link {{ set_active_route('dash_welcome_path') }}" href="{{ Route('dash_welcome_path') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="table.html"><i class="fas fa-table"></i><span>Table</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link {{ set_active_route('dash_register_path') }}" href="{{ Route('dash_register_path') }}"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="login.html"><i class="far fa-user-circle"></i><span>Login</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link {{ set_active_route('dash_add_personal_path') }}" href="{{ Route('dash_add_personal_path') }}"><i class="fas fa-user-circle"></i><span>Nouvelle  personne</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link {{ set_active_route('dash_payment_path') }}" href="{{ Route('dash_payment_path') }}"><i class="fas fa-user-circle"></i><span>PAYEMENT</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>
