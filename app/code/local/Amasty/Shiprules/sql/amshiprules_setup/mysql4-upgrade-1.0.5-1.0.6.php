<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/
$this->startSetup();

$this->run("
 ALTER TABLE `{$this->getTable('amshiprules/rule')}` ADD `ship_max` decimal(12,2) unsigned NOT NULL default '0' AFTER `rate_max`;  
 ALTER TABLE `{$this->getTable('amshiprules/rule')}` ADD `ship_min` decimal(12,2) unsigned NOT NULL default '0' AFTER `rate_min`;  
"); 
  
$this->endSetup();