<?php namespace Anomaly\PagesModule\Page\Command;

use Anomaly\PagesModule\Page\Contract\PageInterface;
use Anomaly\PagesModule\Page\Contract\PageRepositoryInterface;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class DeleteChildren
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PagesModule\Page\Command
 */
class DeleteChildren implements SelfHandling
{

    /**
     * The page instance.
     *
     * @var PageInterface
     */
    protected $page;

    /**
     * Create a new DeleteChildren instance.
     *
     * @param PageInterface $page
     */
    public function __construct(PageInterface $page)
    {
        $this->page = $page;
    }

    /**
     * Handle the command.
     *
     * @param PageRepositoryInterface $pages
     */
    public function handle(PageRepositoryInterface $pages)
    {
        foreach ($this->page->getChildren() as $page) {
            $pages->delete($page);
        }
    }
}
