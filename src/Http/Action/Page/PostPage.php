<?php
declare(strict_types=1);

namespace Argo\Http\Action\Page;

use Argo\Http\Action;
use Argo\UseCase\Content\Page\SavePage;

class PostPage extends Action
{
    public function __invoke(string ...$idParts)
    {
        $domain = $this->container->new(SavePage::CLASS);
        $payload = $domain(
            $this->implode($idParts),
            [
                'title' => $this->request->input['title'] ?? null,
                'author' => $this->request->input['author'] ?? null,
            ],
            $this->request->input['body'] ?? '',
        );

        return $this->responder->respond($this->request, $payload);
    }
}
