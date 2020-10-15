<?php

namespace App\Befeni\Repository;

use App\Befeni\Model\ShirtOrder;
use App\Befeni\Repository\ShirtOrderRepositoryMysql;
use App\Befeni\Repository\ShirtOrderRepositoryRedis;

class ShirtOrderRepository {

    private $dataSources;
    
    function __construct(){
        $mysql = new ShirtOrderRepositoryMysql();
        $redis = new ShirtOrderRepositoryRedis();
        $this->dataSources = [
            "Mysql" => $mysql,
            "Redis" => $redis
        ];
    }

    public function save($shirtOrder, $targetDataSources = ['Mysql']) {
        foreach($targetDataSources as $dataSource){
            $this->dataSources[$dataSource]->save($shirtOrder);
        }
    }

    public function searchShirtOrderById($id, $targetDataSources = ['Redis']){
        $returnObject = [];
        foreach($targetDataSources as $dataSource){
            $returnObject[$dataSource] = $this->dataSources[$dataSource]->searchShirtOrderById($id);
        }
        return $returnObject;
    }

}

?>