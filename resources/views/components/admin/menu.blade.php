<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        @foreach($all_menus as $menu)
            <x-admin.menu-item  :menu="$menu" />
        @endforeach

    </ul>
</nav>
