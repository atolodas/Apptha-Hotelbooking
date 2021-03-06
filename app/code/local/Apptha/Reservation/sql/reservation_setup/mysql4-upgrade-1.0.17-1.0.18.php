<?php
/*
    Document   : config.xml
    Created on : July 14, 2011, 12:58 PM
    Author     : John
    Description:
        Purpose of the document follows.
*/
$installer = $this;

/* $installer Mage_Core_Model_Resource_Setup */

$installer->startSetup();

$setup = new Mage_Eav_Model_Entity_Setup('core_setup');


$setup = $this;

try {
}catch(Exception $E) {

}

$installer->run("
	ALTER TABLE {$this->getTable('reservation/hotel_orders')} DROP COLUMN `period_from`, DROP COLUMN `period_to`;
	ALTER TABLE {$this->getTable('reservation/hotel_orders')} ADD `period_from` DATE NULL;
	ALTER TABLE {$this->getTable('reservation/hotel_orders')} ADD `period_to` DATE NULL;
	");

$installer->endSetup();