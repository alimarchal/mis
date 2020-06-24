<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('home*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-header">Dashboard</li>
        <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Calendar
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview {{ (request()->is('admin*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin*')) ? 'active' : '' }}">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Mailbox
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link {{ (request()->is('admin*')) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inbox</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
