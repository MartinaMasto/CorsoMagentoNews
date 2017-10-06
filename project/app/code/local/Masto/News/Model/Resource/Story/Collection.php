<?php
/**
 *  Masto News
 */

/**
 * Masto News Model Resource Story Collection
 *
 * Story Resource Collection Model.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Model_Resource_Story_Collection extends
    Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this-> _init('masto_news/story');
    }
}