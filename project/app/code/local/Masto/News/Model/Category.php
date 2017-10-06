<?php
/**
 *  Masto News
 */

/**
 * Masto News Model Category
 *
 * Category Model.
 * @method Masto_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Masto_News_Model_Category getName()
 * @method setName(string $name)
 * @method Masto_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Masto_News_Model_Category getCreatedAt(string $createdAt)
 * @method Masto_News_Model_Category getUpdatedAt()
 * @method Masto_News_Model_Story setUpdatedAt(string $updatedAt)
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
*/
class Masto_News_Model_Category extends Mage_Core_Model_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this-> _init('masto_news/category');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }
}