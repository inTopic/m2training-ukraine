<?php

namespace Training\Plugin\Controller\Product;

use \Magento\Customer\Model\Session;
use \Magento\Framework\Controller\Result\RedirectFactory;

class View {

    protected $customerSession;
    protected $redirectFactory;

    public function __construct(
            \Magento\Customer\Model\Session $customerSession,
            \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
    ) {
        $this->customerSession = $customerSession;
        $this->redirectFactory = $redirectFactory;
    }

    public function aroundExecute(
            \Magento\Catalog\Controller\Product\View $subject,
            \Closure $proceed
    ) {
        if (!$this->customerSession->isLoggedIn()) {
            return $this->redirectFactory->create()->setPath('customer/account/login');
        }
        return $proceed();
    }

}
