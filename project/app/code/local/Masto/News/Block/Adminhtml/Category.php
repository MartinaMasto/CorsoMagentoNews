<?php
/**
 *  Masto News
 */

/**
 * Masto News Category Block
 *
 * Adminhtml block for category grid.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Block_Adminhtml_Category extends
Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Masto_News_Block_Adminhtml_Category constructor
     */
    public function __construct()
    {
        $this->_blockGroup = 'masto_news';
        $this->_controller = 'adminhtml_category';
        $this->_headerText = $this->__('News Categories');
        parent::__construct();
    }
}