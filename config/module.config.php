<?php

use SandboxBlock\Site\BlockLayout\HelloWorld;
use SandboxBlock\Site\BlockLayout\ItemsApi;

return [
    'block_layouts' => [
        'factories' => [
            HelloWorld::class => function ($services) {
                return new HelloWorld();
            },
            ItemsApi::class => function ($services) {
                return new ItemsApi();
            },
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
