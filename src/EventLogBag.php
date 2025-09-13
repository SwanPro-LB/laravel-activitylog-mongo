<?php

namespace Spatie\Activitylog;

use MongoDB\Laravel\Eloquent\Model;

class EventLogBag
{
    public function __construct(
        public string $event,
        public object $model,
        public array $changes,
        public ?LogOptions $options = null
    ) {
        $this->options ??= $model->getActivitylogOptions();
    }
}
