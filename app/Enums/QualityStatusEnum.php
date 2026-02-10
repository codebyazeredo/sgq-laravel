<?php

namespace App\Enums;

enum QualityStatusEnum: string {
    case DRAFT = 'draft';
    case UNDER_REVIEW = 'under_review';
    case APPROVED = 'approved';
    case OBSOLETE = 'obsolete';
}