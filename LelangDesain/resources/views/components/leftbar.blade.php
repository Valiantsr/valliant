<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <x-logo />

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if (Auth::user()->role == 'admin')
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ $active == 'dashboard' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="home" />
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{ route('sayembara.verif.index') }}"
                        class="nav-link {{ $active == 'sayembara' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="user" />
                        <p>
                            Sayembara
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li
                    class="nav-item has-treeview {{ $active == 'arsitek' || $active == 'pelanggan' ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link">
                        <x-icon class="nav-icon fas fa-" type="user" />
                        <p>
                            Verifikasi Akun
                            <x-icon class="right fas fa-" type="angle-left" />
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('arsitek.verif.index') }}"
                                class="nav-link {{ $active == 'arsitek' ? 'active' : '' }}">
                                <x-icon class="nav-icon fas fa-" type="circle" />
                                <p>Arsitek</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pelanggan.verif.index') }}"
                                class="nav-link {{ $active == 'pelanggan' ? 'active' : '' }}">
                                <x-icon class="nav-icon fas fa-" type="circle" />
                                <p>Pelanggan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @elseif (Auth::user()->role == 'arsitek')
                <li class="nav-item">
                    <a href="{{ route('arsitek.dashboard') }}"
                        class="nav-link {{ $active == 'dashboard' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="home" />
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{ route('sayembara.index') }}"
                        class="nav-link {{ $active == 'sayembara' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="user" />
                        <p>
                            Sayembara
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{ route('arsitek.profil') }}"
                        class="nav-link {{ $active == 'profil.index' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="user" />
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="{{ route('pelanggan.dashboard') }}"
                        class="nav-link {{ $active == 'dashboard' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="home" />
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{ route('pelanggan.sayembara.create') }}"
                        class="nav-link {{ $active == 'sayembara' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="user" />
                        <p>
                            Sayembara
                        </p>
                    </a>
                </li>
                <li class="nav-header"></li>
                <li class="nav-item">
                    <a href="{{ route('pelanggan.profil') }}"
                        class="nav-link {{ $active == 'profil.index' ? 'active' : '' }}">
                        <x-icon class="nav-icon fas fa-" type="user" />
                        <p>
                            Profil
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
