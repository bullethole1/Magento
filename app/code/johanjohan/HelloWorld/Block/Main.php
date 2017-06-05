<?php
namespace johanjohan\HelloWorld\Block;
use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {

    }

    public function getDate() {
        return date("Y-m-d");
    }
}