@extends('template::template.layout')


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
@section('nav-genesis-intro','active')


@section('breadcrumbs')

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><i class="fe fe-package mr-2"></i>@lang('translation::genesis.breadcrumbs.home')</li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fe fe-flag mr-2"></i>@lang('translation::genesis.breadcrumbs.intro')</li>
        </ol>
    </nav>
@endsection

@section('main-content')
    <div class="col-lg-3 mb-6">

        <div class="list-group list-group-flush">
            <a href="{{ route('genesis') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-intro')"><i class="fe fe-flag mr-2"></i> @lang('translation::genesis.side-menu.intro.intro')</a>
            <div class="list-group list-group-flush ml-2">
                <a href="#content-@lang('translation::docs/index.greetings.link')" class="list-group-item list-group-item-action bg-light font-weight-bold"> @lang('translation::genesis.side-menu.intro.hi')</a>
                <a href="#content-@lang('translation::docs/index.start.link')" class="list-group-item list-group-item-action bg-light font-weight-bold"> @lang('translation::genesis.side-menu.intro.start')</a>
                <a href="#content-@lang('translation::docs/index.prerequisites.link')" class="list-group-item list-group-item-action bg-light font-weight-bold"> @lang('translation::genesis.side-menu.intro.prerequisites')</a>
                <a href="#content-@lang('translation::docs/index.built-with.link')" class="list-group-item list-group-item-action bg-light font-weight-bold"> @lang('translation::genesis.side-menu.intro.built-with')</a>
            </div>
            <a href="{{ route('genesis.install') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-install')"><i class="fe fe-cpu mr-2"></i>@lang('translation::genesis.side-menu.install.install')</a>
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
            <div class="card-body ">
                <h2><a id="content-@lang('translation::docs/index.greetings.link')" class="anchor" href="#content-@lang('translation::docs/index.greetings.link')" rel="nofollow noindex noopener external"></a>@lang('translation::docs/index.greetings.intro')</h2>
                @lang('translation::docs/index.greetings.description')

                <h3><a id="content-@lang('translation::docs/index.start.link')" class="anchor" href="#content-@lang('translation::docs/index.start.link')" rel="nofollow noindex noopener external"></a>@lang('translation::docs/index.start.intro')</h3>
                @lang('translation::docs/index.start.description')

                <h3><a id="content-@lang('translation::docs/index.prerequisites.link')" class="anchor" href="#content-@lang('translation::docs/index.prerequisites.link')" rel="nofollow noindex noopener external"></a>@lang('translation::docs/index.prerequisites.intro')</h3>
                @lang('translation::docs/index.prerequisites.description')

                <h3><a id="content-@lang('translation::docs/index.built-with.link')" class="anchor" href="#content-@lang('translation::docs/index.built-with.link')" rel="nofollow noindex noopener external"></a>@lang('translation::docs/index.built-with.intro')</h3>
                @lang('translation::docs/index.built-with.description')
            </div>
        </div>

    </div>

@endsection
