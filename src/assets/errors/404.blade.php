IH IH
{{--
@if(Auth::check())
    @include('backend.template.errors.404')
@else
    @if(config('app.genesis') == true)
        @include('frontend.genesis.pages.404')
    @else
        @include('frontend.'.config('app.name').'.pages.404')
    @endif
@endif
--}}
