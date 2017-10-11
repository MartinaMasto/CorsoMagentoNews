<?php
/**
 *  Masto News
 */

/**
 * Masto News Category Grid Block
 *
 * Adminhtml block for category grid.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Block_Adminhtml_Category_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     * Masto_News_Block_Adminhtml_Category_Grid constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_id');
        $this->setDefaultSort('category_id');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
    }

    /**
     * _prepareCollection
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('masto_news/category')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * _prepareColumns
     * @return $this
     */
    protected function _prepareColumns()
    {
        //adding columns
        $this->addColumn(
            'category_id',
            array(
                'index' => 'category_id',
                'header' => $this->__('ID'),
                'width' => 50,
                'type' => 'number',
            )
        );
        $this->addColumn(
            'code',
            array(
                'index' => 'code',
                'header' => $this->__('Code'),
                'width' => 250,
            )
        );
        $this->addColumn(
            'name',
            array(
                'index' => 'name',
                'header' => $this->__('Name'),
            )
        );
        $this->addColumn(
            'status',
            array(
                'index' => 'status',
                'header' => $this->__('Status'),
                'status' =>100,
                'type' => 'options',
                'option' => Mage::getModel('masto_news/source_status')->toOptionArray(),
                'renderer' => 'masto_news/adminhtml_category_grid_renderer_status',
            )
        );

        // add actions to the last column
        $this->addColumn(
            'actions',
            array(
                'header' =>$this->__('Actions'),
                'width' => 150,
                'type' => 'action',
                'getter' => 'getId',
                'actions' => array(
                    array(
                        'caption' => $this->__('Edit'),
                        'url' => array('base' => '*/*/edit'),
                        'fields' => 'category_id',
                    ),
                    array(
                        'caption' => $this->__('Delete'),
                        'url' => array('base' => '*/*/delete'),
                        'fields' => 'category_id',
                        'confirm' => $this->__('Are you sure to delete this?'),
                    )
                ),
                'filter'=> false,
                'sortable' => false,
                'is_system' => true,
            )
        );

        return parent::_prepareColumns();
    }

}

/**
 *  CONTROLLARE DI NUOVO GRID E GLI STATUS
 * ERRORE? NELLA TENDINA DI STATUS NON VIENE VISUALIZZATO NULLA.
 */