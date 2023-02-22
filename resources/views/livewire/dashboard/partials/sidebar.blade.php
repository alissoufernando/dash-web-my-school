<nav class="side-menu-area style-two">
    <nav class="sidebar-nav" data-simplebar>
        <ul id="sidebar-menu" class="sidebar-menu">
            <li class="mm-active">
                <a href="{{ route('dashboard') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="{{ asset('assets/dash/images/icon/element.svg') }}" alt="element">
                    </div>
                    <span class="menu-title">Dashboards</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.liste-users') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="{{ asset('assets/dash/images/icon/profile-2user.svg') }}" alt="profile-2user">
                    </div>
                    <span class="menu-title">Utilisateurs</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.liste-ecoles') }}" class="box-style d-flex align-items-center">
                    <div class="icon">
                        <img src="{{ asset('assets/dash/images/icon/profile-2user.svg') }}" alt="profile-2user">
                    </div>
                    <span class="menu-title">Ecoles</span>
                </a>
            </li>

        </ul>
    </nav>
</nav>
