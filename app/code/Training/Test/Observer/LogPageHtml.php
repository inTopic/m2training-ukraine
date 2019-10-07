<?php

namespace Training\Test\Observer;

use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPageHtml implements ObserverInterface {

    /**
     * @var \Psr\Log\LoggerAddToCartInterface
     */
    private $logger;

    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
    LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $response = $observer->getEvent()->getData('response');
        if ($response->getBody()) {
//            $this->logger->debug($response->getBody());
        }
    }

}

