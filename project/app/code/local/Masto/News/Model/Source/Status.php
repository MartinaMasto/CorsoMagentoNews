<?php
/**
 *  Masto News
 */

/**
 * Masto News Status Model
 *
 * Option to Status.
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Model_Source_Status
{
    /**
     * toOptionArray
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => Mage::helper('masto_news')
                ->__('Disabled')),
            array('value' => 1, 'label' => Mage::helper('masto_news')
                ->__('Enabled')),
        );
    }
}