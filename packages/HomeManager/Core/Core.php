<?php

namespace FreeTimeLtd\HomeManager\Core;

use Illuminate\Contracts\Foundation\Application;

class Core
{
    private const VERSION = '1.0.0';

    public function __construct(
        protected readonly Application $app
    )
    {
    }

    public function getVersion()
    {
        return static::VERSION;
    }

    public function getLaravelVersion()
    {
        return $this->app->version();
    }
}
