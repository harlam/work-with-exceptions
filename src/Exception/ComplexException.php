<?php

namespace App\Exception;

use App\Exception\Client\ClientExceptionInterface;

class ComplexException extends CoreException
{
    protected ?ClientExceptionInterface $clientException = null;

    public function hasClientException(): bool
    {
        return $this->clientException !== null;
    }

    public function setClientException(ClientExceptionInterface $clientException): self
    {
        $this->clientException = $clientException;
        return $this;
    }

    public function getClientException(): ?ClientExceptionInterface
    {
        return $this->clientException;
    }
}
