<?php
/**
 *  Masto News
 */

/**
 * Masto News Adminhtml Controller
 *
 * Beckend Category Controller.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Adminhtml_CategoryController extends
Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
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