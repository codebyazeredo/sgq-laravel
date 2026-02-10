<?php

namespace App\Enums;

enum DocumentTypeEnum: string {
    case PROCEDIMENTO = 'procedimento';
    case MANUAL = 'manual';
    case INSTRUCAO = 'instrucao';
    case POLITICA = 'politica';
}