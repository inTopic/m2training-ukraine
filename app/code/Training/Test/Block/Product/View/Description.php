<?php

namespace Training\Test\Block\Product\View;

//class Description extends \Magento\Catalog\Block\Product\View\Description {
class Description {

    public function beforeToHtml(
    \Magento\Catalog\Block\Product\View\Description $subject
    ) {
        $subject->getProduct()->setDescription('Test Description 3248');
    }

}
