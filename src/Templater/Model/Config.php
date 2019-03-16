<?php

namespace Vav\Templater\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    /**
     * @var ScopeConfigInterface
     */
    private $_scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->_scopeConfig->getValue('adminhtml/general/mode', ScopeInterface::SCOPE_STORE);
    }
}
