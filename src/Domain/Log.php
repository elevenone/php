<?php
declare(strict_types=1);

namespace Argo\Domain;

interface Log
{
    public function emergency($message, array $context = []);

    public function alert($message, array $context = []);

    public function critical($message, array $context = []);

    public function error($message, array $context = []);

    public function warning($message, array $context = []);

    public function notice($message, array $context = []);

    public function info($message, array $context = []);

    public function debug($message, array $context = []);

    public function echo($message, array $context = []);
}
