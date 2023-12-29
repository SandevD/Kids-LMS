<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Content extends Model
{
    use LogsActivity, HasFactory, CreatedUpdatedBy;

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()->logOnly(['*']);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function createdBy() {
        return $this->hasOne(User::class, 'id', 'created_by');
    }

    public function updatedBy() {
        return $this->hasOne(User::class, 'id', 'updated_by');
    }
}
