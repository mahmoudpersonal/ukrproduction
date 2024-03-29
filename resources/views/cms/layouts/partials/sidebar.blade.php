<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/UKRO_02.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">--}}
{{--                            <i class="ni ni-shop text-primary"></i>--}}
{{--                            <span class="nav-link-text">Dashboards</span>--}}
{{--                        </a>--}}
{{--                        <div class="collapse" id="navbar-dashboards">--}}
{{--                            <ul class="nav nav-sm flex-column">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../dashboards/dashboard.html" class="nav-link">Dashboard</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../dashboards/alternative.html" class="nav-link">Alternative</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">--}}
{{--                            <i class="ni ni-ungroup text-orange"></i>--}}
{{--                            <span class="nav-link-text">Examples</span>--}}
{{--                        </a>--}}
{{--                        <div class="collapse" id="navbar-examples">--}}
{{--                            <ul class="nav nav-sm flex-column">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../examples/pricing.html" class="nav-link">Pricing</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../examples/login.html" class="nav-link">Login</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../examples/register.html" class="nav-link">Register</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../examples/lock.html" class="nav-link">Lock</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../examples/timeline.html" class="nav-link">Timeline</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../examples/profile.html" class="nav-link">Profile</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">--}}
{{--                            <i class="ni ni-ui-04 text-info"></i>--}}
{{--                            <span class="nav-link-text">Components</span>--}}
{{--                        </a>--}}
{{--                        <div class="collapse" id="navbar-components">--}}
{{--                            <ul class="nav nav-sm flex-column">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../components/buttons.html" class="nav-link">Buttons</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../components/cards.html" class="nav-link">Cards</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../components/grid.html" class="nav-link">Grid</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../components/notifications.html" class="nav-link">Notifications</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../components/icons.html" class="nav-link">Icons</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../components/typography.html" class="nav-link">Typography</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Multi level</a>--}}
{{--                                    <div class="collapse show" id="navbar-multilevel" style="">--}}
{{--                                        <ul class="nav nav-sm flex-column">--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="#!" class="nav-link ">Third level menu</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="#!" class="nav-link ">Just another link</a>--}}
{{--                                            </li>--}}
{{--                                            <li class="nav-item">--}}
{{--                                                <a href="#!" class="nav-link ">One last link</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-forms">--}}
{{--                            <i class="ni ni-single-copy-04 text-pink"></i>--}}
{{--                            <span class="nav-link-text">Forms</span>--}}
{{--                        </a>--}}
{{--                        <div class="collapse show" id="navbar-forms">--}}
{{--                            <ul class="nav nav-sm flex-column">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="elements.html" class="nav-link active">Elements</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="components.html" class="nav-link">Components</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="validation.html" class="nav-link">Validation</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">--}}
{{--                            <i class="ni ni-map-big text-primary"></i>--}}
{{--                            <span class="nav-link-text">Maps</span>--}}
{{--                        </a>--}}
{{--                        <div class="collapse" id="navbar-maps">--}}
{{--                            <ul class="nav nav-sm flex-column">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../maps/google.html" class="nav-link">Google</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="../maps/vector.html" class="nav-link">Vector</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('study.index') }}">
                            <i class="ni ni-books text-green"></i>
                            <span class="nav-link-text">Studies</span>
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('report.index') }}">--}}
{{--                            <i class="ni ni-paper-diploma text-info"></i>--}}
{{--                            <span class="nav-link-text">Reports</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            <i class="ni ni-calendar-grid-58 text-red"></i>
                            <span class="nav-link-text">Radiologist</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patient.index') }}">
                            <i class="ni ni-single-02 text-black-50"></i>
                            <span class="nav-link-text">Patients</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('center.index') }}">
                            <i class="ni ni-building text-blue"></i>
                            <span class="nav-link-text">Centers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                            <i class="ni ni-settings-gear-65 text-default"></i>
                            <span class="nav-link-text">Static Information</span>
                        </a>
                        <div class="collapse" id="navbar-tables">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('country.index') }}" class="nav-link">Countries</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('city.index') }}" class="nav-link">Cities</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('area.index') }}" class="nav-link">Areas</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('language.index') }}" class="nav-link">Language Management</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
{{--                <!-- Divider -->--}}
{{--                <hr class="my-3">--}}
{{--                <!-- Heading -->--}}
{{--                <h6 class="navbar-heading p-0 text-muted">Documentation</h6>--}}
{{--                <!-- Navigation -->--}}
{{--                <ul class="navbar-nav mb-md-3">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="../../docs/getting-started/overview.html" target="_blank">--}}
{{--                            <i class="ni ni-spaceship"></i>--}}
{{--                            <span class="nav-link-text">Getting started</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="../../docs/foundation/colors.html" target="_blank">--}}
{{--                            <i class="ni ni-palette"></i>--}}
{{--                            <span class="nav-link-text">Foundation</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="../../docs/components/alerts.html" target="_blank">--}}
{{--                            <i class="ni ni-ui-04"></i>--}}
{{--                            <span class="nav-link-text">Components</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="../../docs/plugins/charts.html" target="_blank">--}}
{{--                            <i class="ni ni-chart-pie-35"></i>--}}
{{--                            <span class="nav-link-text">Plugins</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </div>
</nav>
