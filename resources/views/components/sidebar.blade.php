<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">j a m e t</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">Dashboard</a>
            </li>

            <li class="{{ Request::is('class') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('class') }}">Class</a>
            </li>

            <li class="{{ Request::is('students') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('students') }}">Students</a>
            </li>

    </aside>
</div>
