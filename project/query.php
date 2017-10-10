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

//load the category
$category = Mage::getModel('masto_news/category')->load(1);
echo 'Category<hr>';
Zend_Debug::dump($category);
echo '<hr>';

//create a story
$story = Mage::getModel('masto_news/story');
$story->setTitle('la mia storia');
$story->setContent('Lorem ipsum');
$story->setStatus(1);
$story->setCategory($category);
$story->save();


echo '<hr>story<hr><pre>';
Zend_Debug::dump($story);

echo 'story<hr>';
echo 'CategoryName = ' . $story->getCategory()->getName();