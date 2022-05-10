<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin/images//icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{route('home')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{route('contacts.index')}}">
                                <i class="fas fa-table"></i>Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('about.index')}}">
                                <i class="fas fa-table"></i>About</a>
                        </li>
                        <li>
                            <a href="{{route('services.index')}}">
                                <i class="fas fa-table"></i>Services</a>
                        </li>
                        <li>
                            <a href="{{route('portfolio.index')}}">
                                <i class="fas fa-table"></i>Portfolio</a>
                        </li>
                        <li>
                            <a href="{{route('testimonials.index')}}">
                                <i class="fas fa-table"></i>Testimonials</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>