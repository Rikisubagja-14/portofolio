<!-- Sidebar Menu -->
{{-- <nav class="mt-2" style="background-color:#c6cedf;"> --}}
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
    <li class="nav-item ">
        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }} ">
            <i class="fab fa-dashcube nav-icon"></i>
            <p>Dashboard</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/about" class="nav-link  {{ request()->is('about') ? 'active' : '' }} ">
            <i class="fas fa-address-card nav-icon"></i>
            <p>About</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/portofolio" class="nav-link {{ request()->is('portofolio') ? 'active' : '' }} ">
            <i class="fas fa-passport nav-icon"></i>
            <p>Portofolio</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/testimonials" class="nav-link {{ request()->is('testimonials') ? 'active' : '' }} ">
            <i class="fab fa-salesforce nav-icon"></i>
            <p>Testimonials</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/contact_me" class="nav-link {{ request()->is('contact_me') ? 'active' : '' }} ">
            <i class="fas fa-address-book nav-icon"></i>
            <p>Contact_me</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/summary" class="nav-link {{ request()->is('summary') ? 'active' : '' }} ">
            <i class="fab fa-bitbucket nav-icon"></i>
            <p>Summary</p>
        </a>
    </li>

    <li class="nav-item">
        <a href="/education" class="nav-link {{ request()->is('education') ? 'active' : '' }} ">
            <i class="fas fa-school nav-icon"></i>
            <p>Education</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/professional_experiences"
            class="nav-link {{ request()->is('professional_experiences') ? 'active' : '' }} ">
            <i class="fab fa-battle-net nav-icon"></i>
            <p>Professional Experience</p>
        </a>
    </li>

    <li class="nav-item">       
            <a href="{{ route('logout') }}" class="nav-link {{ request()->is('logout') ? 'active' : '' }} "
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Logout</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
    </li>


</ul>
</nav>
<!-- /.sidebar-menu -->
