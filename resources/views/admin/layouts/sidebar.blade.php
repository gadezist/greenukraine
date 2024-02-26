<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-header">ADMIN</li>
        <li class="nav-item">
            <a href="{{ route('admin.users') }}" class="nav-link">
                <i class="fa-solid fa-user"></i>
                <p>
                    Users
{{--                    <span class="badge badge-info right">2</span>--}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.news') }}" class="nav-link">
                <i class="fa-solid fa-newspaper"></i>
                <p>
                    News
                </p>
            </a>
        </li>
    </ul>
</nav>
