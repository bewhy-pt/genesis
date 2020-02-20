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

@section('nav-genesis-install','active')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('genesis') }}"><i class="fe fe-package mr-3"></i>Genesis</a></li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fe fe-cpu mr-2"></i>Install</li>
        </ol>
    </nav>
@endsection

@section('main-content')
    <div class="col-lg-3">
        <div class="list-group list-group-flush">
            <a href="{{ route('genesis') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-intro')"><i class="fe fe-flag mr-2"></i>Intro</a>
            <a href="{{ route('genesis.install') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-install')"><i class="fe fe-cpu mr-2"></i>Install</a>
            <div class="list-group list-group-flush ml-2">
                <a href="#user-content-construct" class="list-group-item list-group-item-action bg-light font-weight-bold">__construct()</a>
                <a href="#user-content-dependencies" class="list-group-item list-group-item-action bg-light font-weight-bold">Dependencies</a>
                <div class="list-group list-group-flush ml-4 list-sub-group">
                    <a href="#user-content-install-codecalm-tabler" class="list-group-item list-group-item-action bg-light font-italic">codecalm/tabler</a>
                    <a href="#user-content-install-barryvdh-laravel-debugbar" class="list-group-item list-group-item-action bg-light font-italic">barryvdh/laravel-debugbar</a>
                    <a href="#user-content-install-barryvdh-laravel-ide-helper" class="list-group-item list-group-item-action bg-light font-italic">barryvdh/laravel-ide-helper</a>
                    <a href="#user-content-install-spatie-laravel-activitylog" class="list-group-item list-group-item-action bg-light font-italic">spatie/laravel-activitylog</a>
                    <a href="#user-content-install-spatie-laravel-permission" class="list-group-item list-group-item-action bg-light font-italic">spatie/laravel-permission</a>
                    <a href="#user-content-install-arcanedev-localization" class="list-group-item list-group-item-action bg-light font-italic">arcanedev/localization</a>
                    <a href="#user-content-install-laravelcollective-html" class="list-group-item list-group-item-action bg-light font-italic">laravelcollective/html</a>
                    <a href="#user-content-install-intervention-image" class="list-group-item list-group-item-action bg-light font-italic">intervention/image</a>
                </div>
                <a href="#user-content-final-wrap" class="list-group-item list-group-item-action bg-light font-weight-bold">Final Wrap</a>
            </div>
            <a href="{{ route('genesis.rules') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-rules')"><i class="fe fe-codepen mr-2"></i>Rules</a>
            <a href="{{ route('genesis.contributions') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-contributions')">Contributions</a>
            <a href="{{ route('genesis.more') }}" class="list-group-item list-group-item-action bg-transparent @yield('nav-genesis-more')">More</a>
        </div>
        <a target="_blank" href="https://github.com/bewhy-pt/genesis" class="btn btn-block btn-genesis mt-6">
            <i class="fe fe-github mr-2"></i>Browse source code
        </a>
    </div>

    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <h2><a id="user-content-construct" class="anchor" href="#user-content-construct" rel="nofollow noindex noopener external"></a>__construct()</h2>

                <p>Let's start installing a Genesis project, so you can jump-start to you client requirements.</p>
                <p> The main goal, and case of success, is that you aren't forced to make choices then the native language.
                    We are using Win10, it should not change anything, if you run a normal Laravel 6.x, as demonstrated; we also use .xyz in your hosts files (after that Google .dev acquisition)...
                </p>
                <p>Hope can finish the process, that's a long list in the menu, but there is are goodies at the end ;)</p>

                <p>We are assuming you are up are running, so just a new Laravel 6.x copy; we usually do:</p>
                <pre><code>D:\Wamp\www\> composer create-project laravel/genesis client</code></pre>
                <p>
                    Just make sure you have <code>client\app\Http\Controllers\Auth</code>, we do not need the views or routes, but we use standard Auth; if that folder don't exist, look at standard <a href="https://laravel.com/docs/6.x/authentication" target="_blank">Laravel 6.x Auth</a>.
                </p>
                <p>We then edit some system files, all standard steps and no need no explanation here.</p>
                <pre><code>C:\Windows\System32\drivers\etc\hosts<br />C:\Users\BeWhy\Homestead\Homestead.yaml<br />D:\Wamp\www\client\.env </code></pre>
                <p>So you would start server, refresh provision (not always needed), and leave local server ready to receive commands... </p>
                <pre><code>C:\Users\BeWhy\Homestead> vagrant up<br />C:\Users\BeWhy\Homestead> vagrant provision<br />C:\Users\BeWhy\Homestead> vagrant ssh<br />vagrant@homestead:~$ cd client</code></pre>
                <p>... and you should have a Laravel copy at <a target="_blank" href="http://client.xyz">http://client.xyz</a>, right? So add Genesis as any package...</p>
                <pre><code>vagrant@homestead:~/client$ composer require bewhy/genesis --dev<br />vagrant@homestead:~/client$ composer update<br />vagrant@homestead:~/client$ php artisan vendor:publish --provider="BeWhy\Genesis\GenesisServiceProvider"</code></pre>
                <p>... and you should have a Genesis copy at <a target="_blank" href="http://client.xyz/genesis">http://client.xyz/genesis</a>, right?</p>
                <p>j/k that's why they are called dependencies...</p>


                <h2 class="mt-6"><a id="user-content-dependencies" class="anchor" href="#user-content-dependencies" rel="nofollow noindex noopener external"></a>Dependencies</h2>
                <p>We will continue our tutorial, by explaining the minimum for you to install and run Genesis. You should access all packages <b>individually</b> for more information.</p>
                <p>Maybe one day, we can get it all in a single command, meanwhile...</p>
                <h4 class="mt-5"><a id="user-content-install-codecalm-tabler" class="anchor" href="#user-content-install-codecalm-tabler" rel="nofollow noindex noopener external"></a>codecalm/tabler</h4>
                <ul>
                    <li><a class="anchor" href="https://github.com/tabler/tabler" target="_blank">codecalm/tabler</a> - Bootstrap4 Template we build upon.</li>
                </ul>
                <p>We kick-off with something that already has to be include in next version. While building the tutorial, we found the git project; we only had a static copy of it, at version 0.</p>
                <p>That is probably why we left the message at <a href="http://client.xyz/template/genesis/docs/index.html">Client Template</a>; files can be found at <code>public/template/genesis/</code></p>

                <hr />
                <h4 class="mr-2 d-inline"><a id="user-content-install-barryvdh-laravel-debugbar" class="anchor" href="#user-content-install-barryvdh-laravel-debugbar" rel="nofollow noindex noopener external"></a>barryvdh/laravel-debugbar</h4> <span class="tag" style="position: relative;top:-5px;">Dev Mode</span>
                <ul class="mt-2">
                    <li><a class="anchor" href="https://github.com/barryvdh/laravel-debugbar" target="_blank">barryvdh/laravel-debugbar</a> - Adds a cool bar to footer in dev environment with displays of Redirects and (jQuery) Ajax Requests and Queries and more.</li>
                </ul>
                <p>First reason you had to use the --dev on composer command, since will only run at local server; notice an icon on bottom-left? Just run it's provider...</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"</code></pre>

                <hr />
                <h4 class="mr-2 d-inline"><a id="user-content-install-barryvdh-laravel-ide-helper" class="anchor" href="#user-content-install-barryvdh-laravel-ide-helper" rel="nofollow noindex noopener external"></a>barryvdh/laravel-ide-helper</h4>  <span class="tag"style="position: relative;top:-5px;">Dev Mode</span>
                <ul class="mt-2">
                    <li><a class="anchor" href="https://github.com/barryvdh/laravel-ide-helper" target="_blank">barryvdh/laravel-ide-helper</a> - This package generates a file that your IDE understands, so it can provide accurate auto-completion.</li>
                </ul>
                <p>Second reason you had to use the --dev on composer command, this will help your IDE map classes and add a better experience developing your code...</p>
                <p>You don't have to publish anything, but you should look <a target="_blank" href="https://github.com/barryvdh/laravel-ide-helper#automatic-phpdoc-generation-for-laravel-facades">Automatic phpDoc generation for Laravel Facades</a>, best fit for you...</p>

                <hr />
                <h4><a id="user-content-install-spatie-laravel-activitylog" class="anchor" href="#user-content-install-spatie-laravel-activitylog" rel="nofollow noindex noopener external"></a>spatie/laravel-activitylog</h4>
                <ul>
                    <li><a class="anchor" href="https://docs.spatie.be/laravel-activitylog/v3/introduction/" target="_blank">spatie/laravel-activitylog</a> - Easy to use functions to log the activities of the users of your app.</li>
                </ul>
                <p>Now we start playing with the big-boys! This first package is used to track important activities users might perform in database... This why we might roll-back, and know who to blame, for some server issues...</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="migrations"</code></pre>

                <hr />
                <h4><a id="user-content-install-spatie-laravel-permission" class="anchor" href="#user-content-install-spatie-laravel-permission" rel="nofollow noindex noopener external"></a>spatie/laravel-permission</h4>
                <ul>
                    <li><a class="anchor" href="https://docs.spatie.be/laravel-permission/v3/introduction/" target="_blank">spatie/laravel-permission</a> - Manage user permissions and roles in a database.</li>
                </ul>
                <p>Another great package, you must definitely check his documentation. We based our security on this method, we added some extras, but in Rules section...</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"</code></pre>

                <hr />
                <h4><a id="user-content-install-arcanedev-localization" class="anchor" href="#user-content-install-arcanedev-localization" rel="nofollow noindex noopener external"></a>arcanedev/localization</h4>
                <ul>
                    <li><a class="anchor" href="https://github.com/ARCANEDEV/Localization" target="_blank">arcanedev/localization</a> - Easy i18n localization for Laravel, an useful tool to combine with Laravel localization classes.</li>
                </ul>
                <p>This might be the package that will give you more head-hakes, and why first test to local site returned errors... But it's most important, because it takes care of translations.</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Arcanedev\Localization\LocalizationServiceProvider"</code></pre>
                <p>We prepared Genesis to run in English & Portuguese, so please check, add any new language prefixe and replicate the <code>resources/lang/</code>:</p>
                <pre><code>// config/localization.php<br /><br />return [ 'supported-locales'=> ['en', 'pt'], ...</code></pre>
                <p>Also a folder was created inside <code>resources/views/</code> you can delete it.</p>

                <hr />
                <h4><a id="user-content-install-laravelcollective-html" class="anchor" href="#user-content-install-laravelcollective-html" rel="nofollow noindex noopener external"></a>laravelcollective/html</h4>
                <ul>
                    <li><a class="anchor" href="https://laravelcollective.com/docs/6.0/html" target="_blank">laravelcollective/html</a> - Official documentation for Forms & Html for The Laravel Framework.</li>
                </ul>
                <p>Another well known package that will help you create Forms... No need no install, just check their doc if you need help build forms...</p>

                <hr />
                <h4><a id="user-content-install-intervention-image" class="anchor" href="#user-content-install-intervention-image" rel="nofollow noindex noopener external"></a>intervention/image</h4>
                <ul>
                    <li><a class="anchor" href="http://image.intervention.io/" target="_blank">intervention/image</a> - Intervention Image is an open source PHP image handling and manipulation library.</li>
                </ul>
                <p>For now we are using this support for user avatars... </p>

                <hr />

                <h2 class="mt-6"><a id="user-content-final-wrap" class="anchor" href="#user-content-final-wrap" rel="nofollow noindex noopener external"></a>Final Wrap</h2>
                <p>At this point, your local site should be looking much better, <a href="http://client.xyz/genesis/install#user-content-final-wrap" target="_blank">http://client.xyz/genesis/install</a>, right? </p>
                <p>You just published all your vendor, we still have clean up, and set up database!</p>
                <pre><code>// resources/views/welcome.blade.php         ###replace all code for<br />&#64;include('template::genesis.homepage')<br /><br />vagrant@homestead:~/client$ php artisan database:fresh --seed</code></pre>
                <h4>All Done!</h4>
                <p>Get yourself a coffee and move to Rules chapter...</p>
            </div>
        </div>
    </div>
@endsection
