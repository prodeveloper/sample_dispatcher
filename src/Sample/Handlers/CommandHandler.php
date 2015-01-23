<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 23/01/15
 * Time: 14:10
 */

namespace Sample\Handlers;


use Chencha\Dispatcher\EventSubscriber;
use Sample\Models\Transactions;

class CommandHandler extends EventSubscriber
{
    function __construct()
    {
        $path = "Sample.Commands";
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