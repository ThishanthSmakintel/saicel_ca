@section('sidebar')
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="">
        <div class="logo">
            <a href="{{ route('home-page') }}" class="simple-text logo-normal">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid" style="max-height: 40px;">
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">
                        <img class="mr-2" src="{{ asset('dashboard/img/ic_view_quilt_24px.png') }}" />
                        Dashboard
                    </a>
                </li>
                <!-- Your Blade View File -->

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.products.viewAllProducts') }}">
                        <img class="mr-2" src="{{ asset('dashboard/img/Group 1380.png') }}" />
                        Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.received-messages') }}">
                        <img class="mr-2" src="{{ asset('dashboard/img/Group 1380.png') }}" />
                        Received Messages
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/flat') }}">
                        <img class="mr-2" src="{{ asset('dashboard/img/Group 1381.png') }}" />
                        Flat
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user-profile') }}">
                        <img class="mr-2" src="{{ asset('dashboard/img/Group 1380.png') }}" />
                        Tenant
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/utility') }}">
                        <img class="mr-2" src="{{ asset('dashboard/img/Group 1385.png') }}" />
                        Utility
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">
                        <img class="mr-2" src="{{ asset('dashboard/img/Group 1382.png') }}" />
                        Login
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
@show
