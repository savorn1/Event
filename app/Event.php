<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * @package App
 */
class Event extends Model
{
    /**
     * Get associated model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function calendars()
    {
        return $this->belongsTo(Calendars::class);
    }
}
