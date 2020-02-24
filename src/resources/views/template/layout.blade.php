
<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
    @include('template::template.partials.header-scripts')
</head>

    <body class="" id="page-top">

        <div class="page">
            <div class="page-main">

                @include('template::template.sections.header')

                @include('template::template.sections.nav')

                <div class="my-3 my-md-5">

                    <div class="container">

                        <div class="page-header">
                            <div class="col-lg-12 px-0">
                                @yield('breadcrumbs')
                            </div>

                            <div class="col-lg-12 px-0">
                                @include('template::template.errors.errors')
                            </div>
                        </div>

                        <div class="row">
                            @yield('main-content')
                        </div>

                    </div>

                </div>

            </div>

            <a id="back-to-top" href="#" class="btn btn-genesis btn-lg back-to-top" role="button" style="display: none;">
                <i class="fa fa-chevron-up"></i>
            </a>
            @include('template::template.sections.footer-helper')

            @include('template::template.sections.footer')

        </div>
        @include('template::template.partials.footer-scripts')

    </body>

</html>
