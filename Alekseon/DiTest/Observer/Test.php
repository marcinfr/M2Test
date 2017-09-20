<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Alekseon\DiTest\Observer;

use Magento\Framework\Event\ObserverInterface;

class Test implements ObserverInterface
{
    private $expModel;

    public function __construct(\Alekseon\DiTest\Model\ExpensiveModelInterface $expModel)
    {
        $this->expModel = $expModel;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (true) {
            $this->expModel->run();
        }
        die("!");
    }
}
