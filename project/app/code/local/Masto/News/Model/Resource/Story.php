<?php
/**
 *  Masto News
 */

/**
 * Masto News Model Resource Story
 *
 * Story Resource Model.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Model_Resource_Story extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this-> _init('masto_news/story', 'story_id');
    }
}