<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ActivityLog extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = 'activity_log';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function user() {
        return $this->belongsTo(User::class, 'causer_id');
    }
}
