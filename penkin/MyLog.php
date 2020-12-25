<?php

namespace penkin;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    public static function log($str) {
        self::Instance()->_log($str);
    }

    public function _log($str) {
        $this->log[] = $str;
    }

    public static function write() {
        LogAbstract::Instance()->_write();
    }

    public function _write() {
        $d = new \DateTime();
        $date = $d->format('d.m.Y_H.i.s.ms');
        $logFileName = "log/$date.log";

        if (!file_exists("log")) {
            mkdir("log");
        }

        foreach ($this->log as $value) {
            echo $value;
        }

        file_put_contents($logFileName, implode("\n", $this->log));
    }
}