<?php

namespace Mirasvit\Email\Model\ResourceModel\Trigger;

use Magento\Framework\DataObject;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Vav\Templater\Api\Data\TemplateInterface;

class Collection extends AbstractCollection
{
    /**
     * {@inheritdoc}
     */
    protected $_idFieldName = TemplateInterface::ID;

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(\Vav\Templater\Model\Template::class, \Vav\Templater\Model\ResourceModel\Template::class);
    }

    /**
     * Add active filter
     *
     * @return $this
     */
    public function addActiveFilter()
    {
        $this->addFieldToFilter('main_table.' . TemplateInterface::IS_ACTIVE, TemplateInterface::STATUS_ACTIVE);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionHash()
    {
        return $this->_toOptionHash(TemplateInterface::ID, TemplateInterface::PATH);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->_toOptionArray(TemplateInterface::ID, TemplateInterface::PATH);
    }
}
