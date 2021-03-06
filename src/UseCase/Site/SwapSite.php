<?php
declare(strict_types=1);

namespace Argo\UseCase\Site;

use Argo\Infrastructure\System;
use Argo\Infrastructure\Server;
use Argo\UseCase\Payload;
use Argo\UseCase\UseCase;

class SwapSite extends UseCase
{
    protected $system;

    protected $server;

    public function __construct(System $system, Server $server)
    {
        $this->system = $system;
        $this->server = $server;
    }

    protected function exec(string $name) : Payload
    {
        $docroot = $this->system->sitesDir() . "/{$name}";

        if (! is_dir($docroot)) {
            return Payload::notFound();
        }

        $this->server->stop($docroot);
        return Payload::success();
    }
}
