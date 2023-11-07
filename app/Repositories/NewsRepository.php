<?php
namespace App\Repositories;

class NewsRepository extends AbstractRepository{

    public function getLatestNews($newsNumber){
        return $this->getModel()->orderByDesc('created_at')->limit($newsNumber)->get();
    }    

}

?>