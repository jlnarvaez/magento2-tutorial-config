<?php
namespace JLNarvaez\Sample\Controller\Config;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Index extends Action
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;
    /**
     * @var Context
     */
    private $context;

    /**
     * Index constructor.
     *
     * @param Context $context
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->context = $context;
        parent::__construct($context);
    }

    /** @inheritdoc */
    public function execute()
    {
        var_dump($this->scopeConfig->getValue($this->getRequest()->getParam('path'), ScopeInterface::SCOPE_STORE));
    }
}