<?php

namespace App\Befeni\Repository;

use App\Befeni\Model\ShirtOrder;

interface ShirtOrderRepositoryInterface {

    function save($shirtOrder);

    function searchShirtOrderById($id);

}


?>