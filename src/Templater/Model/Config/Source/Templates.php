<?php
namespace Vav\Templater\Model\Config\Source;

class Templates implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Disabled')]
        ];
    }
}
