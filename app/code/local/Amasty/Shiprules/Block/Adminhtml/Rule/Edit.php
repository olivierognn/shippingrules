<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/
class Amasty_Shiprules_Block_Adminhtml_Rule_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id'; 
        $this->_blockGroup = 'amshiprules';
        $this->_controller = 'adminhtml_rule';
        
        $this->_addButton('save_and_continue', array(
                'label'     => Mage::helper('salesrule')->__('Save and Continue Edit'),
                'onclick'   => 'saveAndContinueEdit()',
                'class' => 'save'
            ), 10);
        $this->_formScripts[] = " function saveAndContinueEdit(){ editForm.submit($('edit_form').action + 'continue/edit') } ";         
    }

    public function getHeaderText()
    {
        $header = Mage::helper('amshiprules')->__('New Rule');
        $model = Mage::registry('amshiprules_rule');
        if ($model->getId()){
            $header = Mage::helper('amshiprules')->__('Edit Rule `%s`', $model->getName());
        }
        return $header;
    }
}