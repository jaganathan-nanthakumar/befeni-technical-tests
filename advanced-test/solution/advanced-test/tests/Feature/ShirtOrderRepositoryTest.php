<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Befeni\Repository\ShirtOrderRepository;
use App\Befeni\Model\ShirtOrder;
use Tests\TestCase;

class ShirtOrderRepositoryTest extends TestCase
{

    public function testSimpleAdvancedTestSolution()
    {
        $shirtOrder = $this->generateRandomShirtOrder();
        $shirtOrderRepository = new ShirtOrderRepository();
        $shirtOrderRepository->save($shirtOrder); // Defaults to MySQL
        $this->assertDatabaseHas('shirt_orders', [
            'id' => $shirtOrder->id
        ]);
        $shirtOrderRepository->save($shirtOrder, ['Redis']); //Forced to Redis

        $retrievedRedisShirtOrder = (object) ($shirtOrderRepository->searchShirtOrderById($shirtOrder->id)['Redis']); // Defaults to Redis
        
        //Assert retrieved record
        $this->assertEquals($shirtOrder->id, $retrievedRedisShirtOrder->id);
        $this->assertEquals($shirtOrder->customerId, $retrievedRedisShirtOrder->customerId);
        $this->assertEquals($shirtOrder->fabricId, $retrievedRedisShirtOrder->fabricId);
        $this->assertEquals($shirtOrder->collarSize, $retrievedRedisShirtOrder->collarSize);
        $this->assertEquals($shirtOrder->chestSize, $retrievedRedisShirtOrder->chestSize);
        $this->assertEquals($shirtOrder->waistSize, $retrievedRedisShirtOrder->waistSize);
        $this->assertEquals($shirtOrder->wristSize, $retrievedRedisShirtOrder->wristSize);

    }

    public function generateRandomShirtOrder(){
        $sor = new ShirtOrder(rand(1,10),rand(11,20),rand(21,30),rand(31,40),rand(41,50),rand(51,60));
        return $sor;
    }
}
