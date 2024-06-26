@section('navBar')

    <nav class="
navbar navbar-expand-lg navbar-transparent navbar-absolute
fixed-top
">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                {{-- <a class="navbar-brand" href="javascript:;">Dashboard</a> --}}
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse">
                <form class="navbar-form">
                    <div class="input-group custom-input no-border">
                        <input type="text" value="" class="form-control" placeholder="Search..." />
                        <button type="submit" class="btn btn-danger btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            {{-- <span class="notification">5</span> --}}
                            <p class="d-lg-none d-md-block">Some Actions</p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">No notification</a>

                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">Account</p>
                            <span class="hide-arrow-admin-text">
                                Hello {{ auth()->user()->name }}!
                                <i class="material-icons">arrow_drop_down</i>
                            </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="{{ route('dashboard.user-profile') }}">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@show
