<?php

namespace App\Befeni\Repository;

use App\Befeni\Repository\ShirtOrderRepositoryInterface;
use Illuminate\Support\Facades\Redis;

class ShirtOrderRepositoryRedis implements ShirtOrderRepositoryInterface {

    public function save($shirtOrder) {
        if (!empty($shirtOrder->id)) {
            Redis::hmset('shirt_orders:' . $shirtOrder->id, [
                'id' => $shirtOrder->id,
                'customerId' => $shirtOrder->customerId,
                'fabricId' => $shirtOrder->fabricId,
                'collarSize' => $shirtOrder->collarSize,
                'chestSize' => $shirtOrder->chestSize,
                'waistSize' => $shirtOrder->waistSize,
                'wristSize' => $shirtOrder->wristSize
            ]);
        }
    }

    public function searchShirtOrderById($id) {
        return Redis::hgetall('shirt_orders:' . $id);
    }

}

?>