@extends('template::template.layout')

@section('header-styles')
    <style>
        .list-group {
            margin-top: 1px;
        }
        .list-sub-group a::before{
            content: '\00F8';
            margin-right: 3px;
        }

    </style>
@endsection

@section('nav-menu')
    <a class="text-white text-uppercase font-weight-bold d-none d-md-none d-lg-block d-lg-flex  align-items-center mr-4" href="{{ route('home') }}">
        @lang('translation::routes.home')
    </a>
    <a class="text-white text-uppercase font-weight-bold d-none d-md-block d-md-flex d-lg-flex align-items-center mr-4" href="{{ route('genesis') }}">
        Genesis
    </a>
@endsection

@section('main-nav')
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link text-capitalize @yield('nav-home')"><i class="fe fe-home"></i> @lang('translation::routes.home')</a>
    </li>
    <li class="nav-item d-md-none">
        <a href="{{ route('genesis') }}" class="nav-link @yield('nav-genesis')"><i class="fe fe-package"></i> Genesis</a>
    </li>
@endsection

@section('nav-genesis','active')
@section('nav-genesis-install','active')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('genesis') }}"><i class="fe fe-package mr-2"></i>@lang('translation::genesis.breadcrumbs.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fe fe-cpu mr-2"></i>@lang('translation::genesis.breadcrumbs.install')</li>
        </ol>
    </nav>
@endsection

