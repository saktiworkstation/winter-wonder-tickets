<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" hrefaria-current="page" href="/">
                    <span data-feather="home"></span>
                    Homepage
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" hrefaria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/user-tickets*') ? 'active' : '' }}"
                    href="/dashboard/user-tickets">
                    <span data-feather="file-text"></span>
                    Report
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/notifications*') ? 'active' : '' }}"
                    href="/dashboard/notifications/member">
                    <span data-feather="file-text"></span>
                    Notifications
                </a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
                <span>Administrator</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/dashboard/tickets*') ? 'active' : '' }}" href="/dashboard/tickets">
                        <span data-feather="grid"></span>
                        Tickets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/dashboard/user-tickets*') ? 'active' : '' }}"
                        href="/dashboard/user-tickets/management">
                        <span data-feather="grid"></span>
                        User Tickets
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/dashboard/notifications*') ? 'active' : '' }}"
                        href="/dashboard/notifications/admin">
                        <span data-feather="grid"></span>
                        Notifications
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>
