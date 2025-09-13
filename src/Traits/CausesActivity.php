<?php

namespace Spatie\Activitylog\Traits;

use MongoDB\Laravel\Relations\MorphMany;
use Spatie\Activitylog\ActivitylogServiceProvider;
use Spatie\Activitylog\Models\Activity;

trait CausesActivity
{
    /** @return MorphMany<Activity, $this> */
    public function actions(): MorphMany
    {
        return $this->morphMany(
            ActivitylogServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}
