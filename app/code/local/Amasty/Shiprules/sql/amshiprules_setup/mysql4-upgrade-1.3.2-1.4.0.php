<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/
$this->startSetup();

$this->run("
 ALTER TABLE `{$this->getTable('amshiprules/rule')}` MODIFY `discount_id`         varchar(255) NOT NULL default '' ;
 ALTER TABLE `{$this->getTable('amshiprules/rule')}` MODIFY `discount_id_disable` varchar(255) NOT NULL default '' ;
");

$this->endSetup();