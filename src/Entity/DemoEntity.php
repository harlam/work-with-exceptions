<?php

namespace App\Entity;

class DemoEntity
{
    private ?int $id = null;

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}