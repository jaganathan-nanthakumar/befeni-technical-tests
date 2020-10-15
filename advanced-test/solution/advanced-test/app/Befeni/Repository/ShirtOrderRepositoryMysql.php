<?php

namespace App\Befeni\Repository;

use App\Befeni\Repository\ShirtOrderRepositoryInterface;
use App\Befeni\Model\ShirtOrder;

class ShirtOrderRepositoryMysql implements ShirtOrderRepositoryInterface {

    public function save($shirtOrder) {
        $shirtOrder->save();
    }

    public function searchShirtOrderById($id) {
        return ShirtOrder::findOrFail($id);
    }

}

?>