<?php

namespace App\Models;

use App\Enums\DocumentTypeEnum;
use App\Enums\QualityStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document extends Model
{
    protected $fillable = [
        'code',
        'title',
        'type',
        'created_by'
    ];

    protected $casts = [
        'type' => DocumentTypeEnum::class,
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function revisions(): HasMany
    {
        return $this->hasMany(DocumentRevision::class);
    }

    public function currentRevision()
    {
        return $this->revisions()->where('status', QualityStatusEnum::APPROVED)->latest()->first();
    }
}
