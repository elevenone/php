<?php
declare(strict_types=1);

namespace Argo\UseCase\Content\Post;

use Argo\Domain\Content\ContentLocator;
use Argo\UseCase\Payload;
use Argo\UseCase\UseCase;
use Argo\Infrastructure\BuildFactory;

class TrashPost extends UseCase
{
    protected $content;

    public function __construct(
        ContentLocator $content,
        BuildFactory $buildFactory
    ) {
        $this->content = $content;
        $this->buildFactory = $buildFactory;
    }

    protected function exec(string $relId) : Payload
    {
        $post = $this->content->posts->getItem($relId);

        if ($post === null) {
            return Payload::notFound();
        }

        $this->content->posts->trash($post);
        $this->buildFactory->new()->trashedPost($post);

        return Payload::deleted(['item' => $post]);
    }
}
