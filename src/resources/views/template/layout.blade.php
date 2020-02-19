
<!doctype html>
<html lang="pt" dir="ltr">
<head>
    @include('template::template.partials.header-scripts')
</head>

<body class="">

    <div class="page">
        <div class="page-main">

            @include('template::template.sections.header')
            @include('template::template.sections.nav')

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        @yield('breadcrumbs')
                    </div>
                    <div class="row">

                        @include('template::template.errors.errors')

                        @yield('main-content')
                    </div>
                </div>
            </div>

        </div>

        @include('template::template.sections.footer-helper')

        @include('template::template.sections.footer')

    </div>
    @include('template::template.partials.footer-scripts')
</body>
</html>
