<?php
declare(strict_types=1);

namespace Argo\Domain\Content\Tag;

use Argo\Domain\Content\Item;
use Argo\Domain\Content\Post\Post;
use Argo\Domain\Exception\InvalidData;

class Tag extends Item
{
    public static function absId(string $relId) : string
    {
        return "tag/{$relId}";
    }

    protected $posts = [];

    protected $prev;

    protected $next;

    public function fill(array $data) : void
    {
        parent::fill($data);
        $this->data->title = $this->data->title ?? self::titleize($this->relId);
    }

    public function attachPost(Post $post)
    {
        $this->posts[] = $post;
    }

    public function setPrev(?Tag $prev) : void
    {
        $this->prev = $prev;
    }

    public function setNext(?Tag $next) : void
    {
        $this->next = $next;
    }
}
