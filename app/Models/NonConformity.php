<?php

namespace App\Models;

use App\Enums\SeverityLevelEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class NonConformity extends Model
{
    protected $fillable = [
        'description',
        'evidence',
        'occurrence_date',
        'severity',
        'reported_by',
        'identified_in_document_id'
    ];

    protected $casts = [
        'occurrence_date' => 'date',
        'severity' => SeverityLevelEnum::class,
    ];

    public function reporter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'reported_by');
    }

    public function relatedDocument(): BelongsTo
    {
        return $this->belongsTo(Document::class, 'identified_in_document_id');
    }

    public function rootCauseAnalysis(): HasOne
    {
        return $this->hasOne(RootCauseAnalysis::class);
    }
}
