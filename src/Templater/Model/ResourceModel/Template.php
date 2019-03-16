<?php

namespace Vav\Templater\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Stdlib\DateTime;
use Vav\Templater\Api\Data\TemplateInterface;

class Template extends AbstractDb
{
    /**
     * {@inheritdoc}
     */
    protected function _construct()
    {
        $this->_init(TemplateInterface::TABLE_NAME, TemplateInterface::ID);
    }
}
