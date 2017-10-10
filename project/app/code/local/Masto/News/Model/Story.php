<?php
/**
 *  Masto News
 */

/**
 * Masto News Model Story
 *
 * Story Model.
 * @method Masto_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Masto_News_Model_Story getCOntent()
 * @method setContent(string $content)
 * @method Masto_News_Model_Story getStatus()
 * @method setStatus(bool $status)
 * @method Masto_News_Model_Story getCategoryId()
 * @method setCategoryId(int $categoryId)
 * @method Masto_News_Model_Story getCreatedAt()
 * @method Masto_News_Model_Story getUpdatedAt()
 * @method Masto_News_Model_Story setUpdatedAt(string $updatedAt)
 * @author Martina Masto <martina.masto@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Masto_News_Model_Story extends Mage_Core_Model_Abstract
{
    /**
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'masto_news_story';
    /**
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'story';
    /**
     * _construct
     */
    protected function _construct()
    {
        $this-> _init('masto_news/story');
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

    /**
     * getCategory
     *
     * Get Category object.
     * @return bool/Masto_News_Model_Category/Mage_Core_Model_Abstract
     */
    public function getCategory()
    {
        $category = Mage::getModel('masto_news/category')->load
        ($this->getData('category_id'));

        if ($category && $category->getId()) {
            return $category;
        }
        return false;
    }

    /**
     * setCategory
     *
     * Set Category Id from Category object.
     * @param Masto_News_Model_Category $category
     */
    public function setCategory(Masto_News_Model_Category $category)
    {
        $this->setData('category_id', $category->getId());
    }
}