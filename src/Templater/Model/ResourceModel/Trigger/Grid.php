<?php

namespace Vav\Templater\Model\ResourceModel\Template;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Magento\Framework\View\Element\UiComponent\DataProvider\Document;
use Vav\Templater\Api\Data\TemplateInterface;
use Psr\Log\LoggerInterface as Logger;

class Grid extends SearchResult
{
    /**
     * {@inheritdoc}
     */
    protected $document = Document::class;

    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = TemplateInterface::TABLE_NAME,
        $resourceModel = \Vav\Templater\Model\ResourceModel\Template::class
    ) {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel);
    }
}
