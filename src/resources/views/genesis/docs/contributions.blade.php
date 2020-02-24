@extends('template::template.layout')

@section('nav-genesis','active')
@section('nav-genesis-contributions','active')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('genesis') }}"><i class="fe fe-package mr-2"></i>@lang('translation::genesis.breadcrumbs.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fe fe-users mr-2"></i>@lang('translation::genesis.breadcrumbs.contributions')</li>
        </ol>
    </nav>
@endsection

@section('main-content')
    <div class="col-lg-3 mb-6">

        <div class="list-group list-group-flush">
            <a href="{{ route('genesis') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-intro')"><i class="fe fe-flag mr-2"></i> @lang('translation::genesis.side-menu.intro.intro')</a>
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
            <div class="card-body">

            </div>
        </div>
    </div>

@endsection
