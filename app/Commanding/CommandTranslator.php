<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/10/2014
 * Time: 11:27 AM
 */

namespace App\Commanding;


use Exception;

class CommandTranslator {

    public function toCommandHandler($command)
    {
        $handler = get_class($command).'Handler';

        if ( ! class_exists($handler))
        {
            $message = "Command handler [$handler] does not exist";

            throw new Exception($message);
        }

        return $handler;
    }
}