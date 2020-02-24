<?php
return [
    'greetings' => [
        'intro' => 'Saudações,',
        'link' => 'ola',
        'description' => '<p>"Jumping" cordialities, this git should <strong>not</strong> be <em>public</em>, but two decades of personal experience are culminating in this project experiment. Has a developer/analyst, which had the honor to initialize server<strong>s</strong>, and project\'s mentor, wanted to add that the main goal
                    is to design a code architecture, which will enable:</p>
                <ul>
                    <li>Avoiding repetition of ANY  standard code in new client projects, eg. login;
                        <ul>
                            <li>this login also reflects roles and permissions, and it\'s own management, all in due time;</li>
                        </ul>
                    </li>
                    <li>Any new client project is an opportunity or to review code, add missing function, or even create a new inner-stack;
                        <ul>
                            <li>new clients bring more code to Genesis, and this architecture will spread to all running Genesis clients, eg. one billing becomes all billing;</li>
                        </ul>
                    </li>
                    <li>Present day DevOps allows multi-layers of code access and responsibilities:
                        <ul>
                            <li>while seniors are back-back-office (Genesis), juniors can focus on client code-folders, we can position specialists on it\'s folder/stack.</li>
                        </ul>
                    </li>
                </ul>
                <p>We don\'t want to bring one more PHP-framework to the ecosystem, nor market Genesis has as it\'s own "trademark", but it is our professional tool-box that implement businesses at BeWhy!</p>
                <p>It was stated that <strong>shouldn\'t</strong> be public, since is real code in real servers... That is one mind-set! Is it ours???
                    We only got here with a lot of help from the <em>open-source</em> community, and as we will see later, we still use other people\'s code as dependencies...</p>
                <p>BeWhy, more then a company is an ideology, and Genesis is a commitment to a chosen path...</p>
                <br />'
    ],

    'start' => [
        'intro' => 'Introdução',
        'link'  => 'intro',
        'description' => '<p>It wasn\'t stated before, but Genesis is not a full-on WebFramework, we are not re-inventing the wheel in every front! We are just following several best practices in one full-stack "development-result" structure.</p>
                <p>At this point, you should understand that complete tutorial is at our homepage: <a href="https://bewhy.org/genesis" rel="nofollow noindex noopener external">BeWhy Genesis</a>, but we only provide support to our corporate clients.</p>
                <p>Genesis, itself does not work, so no use for you to clone or download <strong>git</strong>. Genesis will only interact with our chosen MVC, <a href="https://laravel.com" rel="nofollow noindex noopener external">Laravel 6.x</a>.</p>
                <br />'
    ],

    'prerequisites' => [
        'intro' => 'Prerequisitos',
        'link'  => 'prerequisitos',
        'description' => '<p>As previous stated, Genesis is a tool-box with many components, which jump-start any project from 0 to deploy in <em>no-time</em>.</p>
                <p><em>Check complete tutorial page: <a href="https://bewhy.org/genesis" rel="nofollow noindex noopener external">BeWhy Genesis</a> or under <a href="#user-content-built-with" rel="nofollow noindex noopener external">Built With</a> and <a href="#user-content-versioning" rel="nofollow noindex noopener external">Versioning</a> chapters.</em></p>
                <p>The only prerequisite is <a href="https://laravel.com" rel="nofollow noindex noopener external">Laravel 6.x</a>, your chosen dev environment and brain, the ladder is important...</p>
                <p>Case you didn\'t drink enough coffee yet, <strong>installing Laravel Environment is a must!</strong></p>
                <ul>
                    <li>First: <a href="https://laravel.com/docs/6.x/homestead" rel="nofollow noindex noopener external">Homestead</a></li>
                    <li>Then: <a href="https://laravel.com/docs/6.x/installation" rel="nofollow noindex noopener external">Laravel Install</a></li>
                </ul>
                <p>Before continuing our tutorial, check your local site is okey!</p>
                <p>It\'s mandatory, at this point, you gave some experience under Laravel, and know the tricks around files like:</p>
                <pre><code>Homestead.yaml &amp;&amp; \etc\hosts &amp;&amp; .env</code></pre>
                <p>And you have your local server and composer updated...</p>
                <br />'
    ],

    'built-with' => [
        'intro' => 'Construído Com',
        'link' => 'construcao',
        'description' => '<p>We need to reference the following amazing teams, for their code, inspiration and contribution to world\'s coding community. We hope we will be worthy on following your legacy and improve on it.</p>
                <p>For now all glory should go to:</p>
                <ul>
                    <li><a href="https://github.com/tabler/tabler" target="_blank">codecalm/tabler</a> - Bootstrap4 Template we build upon.</li>
                    <li><a href="https://github.com/ARCANEDEV/Localization" target="_blank">arcanedev/localization</a> - Easy i18n localization for Laravel, an useful tool to combine with Laravel localization classes.</li>
                    <li><a href="https://laravelcollective.com/docs/6.0/html" target="_blank">laravelcollective/html</a> - Official documentation for Forms & Html for The Laravel Framework.</li>
                    <li><a href="https://docs.spatie.be/laravel-activitylog/v3/introduction/" target="_blank">spatie/laravel-activitylog</a> - Easy to use functions to log the activities of the users of your app.</li>
                    <li><a href="https://docs.spatie.be/laravel-permission/v3/introduction/" target="_blank">spatie/laravel-permission</a> - Manage user permissions and roles in a database.</li>
                    <li><a href="https://github.com/barryvdh/laravel-debugbar" target="_blank">barryvdh/laravel-debugbar</a> - Adds a cool bar to footer in dev environment with displays of Redirects and (jQuery) Ajax Requests and Queries and more.</li>
                    <li><a href="https://github.com/barryvdh/laravel-ide-helper" target="_blank">barryvdh/laravel-ide-helper</a> - This package generates a file that your IDE understands, so it can provide accurate auto-completion.</li>
                    <li><a href="http://image.intervention.io/" target="_blank">intervention/image</a> - Intervention Image is an open source PHP image handling and manipulation library.</li>
                </ul>
                <p>Next topic we will see how to install all this in a couple of simple step\'s, and we will dive into examples how to interact will Genesis.</p>'
    ],


];
