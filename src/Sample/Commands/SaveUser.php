<?php
/**
 * Created by PhpStorm.
 * User: jacob
 * Date: 23/01/15
 * Time: 14:10
 */

namespace Sample\Commands;


class SaveUser
{
    public $user_id;

    function __construct($user_id)
    {
        $this->user_id = $user_id;
    }
}