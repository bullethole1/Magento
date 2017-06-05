<?php

namespace johanjohan\HelloWorld\Model;

Class ReviewPlugin {
    protected $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function afterExecute(\Magento\Review\Controller\Product\Post $subject, $result){
        $this->logger->info("A review was added");
        return $result;
    }
}