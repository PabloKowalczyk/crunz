<?php

declare(strict_types=1);

namespace Crunz\Application\Config;

use Crunz\Configuration\Configuration;

final class ConfigBuilder
{
    /** @var string */
    private $timezone;
    /** @var string */
    private $source = '';

    public function __construct(string $timezone)
    {
        $this->timezone = $timezone;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'timezone' => $this->timezone,
            'source' => $this->source,
        ];
    }
}
