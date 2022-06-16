<?php
namespace App\Logging;

use Illuminate\Support\Facades\Log;


class MyLog {

    public static function info($message)  {
        Log::info(self::message($message));
    }

    public static function debug($message)  {
        Log::debug(self::message($message));
    }    

    private static function message($message) {
        return debug_backtrace()[1]['class'].",".debug_backtrace()[1]['function'].": ". $message;
    }

}