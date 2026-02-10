<?php

namespace App\Enums;

enum AuditStatusEnum: string {
    case PLANNED = 'planned';
    case ONGOING = 'ongoing';
    case FINISHED = 'finished';
    case CANCELLED = 'cancelled';
}