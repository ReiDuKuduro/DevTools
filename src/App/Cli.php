<?php

namespace MASNathan\DevTools\App;

use Symfony\Component\Console\Application,
    MASNathan\DevTools\Commands\Github,
    MASNathan\DevTools\Commands\Bitbucket;

/**
 * Base Client Application class
 */
class Cli extends Application
{
    /**
     * DevTools client application constructor.
     */
    public function __construct() {
        parent::__construct('MASNathan Dev Tools', '0.1');
 
        $this->addCommands(array(
            new Github\SetupCommand(),
            new Github\ListCommand(),
            new Github\CloneCommand(),
            new Github\CreateCommand(),
            new Bitbucket\SetupCommand(),
            new Bitbucket\ListCommand(),
            new Bitbucket\CloneCommand(),
        ));
    }
}
