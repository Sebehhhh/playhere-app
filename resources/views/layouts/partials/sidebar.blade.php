<div class="left-side-bar">
    <div class="brand-logo">
        <a href="#">
            <img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt="" class="dark-logo" />
            <img src="{{ asset('assets/vendors/images/deskapp-logo-white.svg') }}" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li>
                    <a href="{{ route('dashboard') }}"
                        class="dropdown-toggle no-arrow {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <span class="micon bi bi-diagram-3"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>

                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Data</div>
                </li>
                <li>
                    <a href="{{ route('users.index') }}"
                        class="dropdown-toggle no-arrow {{ request()->routeIs('users.*') ? 'active' : '' }}">
                        <span class="micon bi bi-person"></span><span class="mtext">Pengguna</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
