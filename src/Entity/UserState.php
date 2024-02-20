<?php

namespace App\Entity;


class UserState
{
    const SUCCESS   = 'success';
    const ERROR     = 'error';

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $message;

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}