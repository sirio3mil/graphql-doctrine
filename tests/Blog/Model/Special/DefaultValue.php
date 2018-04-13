<?php

declare(strict_types=1);

namespace GraphQLTests\Doctrine\Blog\Model\Special;

use Doctrine\ORM\Mapping as ORM;
use GraphQLTests\Doctrine\Blog\Model\AbstractModel;
use GraphQLTests\Doctrine\Blog\Model\Post;

/**
 * @ORM\Entity
 */
class DefaultValue extends AbstractModel
{
    /**
     * @ORM\Column(type="string")
     */
    private $nameWithDefaultValueOnField = 'jane';

    /**
     * @ORM\Column(type="string")
     */
    private $nameWithDefaultValueOnArgumentOverrideField = 'field';

    /**
     * @var string
     *
     * @ORM\Column(type="string", options={"default" = Post::STATUS_PRIVATE})
     */
    private $type = Post::STATUS_PRIVATE;

    public function setNameWithoutDefault(string $name): void
    {
    }

    public function setNameWithDefaultValueOnField(string $name): void
    {
    }

    public function setNameWithDefaultValueOnArgument(string $name = 'john'): void
    {
    }

    public function setNameWithDefaultValueOnArgumentOverrideField(string $name = 'argument'): void
    {
    }

    public function setNameWithDefaultValueOnArgumentNullable(string $name = null): void
    {
    }

    public function getNameWithoutDefault(string $name): string
    {
        return $name;
    }

    public function getNameWithDefaultValueOnArgument(string $name = 'john'): string
    {
        return $name;
    }

    public function getNameWithDefaultValueOnArgumentNullable(string $name = null): string
    {
        return $name ?? 'foo';
    }
}
