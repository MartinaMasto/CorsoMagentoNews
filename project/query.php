<?php

require_once ('app/Mage.php');
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();

//create a category
$category = Mage::getModel('masto_news/category');
$category->setCode('top');
$category->setName('Think Open');
$category->setStatus(true);
$category->save();

echo '<hr>eccomi<hr><pre>';

Zend_Debug::dump($category);