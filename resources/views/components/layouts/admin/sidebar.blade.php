<div class="sidebar-content">
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <li class="nav-item-header">
                <div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
            </li>

            @can('dashboard')
                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            @endcan
            {{-- @can('user') --}}
            <li class="nav-item nav-item-submenu">
                <a href="#" class="nav-link"><i class="icon-people"></i> <span>User pages</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="User pages">
                    <li class="nav-item"><a href="user_pages_list.html" class="nav-link">User list</a></li>
                    <li class="nav-item"><a href="user_pages_cards.html" class="nav-link">User cards</a></li>
                    <li class="nav-item"><a href="user_pages_profile.html" class="nav-link">Simple profile</a></li>
                    <li class="nav-item"><a href="user_pages_profile_tabbed.html" class="nav-link">Tabbed profile</a>
                    </li>
                    <li class="nav-item"><a href="user_pages_profile_cover.html" class="nav-link">Profile with cover</a>
                    </li>
                </ul>
            </li>
            {{-- @endcan --}}
        </ul>
    </div>
</div>
