<?php

namespace Training\Test\Controller\Index;

class View extends \Magento\Catalog\Controller\Product\View {

    protected $customerSession;
    protected $redirectFactory;

    public function __construct(
    \Magento\Framework\App\Action\Context $context,
            \Magento\Catalog\Helper\Product\View $viewHelper,
            \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory,
            \Magento\Framework\View\Result\PageFactory $resultPageFactory,
            \Magento\Customer\Model\Session $customerSession,
            \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
    ) {
        $this->customerSession = $customerSession;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context, $viewHelper, $resultForwardFactory, $resultPageFactory);
    }

    /**
     * Product view action
     *
     * @return \Magento\Framework\Controller\Result\Forward|\Magento\Framework\Controller\Result\Redirect
     */
    public function execute() {
//        if (!$this->customerSession->isLoggedIn()) {
//            return $this->redirectFactory->create()->setPath('customer/account/login');
//        }
        return parent::execute();
    }

}
