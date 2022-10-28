<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Suka Suka Saya</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="nav-item dropdown {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">Dashboard</a>
            </li>

            <li class="{{ Request::is('components-table') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('components-table') }}">Data Kelas</a>
            </li>

            <li class="{{ Request::is('components-statistic') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('components-statistic') }}">Data Siswa</a>
            </li>

    </aside>
</div>
