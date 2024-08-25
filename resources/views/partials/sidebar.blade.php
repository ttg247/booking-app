<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fa fa-house menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('calendar*') ? 'active' : null }}">
            <a class="nav-link" href="{{ route('calendar') }}">
                <i class="fa fa-calendar menu-icon"></i>
                <span class="menu-title">Calendar</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('services*') ? 'active' : null }}">
            <a class="nav-link" href="{{ route('services') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Services</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('contacts*') ? 'active' : null }}">
            <a class="nav-link" href="{{ route('contacts') }}">
                <i class="fa fa-users menu-icon"></i>
                <span class="menu-title">Contacts</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('reports*') ? 'active' : null }}">
            <a class="nav-link" href="{{ route('reports') }}">
                <i class="fa fa-chart-bar menu-icon"></i>
                <span class="menu-title">Reports</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('marketing*') ? 'active' : null }}">
            <a class="nav-link" href="{{ route('marketing') }}">
                <i class="fa fa-bullhorn menu-icon"></i>
                <span class="menu-title">Marketing</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('bookings') }}">
                <i class="fa fa-chart-line menu-icon"></i>
                <span class="menu-title">Online Bookings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('staff') }}">
                <i class="fa fa-contact-book menu-icon"></i>
                <span class="menu-title">Staff</span>
            </a>
        </li>

    </ul>
</nav>