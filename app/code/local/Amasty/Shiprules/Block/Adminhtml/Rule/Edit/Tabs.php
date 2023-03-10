<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/ 
class Amasty_Shiprules_Block_Adminhtml_Rule_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    public function __construct()
    {
        parent::__construct();
        $this->setId('ruleTabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(Mage::helper('amshiprules')->__('Rule Configuration'));
    }

    protected function _beforeToHtml()
    {
        $tabs = array(
            'general'    => 'General',
            'stores'     => 'Stores & Customer Groups',
            'daystime'   => 'Days and Time',
            'apply'      => 'Coupons',
            'products'   => 'Products',
            'rates'      => 'Rates',
            'conditions' => 'Address Conditions',
        );
        
        foreach ($tabs as $code => $label){
            $label = Mage::helper('amshiprules')->__($label);
            $content = $this->getLayout()->createBlock('amshiprules/adminhtml_rule_edit_tab_' . $code)
                ->setTitle($label)
                ->toHtml();
                
            $this->addTab($code, array(
                'label'     => $label,
                'content'   => $content,
            ));
        }
        
        return parent::_beforeToHtml();
    }
}