<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 23/01/15
 * Time: 14:38
 */

namespace Sample\Handlers;


use Chencha\Dispatcher\EventSubscriber;
use Sample\Models\Transactions;

class RequestHandler extends EventSubscriber
{
    function __construct()
    {
        $path = "Sample.Requests";
        parent::__construct($path);
    }

    /**
     * @return array
     */
    function duringListeners()
    {
        return [
            Transactions::class
        ];
    }
}