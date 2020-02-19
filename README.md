# BeWhy Genesis
Hi,

"Jumping" cordialities, this git should **not** be *public*, but two decades of personal experience are culminating in this project experiment. Has a developer/analyst, which had the honor to initialize server**s**, and project's mentor, wanted to add that the main goal 
is to design a code architecture, which will enable: 
- Avoiding repetition of ANY  standard code in new client projects, eg. login;
  - this login also reflects roles and permissions, and it's own management, all in due time;  
- Any new client project is an opportunity or to review code, add missing function, or even create a new inner-stack;
  - new clients bring more code to Genesis, and this architecture will spread to all running Genesis clients, eg. one billing becomes all billing;  
- Present day DevOps allows multi-layers of code access and responsibilities:
  - while seniors are back-back-office (Genesis), juniors can focus on client code-folders, we can position specialists on it's folder/stack.

We don't want to bring one more PHP-framework to the ecosystem, nor market Genesis has as it's own "trademark", but it is our professional tool-box that implement businesses at BeWhy!

It was stated that **shouldn't** be public, since is real code in real servers... That is one mind-set! Is it ours??? 
We only got here with a lot of help from the *open-source* community, and as we will see later, we still use other people's code as dependencies... 

BeWhy, more then a company is an ideology, and Genesis is a commitment to a chosen path...



## Getting Started
It wasn't stated before, but Genesis is not a full-on WebFramework, we are not re-inventing the wheel in every front! We are just following several best practices in one full-stack "development-result" structure.

