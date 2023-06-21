<?php

namespace App\Pagination;

use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;

class SemanticUIPresenter
{
    use SemanticUINextPreviousButtonRendererTrait, UrlWindowPresenterTrait;

    /**
     * The paginator implementation.
     *
     * @var \Illuminate\Contracts\Pagination\Paginator
     */
    protected $paginator;

    /**
     * The URL window data structure.
     *
     * @var array
     */
    protected $window;

    /**
     * Create a new Bootstrap presenter instance.
     *
     * @param \Illuminate\Contracts\Pagination\Paginator $paginator
     * @param \Illuminate\Pagination\UrlWindow|null $window
     * @return void
     */
    public function __construct(PaginatorContract $paginator, UrlWindow $window = null)
    {
        $this->paginator = $paginator;
        $this->window = is_null($window) ? UrlWindow::make($paginator) : $window->get();
    }

    /**
     * Determine if the underlying paginator being presented has pages to show.
     *
     * @return bool
     */
    public function hasPages()
    {
        return $this->paginator->hasPages();
    }

    /**
     * Convert the URL window into Bootstrap HTML.
     *
     * @return string
     */
    public function render()
    {
        if ($this->hasPages()) {
            return sprintf(
                '<div class="ui pagination menu">%s %s %s</div>',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            );
        }

        return '';
    }

    /**
     * Get HTML wrapper for an available page link.
     *
     * @param string $url
     * @param int $page
     * @param string|null $rel
     * @return string
     */
    protected function getAvailablePageWrapper($url, $page, $icon)
    {
        $icon = is_null($icon) ? '' : ' ' . $icon;

        return '<a class="item' . $icon . '" href="' . htmlentities($url) . '">' . $page . '</a>';
    }

    /**
     * Get HTML wrapper for disabled text.
     *
     * @param string $text
     * @return string
     */
    protected function getDisabledTextWrapper($text)
    {
        return '<a class="disabled item">' . $text . '</a>';
    }

    /**
     * Get HTML wrapper for active text.
     *
     * @param string $text
     * @return string
     */
    protected function getActivePageWrapper($text)
    {
        return '<a class="active item">' . $text . '</a>';
    }

    /**
     * Get a pagination "dot" element.
     *
     * @return string
     */
    protected function getDots()
    {
        return $this->getDisabledTextWrapper('...');
    }

    /**
     * Get the current page from the paginator.
     *
     * @return int
     */
    protected function currentPage()
    {
        return $this->paginator->currentPage();
    }

    /**
     * Get the last page from the paginator.
     *
     * @return int
     */
    protected function lastPage()
    {
        return $this->paginator->lastPage();
    }
}
