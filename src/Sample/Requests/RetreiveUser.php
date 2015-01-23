<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 23/01/15
 * Time: 14:10
 */

namespace Sample\Requests;


class RetreiveUser
{
    public $user_id;
    public $response=array();
    function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

}