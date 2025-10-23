<?php
namespace SandboxBlock;

use Omeka\Module\AbstractModule;

class Module extends AbstractModule
{
    public function getConfig(): array
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
