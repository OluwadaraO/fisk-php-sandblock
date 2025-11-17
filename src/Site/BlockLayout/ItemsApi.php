<?php
namespace SandboxBlock\Site\BlockLayout;

use Omeka\Site\BlockLayout\AbstractBlockLayout;
use Omeka\Api\Representation\SiteRepresentation;
use Omeka\Api\Representation\SitePageRepresentation;
use Omeka\Api\Representation\SitePageBlockRepresentation;
use Laminas\View\Renderer\PhpRenderer;

class ItemsApi extends AbstractBlockLayout
{
    public function getLabel()
    {
        return 'API Items (Sandbox)';
    }
    public function form(
        PhpRenderer $view,
        SiteRepresentation $site,
        SitePageRepresentation $page = null,
        SitePageBlockRepresentation $block = null
    ) {
        $data = $block ? $block->data() : [];

        return $view->partial('common/block-layout/items-api-form', [
            'data' => $data,
        ]);
    }
    public function render(PhpRenderer $view, SitePageBlockRepresentation $block)
    {
        $data = $block->data();

        $keyword = $data['keyword'] ?? '';
        $limit   = (int) ($data['limit'] ?? 5);

        $api = $view->api();
        $response = $api->search('items', [
            'search' => $keyword,
            'limit'  => $limit,
        ]);

        $items = $response->getContent();

        return $view->partial('common/block-layout/items-api-show', [
            'items'   => $items,
            'limit'   => $limit,
            'keyword' => $keyword,
        ]);
    }
}
