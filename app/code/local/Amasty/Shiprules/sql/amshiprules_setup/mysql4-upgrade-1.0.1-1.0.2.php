<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/
$this->startSetup();

$this->run("
 ALTER TABLE `{$this->getTable('amshiprules/rule')}` ADD `handling` double NOT NULL AFTER `rate_max`;  
"); 

$this->endSetup();