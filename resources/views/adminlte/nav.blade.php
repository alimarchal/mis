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
        <li class="nav-header">Borrowers</li>
        <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('')) ? 'active' : '' }}">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    Add Borrower
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview {{ (request()->is('customer*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('customer*')) ? 'active' : '' }}">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Borrowers
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('customer/create')}}" class="nav-link {{ (request()->is('customer/create')) ? 'active' : '' }}">
                        <i class="far fa-file nav-icon"></i>
                        <p>Create</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('customer')}}" class="nav-link {{ (request()->is('customer')) ? 'active' : '' }}">
                        <i class="far fa-file nav-icon"></i>
                        <p>Show All</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
