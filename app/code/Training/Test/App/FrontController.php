<?php

namespace Training\Test\Controller\App;

use \Magento\Framework\App\RouterList;
use \Magento\Framework\App\Response\Http;
use \Psr\Log\LoggerInterface;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterList
     */
    protected $_routerList;
    /**
     * @var \Magento\Framework\App\Response\Http
     */
    protected $response;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    /**
     * @param \Magento\Framework\App\RouterList $routerList
     * @param \Magento\Framework\App\Response\Http $response
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterList $routerList,
        \Magento\Framework\App\Response\Http $response,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }

    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->logger->info(get_class($router));
        }
        //here is we have an error
        /**
         * Uncaught Error: Call to a member function validate() on null in /Applications/MAMP_2019-08-22_02-48-01/htdocs/magento2.local/vendor/magento/framework/App/FrontController.php:136
         */
        return parent::dispatch($request);
    }
}