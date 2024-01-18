<?php

use PHPUnit\Framework\TestCase;
use Clark0304\FoodTruck\FoodTruck;

class FoodTest extends TestCase
{

  // the number of categorys of food
  const ITEM_CATE_FEW   = 1;
  const ITEM_CATE_MANY  = 10;

  // the name of food
  const ITEM_NAME_MOST  = 'Ice Cream';

  /**
   * @test
   */
  public function testSomeShopsSellOnly1CategoryOfItem()
  {
    $objFoodTruck   = new FoodTruck();

    $intItemCateFew = $objFoodTruck->getItemCateFew();
    $intItemCateFew = intval($intItemCateFew);

    $this->assertEquals(static::ITEM_CATE_FEW, $intItemCateFew);
  }

  /**
   * @test
   */
  public function testSomeShopsCarryMoreThan10KindsOfProducts()
  {
    $objFoodTruck    = new FoodTruck();

    $intItemCateMany = $objFoodTruck->getItemCateMany();
    $intItemCateMany = intval($intItemCateMany);

    $this->assertLessThanOrEqual(static::ITEM_CATE_MANY, $intItemCateMany);
  }

  /**
   * @test
   */
  public function testIceCreamIsTheMostPopularFood()
  {
    $objFoodTruck    = new FoodTruck();

    $strItemNameMost = $objFoodTruck->getItemNameMost();

    $this->assertSame(static::ITEM_NAME_MOST, $strItemNameMost);
  }

}
