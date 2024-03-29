<?php
namespace Fob\MonologLoggerDemo\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use Fob\MonologLogger\MonologAppLoggerModule;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $appDir = $this->appMeta->appDir;
        require_once $appDir . '/env.php';
        $this->install(new PackageModule);

        $this->install(new MonologAppLoggerModule($this->appMeta));
    }
}