At this point, you should understand that complete tutorial is at our homepage: [BeWhy Genesis](https://bewhy.org/genesis), but we only provide support to our corporate clients.

Genesis, itself does not work, so no use for you to clone or download **git**. Genesis will only interact with our chosen MVC, [Laravel 6.x](https://laravel.com). 


### Prerequisites
As previous stated, Genesis is a tool-box with many components, which jump-start any project from 0 to deploy in *no-time*. 

*Check complete tutorial page: [BeWhy Genesis](https://bewhy.org/genesis) or under [Built With](#built-with) and [Versioning](#versioning) chapters.*

The only prerequisite is [Laravel 6.x](https://laravel.com), your chosen dev environment and brain, the ladder is important...

Case you didn't drink enough coffee yet, **installing Laravel Environment is a must!** 
- First: [Homestead](https://laravel.com/docs/6.x/homestead)
- Then: [Laravel Install](https://laravel.com/docs/6.x/installation)

Before continuing our tutorial, check your local site is okey! 

It's mandatory, at this point, you gave some experience under Laravel, and know the tricks around files like:
```
    Homestead.yaml && \etc\hosts && .env
```
And you have your local server and composer updated... 
Ready, set, go???


### Installing
Just start, a new Laravel Project... One way would be:
```
    composer create-project laravel/genesis client
```
You should have a minimum Laravel running at http://client.xyz 

Run something like (depending on your SO, and prior configs)
```
    vagrant ssh    #connect to your server
    cd client      #go to you new project
    composer require bewhy/genesis
    composer update
```
A huge log will ensure, it is importing Genesis, our code plus our requirements.... The *open-source* motive again! Just let it finish, hopefully everything ends in success, and we keep our bond of trust! 

Before moving to next chapter, you will need to run
```
    php artisan vendor:publish --provider="BeWhy\Genesis\GenesisServiceProvider" --tag="assets"
``` 
This will enable template to be copy to: *public/template/genesis/docs/index.html*, so if you have no styles, this might be missing!
You can go check it out starting point... We added out add-ons on *public/css/genesis.css*, and don't forget to extend [BootStrap 4.0](https://getbootstrap.com/docs/4.0/layout/overview/) rules....

### Finishing

Our job is still not done, we just added some other dependencies that have to be implemented before system is fully running.

So at this point, just head to you dev site, and look up how to end the installation, should be something like http://client.xyz/genesis. Don't worry those route groups are only available on local environment (reference to .env).



## Built With
After installation, and if you are reading this, a reminder that you should always look at [BeWhy Genesis](https://bewhy.org/genesis) for latest update. This type of files sometimes get lost over time and iterations.

But we have to reference, at this point, which other decencies we are using by name, reference and glory:
* [codecalm/tabler](https://codecalm.net/) - Bootstrap4 Template we build upon. 
* [arcanedev/localization](https://github.com/ARCANEDEV/Localization) - Easy i18n localization for Laravel, an useful tool to combine with Laravel localization classes.
* [laravelcollective/html](https://laravelcollective.com/docs/6.0/html) - Official documentation for Forms & Html for The Laravel Framework.
* [spatie/laravel-activitylog](https://docs.spatie.be/laravel-activitylog/v3/introduction/) - Easy to use functions to log the activities of the users of your app.
* [spatie/laravel-permission](https://docs.spatie.be/laravel-permission/v3/introduction/) - Manage user permissions and roles in a database.
* [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) - Adds a cool bar to footer in dev environment with displays of Redirects and (jQuery) Ajax Requests and Queries and more.
* [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) - This package generates a file that your IDE understands, so it can provide accurate auto-completion. 
* [intervention/image](http://image.intervention.io/) - Intervention Image is an open source PHP image handling and manipulation library.

Once again thank you to all this amazing teams, and more, for their code, inspiration and contribution to world's coding community. We know hope be worthy on following your legacy and improve on it.

Under [Versioning](#versioning) chapter we will add some mode details to our actual code, but this thread is a special reference to those who deserve it.



## Deployment

This is the fun fact about BeWhy and/or Genesis, our clients have their own GitLab, and Genesis is on GitHub. Our projects have their Genesis + own dependencies, and Genesis is already a package of dependencies and exclusive business logic. That is why you have 2 step deployment, but you'll keep getting goodies everytime

````
composer update
````

This is one of the ways we ensure a solid and separate growth of software, having a main branch over time, and you can keep you independence. It seems I'm doing double the work, but after working with many stacks, teams, changing devs, and other "client" histories...
 
 Don't complain, do better... This is Genesis.



## Contributing

Even though we are showing raw code, contributions are by invitation only. If you're interested in working for us, you might send your job application to *rh@bewhy.org*

For people who where added as **Git Users** of Genesis, I also leave a tip how to best separate our source from whatever everyone is doing.   

Doing in fast forward mode:
```
    composer create-project laravel/genesis genesis
    vagrant ssh
    cd genesis
    mkdir packages/BeWhy/Genesis
    cd packages/BeWhy/Genesis
    git pull https://github.com/bewhy-pt/genesis.git
    composer dump-autoload
    cd ~/genesis | cd -
    vi composer.jon           #look and replace
        "autoload": {
            "psr-4": {
                "BeWhy\\Genesis\\": "packages/BeWhy/Genesis/src",
                "App\\": "app/"
            },
            "classmap": [
                "database/seeds",
                "database/factories"
            ]
        },
        "autoload-dev": {
            "psr-4": {
                "BeWhy\\Genesis\\": "packages/BeWhy/Genesis/src",
                "Tests\\": "tests/"
            }
        },
    composer update
    php artisan vendor:publish --provider="BeWhy\Genesis\GenesisServiceProvider" --tag="assets"
```
And you should have everything up and running! Has any dev, you will use Laravel directory structure to check the "bounds" of your Genesis code, which is everything in folder *packages/BeWhy/Genesis*. 

In theory, and please **DON'T**, every client can have it's git to Genesis, and other git to client due tue directories structure. (if you use this, don't forget to add folder to .gitignore of client).

It's preferable to use *packages/BeWhy/Genesis* has IDE root too; and since you genesis.xyz calls "bounds" of Laravel and unknown (aka Genesis), you will have a better perception between the 3 worlds: Laravel, Genesis, Client.



## Versioning

Once again, a reminder that you should always look at [BeWhy Genesis](https://bewhy.org/genesis) for latest update. For the source versions available, see the [check GitHub](https://github.com/bewhy-pt/genesis). 

Assuming this file will be forgotten, let's project the future for our version; and yes, a better versioning solution.

- [ Phase 0 ] - Setting up BeWhy & Genesis global 
- [ Phase 1 ] - Import first bundle
    - template - which will run Genesis template for tutorial, or extented to site layout;
    - Settings - Helps with management of global vars and other dependencies (eg. roles permissions);
    - Crm - *Client Relationship Manager* - manages profiles, avatars, status, history;
    - Igm - *In Genesis Message* - messaging system between users;
    - Shop - *Phase 0* - Adding file struture, but first break-point;
    - File - To upload an attach files to all the above;
    
- [ Future Phases ] - More bundles to add
    - SOLID integration on Genesis Phase 1
    - Auth by Passport, not by regular Laravel\Auth (more private)
    - PaymentSystems - PayPal, Stripe
    - Versioning
    


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details



## Acknowledgments

* First: God, for creating everything
* Second: devil, for developing Math 
