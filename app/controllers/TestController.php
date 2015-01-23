<?php

/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 23/01/15
 * Time: 14:16
 */
class TestController extends BaseController
{
use \Chencha\Dispatcher\RequestDispatcher;

    function getUser()
    {
        $request = new \Sample\Requests\RetreiveUser(rand(1, 5));
        $this->runRequest($request);
        return $request->response;
    }

    function getSaveuser()
    {
        $command = new \Sample\Commands\SaveUser(rand(1, 5));
        $this->runRequest($command);
        return "Success";


    }
}