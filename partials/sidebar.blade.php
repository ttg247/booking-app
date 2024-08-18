<div class="app-sidebar colored">
    <div class="sidebar-header">
        <a class="header-brand" href="index.php">
            <div class="logo-img">
                <img src="{{ asset('img/white_logo.png') }}" class="header-brand-img" alt="" style="width: 50px;"> 
            </div>
            <span class="text pl-3">Terra Sunny</span>
        </a>
        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
    </div>
    
    <div class="sidebar-content">
        <div class="nav-container">
            <nav id="main-menu-navigation" class="navigation-main">

                
                   <div class="nav-lavel">Website</div>
                   <div class="nav-item <?php if (isset($nav) && $nav === "home"){ echo "active";}?>">
                        <a href="{{ url('/') }}"><i class="ik ik-bar-chart"></i><span>Dashboard</span></a>
                   </div>
                   <div class="nav-item <?php if ( isset($nav) && $nav == "bookings"){ echo "active";}?>">
                        <a href="{{ url('/bookings') }}"><i class="ik ik-clock"></i><span>Bookings</span> </a>
                   </div>
                   <div class="nav-item <?php if (isset($nav) && $nav === "users"){ echo "active";}?>">
                        <a href="{{ url('/customers-manager') }}"><i class="ik ik-users"></i><span>Customers</span></a>
                   </div>
                   <div class="nav-item  <?php if (isset($nav) && $nav === "reviews"){ echo "active";}?>">
                        <a href="{{ url('/reviews-manager') }}"><i class="ik ik-star"></i><span>Reviews</span> </a>
                   </div>
                   <div class="nav-item <?php if (isset($nav) && $nav === "settings"){ echo "active";}?>">
                       <a href="{{ url('/business-manager') }}"><i class="ik ik-settings"></i><span>Preferences</span> </a>
                   </div>
                @if (Auth::user()->hasRole('admin') )
                    <div class="nav-lavel">CRM</div>
                    <div class="nav-item {{ ( request()->is('accounts*') ) ? 'active': ''  }}">
                        <a href="{{ url('/accounts-manager') }}"><i class="ik ik-folder"></i><span>Accounts</span> </a>
                    </div>
                    <div class="nav-item {{ ( request()->is('contacts*') ) ? 'active': ''  }}">
                        <a href="{{ url('/contacts-manager') }}"><i class="ik ik-book"></i><span>Contacts</span> </a>
                    </div>
                    <div class="nav-item {{ ( request()->is('leads*') ) ? 'active': ''  }}">
                        <a href="{{ url('/leads-manager') }}"><i class="ik ik-refresh-cw"></i><span>Leads</span></a>
                    </div>
                    <div class="nav-item {{ ( request()->is('funnel*') || request()->is('opportunities*')) ? 'active': ''  }}">
                        <a href="{{ url('/funnel') }}"><i class="ik ik-filter"></i><span>Funnel</span></a>
                    </div>
                @endif

                <div class="nav-lavel">Support</div>
                <div class="nav-item">
                    <a href="help"><i class="ik ik-monitor"></i><span>Contact Support</span></a>
                </div>
                <div class="nav-item">
                    <a href="bugs"><i class="ik ik-help-circle"></i><span>Report Issue</span></a>
                </div>
            </nav>
        </div>
    </div>
</div>