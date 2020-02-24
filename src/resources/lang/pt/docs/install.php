<?php
return [
    'construct' => [
        'intro' => '__construct()',
        'link' => 'construct',
        'description' => '<p>Let\'s start installing a Genesis project, so you can jump-start to you client requirements.</p>
                <p> The main goal, and case of success, is that you aren\'t forced to make choices then the native language.
                    We are using Win10, it should not change anything, if you run a normal Laravel 6.x, as demonstrated; we also use .xyz in your hosts files (after that Google .dev acquisition)...
                </p>
                <p>Hope can finish the process, that\'s a long list in the menu, but there is are goodies at the end ;)</p>

                <p>We are assuming you are up are running, so just a new Laravel 6.x copy; we usually do:</p>
                <pre><code>D:\Wamp\www\> composer create-project laravel/laravel client</code></pre>
                <p>
                    Just make sure you have <code>app\Http\Controllers\Auth</code>, we do not need the views or routes, but we use standard Auth; if that folder don\'t exist, look at standard <a href="https://laravel.com/docs/6.x/authentication" target="_blank">Laravel 6.x Auth</a>.
                </p>
                <p>We then edit some system files, all standard steps and no need no explanation here.</p>
                <pre><code>C:\Windows\System32\drivers\etc\hosts<br />C:\Users\BeWhy\Homestead\Homestead.yaml<br />D:\Wamp\www\client\.env </code></pre>
                <p>So you would start server, refresh provision (not always needed), and leave local server ready to receive commands... </p>
                <pre><code>C:\Users\BeWhy\Homestead> vagrant up<br />C:\Users\BeWhy\Homestead> vagrant provision<br />C:\Users\BeWhy\Homestead> vagrant ssh<br />vagrant@homestead:~$ cd client</code></pre>
                <p>... and you should have a Laravel copy at <a target="_blank" href="http://client.xyz">http://client.xyz</a>, right? So add Genesis as any package...</p>
                <pre><code>vagrant@homestead:~/client$ composer require bewhy/genesis<br />vagrant@homestead:~/client$ composer update<br />vagrant@homestead:~/client$ php artisan vendor:publish --provider="BeWhy\Genesis\GenesisServiceProvider"</code></pre>
                <p>... and you should have a Genesis copy at <a target="_blank" href="http://client.xyz/genesis">http://client.xyz/genesis</a>, right?</p>
                <p>j/k that\'s why they are called dependencies...</p>'
    ],
    'dependencies' => [
        'intro' => 'Dependencies',
        'link' => 'dependencies',
        'description' => '<p>We will continue our tutorial, by explaining the minimum for you to install and run Genesis. You should access all packages <b>individually</b> for more information.</p>
                <p>Maybe one day, we can get it all in a single command, meanwhile...</p>',

        'tabler' => [
            'name' => 'codecalm/tabler',
            'short' => 'Bootstrap4 Template we build upon.',
            'long' => '<p>We kick-off with something that already has to be include in next version. While building the tutorial, we found the git project; we only had a static copy of it, at version 0.</p>
                <p>That is probably why we left the message at <a href="http://client.xyz/template/genesis/docs/index.html">Client Template</a>; files can be found at <code>public/template/genesis/</code></p>'
        ],
        'debugbar' => [
            'name' => 'barryvdh/laravel-debugbar',
            'short' => 'Adds a cool bar to footer in dev environment with displays of Redirects and (jQuery) Ajax Requests and Queries and more.',
            'long' => '<p>First reason you had to use the --dev on composer command, since will only run at local server; notice an icon on bottom-left? Just run it\'s provider...</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"</code></pre>'
        ],
        'ide-helper' => [
            'name' => 'barryvdh/laravel-ide-helper',
            'short' => 'This package generates a file that your IDE understands, so it can provide accurate auto-completion.',
            'long' => '<p>This will help your IDE map classes and add a better experience developing your code...</p>
                <p>You don\'t have to publish anything, but you should look <a target="_blank" href="https://github.com/barryvdh/laravel-ide-helper#automatic-phpdoc-generation-for-laravel-facades">Automatic phpDoc generation for Laravel Facades</a>, best fit for you...</p>'
        ],
        'activitylog' => [
            'name' => 'spatie/laravel-activitylog',
            'short' => 'Easy to use functions to log the activities of the users of your app.',
            'long' => '<p>Now we start playing with the big-boys! This first package is used to track important activities users might perform in database... This why we might roll-back, and know who to blame, for some server issues...</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Spatie\Activitylog\ActivitylogServiceProvider" --tag="migrations"</code></pre>'
        ],
        'permission' => [
            'name' => 'spatie/laravel-permission',
            'short' => 'Manage user permissions and roles in a database.',
            'long' => '<p>Another great package, you must definitely check his documentation. We based our security on this method, we added some extras, but in Rules section...</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"</code></pre>'
        ],
        'localization' => [
            'name' => 'arcanedev/localization',
            'short' => 'Easy i18n localization for Laravel, an useful tool to combine with Laravel localization classes.',
            'long' => '<p>This might be the package that will give you more head-hakes, and why first test to local site returned errors... But it\'s most important, because it takes care of translations.</p>
                <pre><code>vagrant@homestead:~/client$ php artisan vendor:publish --provider="Arcanedev\Localization\LocalizationServiceProvider"</code></pre>
                <p>We prepared Genesis to run in English & Portuguese, so please check, add any new language prefixe and replicate the <code>resources/lang/</code>:</p>
                <pre><code>// config/localization.php<br /><br />return [ \'supported-locales\'=> [\'en\', \'pt\'], ...</code></pre>
                <p>Also a folder was created inside <code>resources/views/</code> you can delete it.</p>'
        ],
        'html' => [
            'name' => 'laravelcollective/html',
            'short' => 'Official documentation for Forms & Html for The Laravel Framework.',
            'long' => '<p>Another well known package that will help you create Forms... No need no install, just check their doc if you need help build forms...</p>'
        ],
        'image' => [
            'name' => 'intervention/image',
            'short' => 'Intervention Image is an open source PHP image handling and manipulation library.',
            'long' => '<p>For now we are using this support for user avatars... </p>'
        ],

    ],
    'final-wrap' => [
        'intro' => 'Final Wrap',
        'link' => 'final-wrap',
        'description' => '<p>At this point, your local site should be looking much better, <a href="http://client.xyz/genesis/install#content-final-wrap" target="_blank">http://client.xyz/genesis/install</a>, right? </p>
                <p>You just published all your vendor, we still have clean up, and set up database!</p>
                <pre><code>// resources/views/welcome.blade.php         ###replace all code for<br />&#64;include(\'template::genesis.homepage\')<br /><br />vagrant@homestead:~/client$ php artisan database:fresh --seed</code></pre>
                <h4>All Done!</h4>
                <p>Get yourself a coffee and move to Rules chapter...</p>'
    ],
];
