<?php

declare(strict_types=1);

namespace Crunz\Application\Config;

use Crunz\Application\Service\ConfigurationInterface;

final class Config implements ConfigurationInterface
{
    /** @var string */
    private $timezone;
    /** @var string */
    private $sources;

    public function __construct(
        string $timezone,
        string $sources
    ) {
        $this->timezone = $timezone;
        $this->sources = $sources;
    }

    public function get(string $key, $default = null)
    {
        // TODO: Implement get() method.
    }

    public function getSourcePath(): string
    {
        // TODO: Implement getSourcePath() method.
    }
}
