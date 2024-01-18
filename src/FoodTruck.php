<?php

namespace Clark0304\FoodTruck;
// use Maatwebsite\Excel\Excel;

class FoodTruck
{

    public function sayHelloWorld($name = 'world')
    {
        return "Hello, $name!";
    }

    // Because time is precious, these are Mock Data.
    
    // If you want to get real data from the list, 
    // please use this package 'maatwebsite/excel'.
    // ...
    public function getItemCateFew()
    {
        return 1;
    }
    
    public function getItemCateMany()
    {
        return 10;
    }
    
    public function getItemNameMost()
    {
        return 'Ice Cream';
    }
    
    public function getShopBeAloneNum()
    {
        return 49;
    }
    
    public function getShopGatherTogetherNum()
    {
        return 41;
    }
    
    public function getFacilityTypeNum()
    {
        return 2;
    }
    
    public function getFacilityNumWhich($which = 'Truck')
    {
        return 41;
    }

}
