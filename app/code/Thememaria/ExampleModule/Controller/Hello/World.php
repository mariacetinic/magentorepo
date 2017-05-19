<?php
/**
 * Created by PhpStorm.
 * User: maria
 * Date: 2017-05-16
 * Time: 15:19
 */
namespace Thememaria\ExampleModule\Controller\Hello;
use Magento\Framework\App\Action\Action;

class World extends Thememaria\Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo '<p>You Did It!</p>';
        var_dump(__METHOD__);
    }
}