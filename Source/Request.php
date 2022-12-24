<?php

namespace Saeghe\Weather;

class Request
{
    public const BASE_URL = 'https:/wttr.in/';
    public ?string $format;

    public function __construct()
    {
        $this->format = null;
    }

    public function ansi(): static
    {
        $this->format = 'ANSI';

        return $this;
    }

    public function url(): string
    {
        $url = self::BASE_URL;

        return $this->format ? $url . '?' . $this->format : $url;
    }
}
