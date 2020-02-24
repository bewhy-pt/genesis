
@extends('template::template.layout')

@section('nav-home','active')

@section('header-styles')
<style>

    .content {
        text-align: center;
    }
    .title {
        font-size: 84px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
    }
</style>
@endsection

@section('main-content')

    <div class="d-flex justify-content-center w-100 align-items-center " style="height: 55vh">

        <div class="content ">
            <div class="alert alert-icon alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"></button>
                <i class="fe fe-alert-triangle mr-2" aria-hidden="true"></i> @lang('translation::genesis.main.home-test')
            </div>

            <div class="title m-b-md">
                Laravel + Genesis
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
@endsection
