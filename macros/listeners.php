<?php
//Bindings
Event::subscribe(new \Sample\Handlers\CommandHandler());
Event::subscribe(new \Sample\Handlers\RequestHandler());