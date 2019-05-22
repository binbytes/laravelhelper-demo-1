<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="/users">
                            <i class="fas fa-user"></i>
                            <span>User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('clients') ? 'active' : '' }}" href="/clients">
                            <i class="fas fa-user"></i>
                            <span>Client</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="/projects">
                            <i class="fas fa-list"></i>
                            <span>Project</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('accounts') ? 'active' : '' }}" href="/accounts">
                            <i class="fas fa-closed-captioning"></i>
                            <span>Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('departments') ? 'active' : '' }}" href="/departments">
                            <i class="fas fa-building"></i>
                            <span>Departments</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
