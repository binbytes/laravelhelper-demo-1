<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="/">
                <img src="{{ asset('images/tabler.png') }}" class="header-brand-img" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar"></span>
                        <span class="ml-2 d-none d-lg-block">
                  <span class="text-default">Jane Pearson</span>
                  <small class="text-muted d-block mt-1">Administrator</small>
                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="{{ route('users.edit', auth()->user()) }}">
                            <i class="dropdown-icon fas fa-user"></i>My Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="dropdown-icon fas fa-sign-out-alt"></i> Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
