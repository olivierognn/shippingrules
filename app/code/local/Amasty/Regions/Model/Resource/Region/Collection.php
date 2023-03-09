<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Regions and Areas (System)
*/
class Amasty_Regions_Model_Resource_Region_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    protected function _construct()
    {
        $this->_init('amregions/region');
    }

    public function toOptionArray()
    {
        return $this->_toOptionArray('region_id', 'region_title');
    }
}