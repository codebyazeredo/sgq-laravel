<?php

namespace App\Models;

use App\Enums\QualityStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentRevision extends Model
{
    protected $fillable = [
        'document_id',
        'version',
        'status',
        'file_path',
        'approved_by'
    ];

    protected $casts = [
        'status' => QualityStatusEnum::class,
    ];

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function approver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
