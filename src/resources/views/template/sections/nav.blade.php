<div class="collapse d-lg-flex p-0" id="headerMenuCollapse">

    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-3 d-none d-sm-none d-md-block ml-auto">

                @yield('nav-option')

            </div>
            <div class="col-lg order-lg-first d-block d-sm-block d-md-block d-lg-none">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">

                    @yield('main-nav')

                </ul>
            </div>
        </div>

    </div>
</div>
