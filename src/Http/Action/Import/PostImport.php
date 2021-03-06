<?php
declare(strict_types=1);

namespace Argo\Http\Action\Import;

use Argo\Http\Action;
use Argo\UseCase\Payload;
use Argo\UseCase\Import\Import;

class PostImport extends Action
{
    public function __invoke()
    {
        $domain = $this->container->get(Import::CLASS);
        $payload = $domain($this->request->uploads['wpxml'] ?? null);
        return $this->responder->respond($this->request, $payload);
    }
}
