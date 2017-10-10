<?php
/**
 *  Masto News
 */

/**
 * Masto News Adminhtml Controller
 *
 * Beckend Story Controller.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Adminhtml_StoryController extends
    Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        echo 'eccomi'; die;
    }

    /**
     * _isAllowed
     * @return bool
     */
    public function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('masto_news');
    }
}