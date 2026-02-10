<?php

namespace App\Models;

use App\Enums\AuditItemsStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditItem extends Model
{
    protected $fillable = [
        'audit_id',
        'requirement',
        'result',
        'observations'
    ];

    protected $casts = [
        'result' => AuditItemsStatusEnum::class,
    ];

    public function audit(): BelongsTo
    {
        return $this->belongsTo(Audit::class);
    }
}
