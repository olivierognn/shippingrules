<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/ 
class Amasty_Shiprules_Model_Mysql4_Rule extends Amasty_Commonrules_Model_Resource_Rule
{
    public function _construct()
    {
        $this->_type = 'amshiprules';
        parent::_construct();
    }          
}