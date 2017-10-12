<?php
/**
 *  Masto News
 */

/**
 * Masto News Adminhtml Edit Block
 *
 * Category Edit Block.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Masto_News_Block_Adminhtml_Category_Edit constructor.
     */
    public function __construct()
    {
        $this->_objectId = 'category_id';
        $this->_blockGroup = 'masto_news';
        $this->_controller= 'adminhtml_category';
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}