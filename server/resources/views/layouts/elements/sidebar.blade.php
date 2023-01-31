<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-coins"></i>
        </div>
        <div class="sidebar-brand-text mx-3">@lang('label.sidebar.title')</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ active_menu(['admin.index', 'admin.viewCreate']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdmin"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Admins</span>
        </a>
        <div id="collapseAdmin" class="collapse {{ show_menu(['admin.index', 'admin.viewCreate']) }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ active_menu(['admin.index']) }}" href="{{ route('admin.index') }}">List</a>
                <a class="collapse-item {{ active_menu(['admin.viewCreate']) }}" href="{{ route('admin.viewCreate') }}">Create</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ active_menu(['member.index']) }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMember"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Members</span>
        </a>
        <div id="collapseMember" class="collapse {{ show_menu(['member.index']) }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ active_menu(['member.index']) }}" href="{{ route('member.index') }}">List</a>
                <a class="collapse-item" href="#">Create</a>
            </div>
        </div>
    </li>

</ul>