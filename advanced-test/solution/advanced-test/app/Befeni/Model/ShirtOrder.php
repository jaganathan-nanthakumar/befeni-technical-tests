<?php

namespace App\Befeni\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShirtOrder extends Model
{
    protected $table = 'shirt_orders';

    function __construct($customerId, $fabricId, $collarSize, $chestSize, $waistSize, $wristSize){
        $this->customerId = $customerId;
        $this->fabricId = $fabricId;
        $this->collarSize = $collarSize;
        $this->chestSize = $chestSize;
        $this->waistSize = $waistSize;
        $this->wristSize = $wristSize;
    }

}
