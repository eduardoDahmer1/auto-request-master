<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'user_id',
        'subject_name',
        'subject_id',
        'event'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo($this->subject_name);
    }

    public function getFormatedCreatedAt()
    {
        return Carbon::createFromTimeString($this->created_at)->format('d/m/Y H:i');
    }
}
