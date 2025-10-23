<?php
namespace SandboxBlock;

use SandboxBlock\Site\BlockLayout\HelloWorld;

return[
    'block_layouts' => [
        'factories' => [
            HelloWorld::class => function ($services){
                return new HelloWorld();
            },
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . "/../view",
        ],
    ],
];