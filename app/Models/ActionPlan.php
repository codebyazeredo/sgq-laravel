<?php

namespace App\Models;

use App\Enums\ActionStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActionPlan extends Model
{
    protected $fillable = [
        'non_conformity_id',
        'description',
        'reason',
        'location',
        'responsible_id',
        'due_date',
        'cost',
        'status'
    ];

    protected $casts = [
        'due_date' => 'date',
        'status' => ActionStatusEnum::class,
        'cost' => 'decimal:2',
    ];

    public function responsible(): BelongsTo
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }

    public function nonConformity(): BelongsTo
    {
        return $this->belongsTo(NonConformity::class);
    }
}
