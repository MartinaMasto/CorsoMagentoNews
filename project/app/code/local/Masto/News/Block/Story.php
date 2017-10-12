<?php
/**
 *  Masto News
 */

/**
 * Masto News Controller Story Block
 *
 * Stories Controller.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */
class Masto_News_Block_Story extends Mage_Core_Block_Template
{
    /**
     * getStories
     * @return Masto_News_Model_Resource_Story_Collection|Mage_Eav_Model_Entity_Collection_Abstract
     */
    public function getStories()
    {
        //control if the are filter parameters
        if ($this->getRequest()->getParam('category')) {
            $stories = Mage::getModel('masto_news/story')->getCollection()
            ->addFieldToFilter('status', array('eq' => 1))
            ->addFieldToFilter('category_id', array('eq' => $this->getRequest()->getParam('category')));

        } else {
            $stories = Mage::getModel('masto_news/story')->getCollection()
                ->addFieldToFilter('status', array('eq' => 1));
        }
            return $stories;
    }
}