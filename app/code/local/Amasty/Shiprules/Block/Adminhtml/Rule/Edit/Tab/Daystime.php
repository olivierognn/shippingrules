<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/
class Amasty_Shiprules_Block_Adminhtml_Rule_Edit_Tab_Daystime extends Amasty_Commonrules_Block_Adminhtml_Rule_Edit_Tab_Daystime
{
    protected function _prepareForm()
    {
        $model = Mage::registry('amshiprules_rule');
        $this->_setRule($model);
        return parent::_prepareForm();
    }
}
