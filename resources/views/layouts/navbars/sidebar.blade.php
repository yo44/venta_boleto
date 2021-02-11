<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Black Dashboard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($activePage == 'dashboard') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Crear Usuario') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Laravel Examples') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($activePage == 'profile') class="active " @endif>
                            <a href="{{ route('boleto.index') }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Pasajes') }}</p>
                            </a>
                        </li>
                        <li @if ($activePage == 'users') class="active " @endif>
                            <a href="{{ route('users.index') }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($activePage == 'icons') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li @if ($activePage == 'maps') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li @if ($activePage == 'notifications') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li @if ($activePage == 'tables') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($activePage == 'typography') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($activePage == 'rtl') class="active " @endif>
                <a href="#">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $activePage == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="#">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
