<?php 

namespace App\Extensions;

class PaginationHelper
{
    /**
    * @param int $totalItems
    * @param int $page (the page that is requested)
    * @param int $limit (how many articles to display per page)
    */
    public function __construct($totalItems, $page, $limit){
        $this->totalItems = $totalItems;
        $this->page = $page;
        $this->params = [];
        $this->prev = '';
        $this->next = '';
        $this->active = '';
        $this->skip = $this->page > 1 && $limit !== 0 ? ($this->page -1) * $limit : 0;
        $this->maxNumberOfPages = ceil($totalItems / $limit);

        $this->paginate();
        $this->format($this->params);

    }

    protected function paginate(){
        if($this->page > $this->maxNumberOfPages){
            abort(404);
        }

        //Preparing all pages
        for ($i=0; $i < $this->maxNumberOfPages; $i++) { 
            $this->params[$i + 1]['active'] = false;
            if(!$this->page && $i == 0){
                $this->params[$i + 1]['page'] = null;                
                $this->params[$i + 1]['active'] = true;
                $this->active = $i + 1;
                $this->prev = false;
            }
            else {
                $this->params[$i + 1]['page'] = $i + 1 == 1 ? null : "?page=".($i + 1);
            }

            if($this->page == ($i + 1)){
                $this->params[$i + 1]['active'] = true;
                $this->active = $this->page;
                $this->prev = $this->page == 2 ? false : $this->page - 2;
                $this->next = $this->page == $this->maxNumberOfPages -1 ? false : $this->page + 2;
            }

            $this->params[$i + 1]['pageNumber'] = $i + 1;
        }
    }

    protected function format($pages){
        if($this->active == 1){
            $this->pages = array_only($pages, [1, 2, 3]);
            $this->prev = false;
            $this->next = $this->active + 3;
        }

        if($this->active > 1 && $this->active < $this->maxNumberOfPages){
            $this->pages = array_only($pages, [$this->active - 1, $this->active, $this->active + 1]);
        }
        
        if($this->active == $this->maxNumberOfPages){
            $this->pages = array_only($pages, [$this->active - 2, $this->active - 1, $this->active]);
            $this->prev = $this->active - 3;
            $this->next = false;
        }

        $this->pagination = [
            'totalItems' => $this->totalItems, 
            'numberOfPages' => (int) $this->maxNumberOfPages, 
            'page' => $this->page, 
            'skip' => $this->skip, 
            'pages' => $this->pages,
            'previous' => $this->prev,
            'next' => $this->next
        ];
    }
}