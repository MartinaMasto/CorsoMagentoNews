<?php
/**
 *  Masto News
 */

/**
 * Masto News Adminhtml Tabs Block
 *
 * Category Edit Block.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Block_Adminhtml_Category_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * Masto_News_Block_Adminhtml_Category_Edit_Tabs constructor.
     */
    public function __construct()
    {
        parent::__contruct();
        $this->setId('category_edit_tabs');
        $this->setDestElementId('category_edit_form');
    }

    /**
     *  _beforeToHtml
     */
    protected function _beforeToHtml()
    {
        $this->addTabs(
            'Category Details',
            array(
                'label' => $this->__('Details'),
                'title' => $this->__('Details'),
            )
        );
        parent::_beforeToHtml();
    }
}