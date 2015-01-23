<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 23/01/15
 * Time: 14:11
 */

namespace Sample\Models;


use Chencha\Dispatcher\EventListener;
use Sample\Commands\SaveUser;
use Sample\Requests\RetreiveUser;

class Transactions extends EventListener
{
    function whenSaveUser(SaveUser $command)
    {
        //Save to data store
    }

    function whenRetreiveUser(RetreiveUser $command)
    {
        $command->response['user'] = ['id' => $command->user_id];
    }
}