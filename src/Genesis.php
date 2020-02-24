<?php

namespace BeWhy\Genesis;

use Composer\Script\Event;
use Composer\Installer\PackageEvent;

class Genesis{

    public static function postUpdate(Event $event)
    {
        dump("postUpdate(Event event)");
        $composer = $event->getComposer();
        // do stuff
    }

    public static function postAutoloadDump(Event $event)
    {

        dump("postAutoloadDump(Event event)");
        $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
        require $vendorDir . '/autoload.php';

        some_function_from_an_autoloaded_file();
    }

    public static function postPackageInstall(PackageEvent $event)
    {
        dump("postPackageInstall(Event event)");

        $installedPackage = $event->getOperation()->getPackage();
        // do stuff
    }

    public static function warmCache(Event $event)
    {
        dump("warmCache(Event event)");
        // make cache toasty
    }
}
