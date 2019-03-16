<?php

namespace Vav\Templater\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Vav\Templater\Api\Data\TemplateInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable(TemplateInterface::TABLE_NAME)
        )->addColumn(
            TemplateInterface::ID,
            Table::TYPE_INTEGER,
            null,
            ['unsigned' => false, 'nullable' => false, 'identity' => true, 'primary' => true],
            'Template Id'
        )->addColumn(
            TemplateInterface::PATH,
            Table::TYPE_TEXT,
            255,
            ['unsigned' => false, 'nullable' => false],
            'Path'
        )->addColumn(
            TemplateInterface::TEMPLATE,
            Table::TYPE_TEXT,
            '64K',
            ['unsigned' => false, 'nullable' => false],
            'Template'
        )->addColumn(
            TemplateInterface::IS_ACTIVE,
            Table::TYPE_INTEGER,
            null,
            ['unsigned' => false, 'nullable' => false, 'default' => 0],
            'Is Active'
        )->addColumn(
            'created_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['unsigned' => false, 'nullable' => false, 'default' => Table::TIMESTAMP_INIT],
            'Created At'
        )->addColumn(
            'updated_at',
            Table::TYPE_TIMESTAMP,
            null,
            ['unsigned' => false, 'nullable' => false, 'default' => Table::TIMESTAMP_INIT_UPDATE],
            'Updated At'
        )->addColumn(
            'store_ids',
            Table::TYPE_TEXT,
            255,
            ['unsigned' => false, 'nullable' => false, 'default' => 0],
            'Store Ids'
        );

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }
}
