<?php

/**
 * Error reporting
 */
error_reporting(E_ALL | E_STRICT);

#Varien_Profiler::enable();

if (isset($_SERVER['MAGE_IS_DEVELOPER_MODE'])) {
    Mage::setIsDeveloperMode(true);
}

ini_set('display_errors', 1);

require_once 'app/Mage.php';

Mage::app();

$category = Mage::getModel("catalog/category")->load(2);

var_dump($category->getChildren());