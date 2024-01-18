<?php

use PHPUnit\Framework\TestCase;
use Clark0304\FoodTruck\FoodTruck;

class TruckTest extends TestCase
{

  // the number of types of facility
  const FACILITY_TYPE_NUM = 2;

  // the number of categorys of food
  const FACILITY_NUM_TRUCK = 'Truck';
  const FACILITY_NUM_CART  = 'Push Cart';

  /**
   * @test
   */
  public function testThereAre2TypesOfFacility()
  {
    $objFoodTruck   = new FoodTruck();

    $intFacilityTypeNum = $objFoodTruck->getFacilityTypeNum();
    $intFacilityTypeNum = intval($intFacilityTypeNum);

    $this->assertEquals(static::FACILITY_TYPE_NUM, $intFacilityTypeNum);
  }

  /**
   * @test
   */
  public function testTruckIsMorePowerfulThanPushCart()
  {
    $objFoodTruck    = new FoodTruck();

    $intFacilityNumTruck = $objFoodTruck->getFacilityNumWhich(
      static::FACILITY_NUM_TRUCK
    );
    $intFacilityNumCart = $objFoodTruck->getFacilityNumWhich(
      static::FACILITY_NUM_CART
    );

    $this->assertGreaterThanOrEqual($intFacilityNumTruck, $intFacilityNumCart);
  }

}
