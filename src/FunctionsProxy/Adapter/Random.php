<?php

namespace FunctionsProxy\Adapter;

use FunctionsProxy\Adapter;


class Random extends Adapter
{
    public function getNextExecutor(): string {
        $executors = $this->getExecutors();
        $executor = $executors[\array_rand($executors)] ?? null;
        return $executor['hostname'] ?? null;
    }
}
