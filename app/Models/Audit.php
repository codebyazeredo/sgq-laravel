<?php

namespace App\Models;

use App\Enums\AuditStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Audit extends Model
{
    protected $fillable = [
        'title',
        'scheduled_date',
        'lead_auditor_id',
        'status'
    ];

    protected $casts = [
        'scheduled_date' => 'date',
        'status' => AuditStatusEnum::class,
    ];

    public function leadAuditor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'lead_auditor_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(AuditItem::class);
    }
}
