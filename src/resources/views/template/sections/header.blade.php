<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ route('home') }}" hreflang="{{ app()->getLocale() }}">
                {{ config('app.name') }}
            </a>
            <span class="header-brand-slogan d-none d-lg-block d-lg-flex align-items-center">
                @lang('translation::genesis.main.slogan')
            </span>

            <div class="d-flex order-lg-2 ml-auto" >

                @yield('nav-menu')

                <div class="dropdown d-flex show lang-switcher mr-4">
                    <a class="nav-link icon" data-toggle="dropdown" aria-expanded="true" style="padding:0 .5rem;">
                        <i class="flag flag-{{ app()->getLocale() }}"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        @foreach(config('localization.supported-locales') as $key )
                            <a href="{{ localization()->getLocalizedURL($key) }}" rel="alternate" hreflang="{{ $key  }}" class="dropdown-item d-flex">
                                {{ $key }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown d-flex align-items-center show">
                    <a href="#" class="text-white">
                        <i class="fe fe-lock"></i>
                    </a>
                </div>

            </div>

            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
