<?php
namespace SandboxBlock\Site\BlockLayout;

use Omeka\Site\BlockLayout\AbstractBlockLayout;
use Omeka\Api\Representation\SiteRepresentation;
use Omeka\Api\Representation\SitePageRepresentation;
use Omeka\Api\Representation\SitePageBlockRepresentation;
use Laminas\View\Renderer\PhpRenderer;

class HelloWorld extends AbstractBlockLayout
{
    public function getLabel()
    {
        return 'Hello World (Sandbox)';
    }

    public function form(
        PhpRenderer $view,
        SiteRepresentation $site,
        SitePageRepresentation $page = null,
        SitePageBlockRepresentation $block = null
    ) {
        return '';
    }

    /**
     * Public site render.
     */
    public function render(PhpRenderer $view, SitePageBlockRepresentation $block)
    {
        return $view->partial('common/block-layout/hello-world', [
            'message' => 'Hello World from your custom block!',
        ]);
    }
}
