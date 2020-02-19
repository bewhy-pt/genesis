<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 ml-auto my-2">
            {{--
                Where search is on default template
            --}}
            </div>
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link @yield('nav-home')"><i class="fe fe-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('genesis') }}" class="nav-link @yield('nav-genesis')"><i class="fe fe-home"></i> Genesis</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
