<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
            <a href="{{url('/home')}}" class="nav-link {{ (request()->is('home*')) ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
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
                        <i class="fas fa-file nav-icon"></i>
                        <p>Create</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('customer')}}" class="nav-link {{ (request()->is('customer')) ? 'active' : '' }}">
                        <i class="fas fa-search nav-icon"></i>
                        <p>Search</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-header">Installment</li>
        <li class="nav-item">
            <a href="#" class="nav-link {{ (request()->is('')) ? 'active' : '' }}">
                <i class="nav-icon fa fa-sign-out"></i>
                <p>
                    Credit Installment
                    <span class="badge badge-info right"></span>
                </p>
            </a>
        </li>
    </ul>
</nav>
