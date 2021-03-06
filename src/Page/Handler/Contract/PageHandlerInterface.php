<?php namespace Anomaly\PagesModule\Page\Handler\Contract;

use Anomaly\PagesModule\Page\Contract\PageInterface;

/**
 * Interface PageHandlerInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\PagesModule\Page\Handler\Contract
 */
interface PageHandlerInterface
{

    /**
     * Make the page's response.
     *
     * @param PageInterface $page
     */
    public function make(PageInterface $page);
}
