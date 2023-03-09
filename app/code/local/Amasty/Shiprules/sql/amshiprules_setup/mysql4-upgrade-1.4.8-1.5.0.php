<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/

$this->startSetup();

/** @var \Amasty_Shiprules_Model_Mysql4_Rule_Collection $collection */
$collection = Mage::getResourceModel('amshiprules/rule_collection');

/** @var \Amasty_Shiprules_Model_Rule[] $items */
$rules = $collection->loadData()->getItems();

if (!empty($rules)) {
    /* @var $hlp Amasty_Shiprules_Helper_Data */
    $hlp = Mage::helper('amshiprules');
    Mage::app()->getConfig()->init();
    $newMethods = $hlp->getShippingMethodsList();

    foreach ($rules as $rule) {
        $result = [];
        $oldMethods = $rule->getMethods();

        $oldMethods = str_replace("\r\n", "\n", $oldMethods);
        $oldMethods = str_replace("\r", "\n", $oldMethods);
        $oldMethods = trim($oldMethods);

        if (empty($oldMethods)) {
            $rule->setMethods(implode(',', $result));

            continue;
        }

        $oldMethods = array_unique(explode("\n", $oldMethods));

        foreach ($oldMethods as $oldMethod) {
            $oldMethod = trim($oldMethod);

            foreach ($newMethods as $currentKey => $currentValue) {
                if (stripos($currentValue, $oldMethod) !== false) {
                    $result[] = $currentKey;
                }
            }
        }

        $rule->setMethods(implode(',', $result));
    }

    $collection->save();
}

$this->endSetup();