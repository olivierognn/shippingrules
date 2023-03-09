<?php
/**
* @author Amasty Team
* @copyright Copyright (c) 2022 Amasty (https://www.amasty.com)
* @package Shipping Rules
*/
$this->startSetup();

$this->run("
ALTER TABLE `{$this->getTable('amshiprules/rule')}` ADD `out_of_stock` TINYINT NOT NULL DEFAULT 0 AFTER `is_active`;
");

$this->endSetup();