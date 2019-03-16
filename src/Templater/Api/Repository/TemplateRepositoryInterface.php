<?php

namespace Vav\Templater\Api\Repository;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Model\AbstractModel;
use Vav\Templater\Api\Data\TemplateInterface;

interface TriggerRepositoryInterface
{
    /**
     * @return TemplateInterface[]|\Vav\Templater\Model\ResourceModel\Template\Collection
     */
    public function getCollection();

    /**
     * @return TemplateInterface|AbstractModel
     */
    public function create();

    /**
     * @param int $id
     *
     * @return TemplateInterface|false
     */
    public function get($id);

    /**
     * @param TemplateInterface|AbstractModel $model
     *
     * @return TemplateInterface
     */
    public function save(TemplateInterface $model);

    /**
     * @param TemplateInterface|AbstractModel $model
     *
     * @return bool
     */
    public function delete(TemplateInterface $model);
}
