<?php

use PHPUnit\Framework\TestCase;
use Clark0304\FoodTruck\FoodTruck;

class NeighborhoodTest extends TestCase
{

  // the number of shops which like to be alone
  const SHOP_BE_ALONE_NUM         = 49;
  // the number of shops which like to gather together
  const SHOP_Gather_Together_NUM  = 41;

  /**
   * @test
   */
  public function test49ShopsLikeToBeAlone()
  {
    $objFoodTruck   = new FoodTruck();

    $intShopBeAloneNum = $objFoodTruck->getShopBeAloneNum();
    $intShopBeAloneNum = intval($intShopBeAloneNum);

    $this->assertEquals(
      static::SHOP_BE_ALONE_NUM, 
      $intShopBeAloneNum
    );
  }

  /**
   * @test
   */
  public function test41ShopsLikeToGatherTogether()
  {
    $objFoodTruck    = new FoodTruck();

    $intShopGatherTogetherNum = $objFoodTruck->getShopGatherTogetherNum();
    $intShopGatherTogetherNum = intval($intShopGatherTogetherNum);

    $this->assertEquals(
      static::SHOP_Gather_Together_NUM, 
      $intShopGatherTogetherNum
    );
  }

}
