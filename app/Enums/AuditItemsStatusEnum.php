<?php

namespace App\Enums;

enum AuditItemsStatusEnum: string {
    case COMPLIANT = 'compliant';
    case NON_COMPLIANT = 'non_compliant';
    case NOT_APPLICABLE = 'not_applicable';
}