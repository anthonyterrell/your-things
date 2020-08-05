<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = [
        'creationDate' => 'datetime:Y-m-d',
    ];

    protected $table = 'TMTask';

    public function scopeCancelled($query)
    {
        return $query->where('status', 2);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 3);
    }

    public function scopeIncomplete($query)
    {
        return $query->where('status', 0);
    }

    public function scopeScheduled($query)
    {
        return $query->where('todayIndex', '>', 0);
    }

    public function scopeTrashed($query)
    {
        return $query->where('trashed', 1);
    }
}
