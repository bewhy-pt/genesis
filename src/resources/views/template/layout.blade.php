
<!doctype html>
<html lang="pt" dir="ltr">
<head>
    @include('template::template.partials.header-scripts')
</head>

<body class="">

    <div class="page">
        <div class="page-main">

            @include('template::template.sections.header')
            @auth
                @include('template::template.sections.nav')
            @endauth

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        @include('template::template.errors.errors')
                        @yield('breadcrumbs')
                    </div>
                    <div class="row">


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
