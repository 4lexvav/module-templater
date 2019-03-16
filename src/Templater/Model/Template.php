<?php

namespace Vav\Templater\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Stdlib\DateTime;
use Vav\Templater\Api\Data\TemplateInterface;

class Template extends AbstractModel implements TemplateInterface
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'templater_template';

    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(\Vav\Templater\Model\ResourceModel\Template::class);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {
        return $this->getData(self::PATH);
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($value)
    {
        $this->setData(self::PATH, $value);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {
        return $this->getData(self::TEMPLATE);
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplate($value)
    {
        $this->setData(self::TEMPLATE, $value);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {
        $this->setData(self::IS_ACTIVE, $isActive);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->setData(self::UPDATED_AT, $updatedAt);

        return $this;
    }
}
