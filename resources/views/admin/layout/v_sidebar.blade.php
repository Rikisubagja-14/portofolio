
      <!-- Sidebar Menu -->
      {{-- <nav class="mt-2" style="background-color:#c6cedf;"> --}}
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item ">
                  <a href="/" class="nav-link {{request()->is('/') ? 'active' : ''}} ">
                    <i class="fab fa-dashcube nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
          
                <li class="nav-item">
                  <a href="/about" class="nav-link  {{request()->is('about') ? 'active' : ''}} ">
                    <i class="fas fa-code-branch nav-icon"></i>
                    <p>About</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/portofolio" class="nav-link {{request()->is('portofolio') ? 'active' : ''}} ">
                    <i class="fas fa-bezier-curve nav-icon"></i>
                    <p>Portofolio</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/testimonials" class="nav-link {{request()->is('testimonials') ? 'active' : ''}} ">
                    <i class="fab fa-salesforce nav-icon"></i>
                    <p>Testimonials</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/summary" class="nav-link {{request()->is('/') ? 'active' : ''}} ">
                    <i class="fab fa-audible nav-icon"></i>
                    <p>Contact_me</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/summary" class="nav-link {{request()->is('summary') ? 'active' : ''}} ">
                    <i class="fab fa-cloudversify nav-icon"></i>
                    <p>Summary</p>
                  </a>
                </li>
          
                <li class="nav-item">
                  <a href="/education" class="nav-link {{request()->is('education') ? 'active' : ''}} ">
                    <i class="fas fa-glass-whiskey nav-icon"></i>
                    <p>Education</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/professional_experiences" class="nav-link {{request()->is('professional_experiences') ? 'active' : ''}} ">
                    <i class="fab fa-battle-net nav-icon"></i>
                    <p>Professional Experience</p>
                  </a>
                </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->