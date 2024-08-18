<header class="header-top" header-theme="light">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="top-menu d-flex align-items-center">
                <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                <div class="header-search">
                    <div class="input-group">
                        <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="top-menu d-flex align-items-center">
            <a class="nav-link" href="{{ url( session('website') ) }}" target="blank">
                    <i class="ik ik-eye"></i>
                </a>
                <div class="dropdown">
                    <button class="nav-link" id="userDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ik ik-user"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ url('profile') }}"><i class="ik ik-user dropdown-icon"></i> Profile</a>
                        <a class="dropdown-item" href="{{ url('settings') }}"><i class="ik ik-settings dropdown-icon"></i> Settings</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="ik ik-power dropdown-icon"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
