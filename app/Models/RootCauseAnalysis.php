<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RootCauseAnalysis extends Model
{
    protected $fillable = [
        'non_conformity_id',
        'analysis_method',
        'analysis_data',
        'conclusion'
    ];

    protected $casts = [
        'analysis_data' => 'json',
    ];

    public function nonConformity(): BelongsTo
    {
        return $this->belongsTo(NonConformity::class);
    }
}