@section('main-content')

    <div class="col-lg-3  mb-6">
        <div class="list-group list-group-flush">
            <a href="{{ route('genesis') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-intro')"><i class="fe fe-flag mr-2"></i>@lang('translation::genesis.side-menu.intro.intro')</a>
            <a href="{{ route('genesis.install') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-install')"><i class="fe fe-cpu mr-2"></i>@lang('translation::genesis.side-menu.install.install')</a>
            <div class="list-group list-group-flush ml-2">
                <a href="#content-@lang('translation::docs/install.construct.link')" class="list-group-item list-group-item-action bg-light font-weight-bold">@lang('translation::genesis.side-menu.install.construct')</a>
                <a href="#content-@lang('translation::docs/install.dependencies.link')" class="list-group-item list-group-item-action bg-light font-weight-bold">@lang('translation::genesis.side-menu.install.dependencies')</a>
                <div class="list-group list-group-flush ml-4 list-sub-group">
                    <a href="#content-install-codecalm-tabler" class="list-group-item list-group-item-action bg-light font-italic">codecalm/tabler</a>
                    <a href="#content-install-barryvdh-laravel-debugbar" class="list-group-item list-group-item-action bg-light font-italic">barryvdh/laravel-debugbar</a>
                    <a href="#content-install-barryvdh-laravel-ide-helper" class="list-group-item list-group-item-action bg-light font-italic">barryvdh/laravel-ide-helper</a>
                    <a href="#content-install-spatie-laravel-activitylog" class="list-group-item list-group-item-action bg-light font-italic">spatie/laravel-activitylog</a>
                    <a href="#content-install-spatie-laravel-permission" class="list-group-item list-group-item-action bg-light font-italic">spatie/laravel-permission</a>
                    <a href="#content-install-arcanedev-localization" class="list-group-item list-group-item-action bg-light font-italic">arcanedev/localization</a>
                    <a href="#content-install-laravelcollective-html" class="list-group-item list-group-item-action bg-light font-italic">laravelcollective/html</a>
                    <a href="#content-install-intervention-image" class="list-group-item list-group-item-action bg-light font-italic">intervention/image</a>
                </div>
                <a href="#content-@lang('translation::docs/install.final-wrap.link')" class="list-group-item list-group-item-action bg-light font-weight-bold">@lang('translation::genesis.side-menu.install.final-wrap')</a>
            </div>
            <a href="{{ route('genesis.new') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-new')"><i class="fe fe-command mr-2"></i>@lang('translation::genesis.side-menu.new.new')</a>
            <a href="{{ route('genesis.rules') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-rules')"><i class="fe fe-codepen mr-2"></i>@lang('translation::genesis.side-menu.rules.rules')</a>
            <a href="{{ route('genesis.contributions') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-contributions')"><i class="fe fe-users mr-2"></i>@lang('translation::genesis.side-menu.contributions.contributions')</a>
            <a href="{{ route('genesis.more') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-more')"><i class="fe fe-sunrise mr-2"></i>@lang('translation::genesis.side-menu.more.more')</a>
        </div>
        <a target="_blank" href="https://github.com/bewhy-pt/genesis" class="btn btn-block btn-genesis mt-6">
            <i class="fe fe-github mr-2"></i>@lang('translation::genesis.main.source')
        </a>
    </div>

    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <h2><a id="content-@lang('translation::docs/install.construct.link')" class="anchor" href="#content-@lang('translation::docs/install.construct.link')" rel="nofollow noindex noopener external"></a>@lang('translation::docs/install.construct.intro')</h2>
                @lang('translation::docs/install.construct.description')

                <h2 class="mt-6"><a id="content-@lang('translation::docs/install.dependencies.link')" class="anchor" href="#content-@lang('translation::docs/install.dependencies.link')" rel="nofollow noindex noopener external"></a>@lang('translation::docs/install.dependencies.intro')</h2>
                @lang('translation::docs/install.dependencies.description')

                <h4 class="mt-5"><a id="content-install-codecalm-tabler" class="anchor" href="#content-install-codecalm-tabler" rel="nofollow noindex noopener external"></a>codecalm/tabler</h4>
                <ul>
                    <li><a href="https://github.com/tabler/tabler" target="_blank">codecalm/tabler</a> - @lang('translation::docs/install.dependencies.tabler.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.tabler.long')

                <hr />
                <h4 class="mr-2 d-inline"><a id="content-install-barryvdh-laravel-debugbar" class="anchor" href="#content-install-barryvdh-laravel-debugbar" rel="nofollow noindex noopener external"></a>barryvdh/laravel-debugbar</h4> <span class="tag" style="position: relative;top:-5px;">Dev Mode</span>
                <ul class="mt-2">
                    <li><a  href="https://github.com/barryvdh/laravel-debugbar" target="_blank">barryvdh/laravel-debugbar</a> - @lang('translation::docs/install.dependencies.debugbar.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.debugbar.long')

                <hr />
                <h4 class="mr-2 d-inline"><a id="content-install-barryvdh-laravel-ide-helper" class="anchor" href="#content-install-barryvdh-laravel-ide-helper" rel="nofollow noindex noopener external"></a>barryvdh/laravel-ide-helper</h4>  <span class="tag"style="position: relative;top:-5px;">Dev Mode</span>
                <ul class="mt-2">
                    <li><a  href="https://github.com/barryvdh/laravel-ide-helper" target="_blank">barryvdh/laravel-ide-helper</a> - @lang('translation::docs/install.dependencies.ide-helper.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.ide-helper.long')

                <hr />
                <h4><a id="content-install-spatie-laravel-activitylog" class="anchor" href="#content-install-spatie-laravel-activitylog" rel="nofollow noindex noopener external"></a>spatie/laravel-activitylog</h4>
                <ul>
                    <li><a  href="https://docs.spatie.be/laravel-activitylog/v3/introduction/" target="_blank">spatie/laravel-activitylog</a> - @lang('translation::docs/install.dependencies.activitylog.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.activitylog.long')

                <hr />
                <h4><a id="content-install-spatie-laravel-permission" class="anchor" href="#content-install-spatie-laravel-permission" rel="nofollow noindex noopener external"></a>spatie/laravel-permission</h4>
                <ul>
                    <li><a href="https://docs.spatie.be/laravel-permission/v3/introduction/" target="_blank">spatie/laravel-permission</a> - @lang('translation::docs/install.dependencies.permission.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.permission.long')

                <hr />
                <h4><a id="content-install-arcanedev-localization" class="anchor" href="#content-install-arcanedev-localization" rel="nofollow noindex noopener external"></a>arcanedev/localization</h4>
                <ul>
                    <li><a  href="https://github.com/ARCANEDEV/Localization" target="_blank">arcanedev/localization</a> - @lang('translation::docs/install.dependencies.localization.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.localization.long')
                <hr />
                <h4><a id="content-install-laravelcollective-html" class="anchor" href="#content-install-laravelcollective-html" rel="nofollow noindex noopener external"></a>laravelcollective/html</h4>
                <ul>
                    <li><a href="https://laravelcollective.com/docs/6.0/html" target="_blank">laravelcollective/html</a> - @lang('translation::docs/install.dependencies.html.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.html.long')

                <hr />
                <h4><a id="content-install-intervention-image" class="anchor" href="#content-install-intervention-image" rel="nofollow noindex noopener external"></a>intervention/image</h4>
                <ul>
                    <li><a  href="http://image.intervention.io/" target="_blank">intervention/image</a> - @lang('translation::docs/install.dependencies.image.short')</li>
                </ul>
                @lang('translation::docs/install.dependencies.image.long')

                <hr />

                <h2 class="mt-6"><a id="content-@lang('translation::docs/install.final-wrap.link')" class="anchor" href="#content-@lang('translation::docs/install.final-wrap.link')" rel="nofollow noindex noopener external"></a>@lang('translation::docs/install.final-wrap.intro')</h2>
                @lang('translation::docs/install.final-wrap.description')

            </div>
        </div>
    </div>
@endsection
