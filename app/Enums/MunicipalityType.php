<?php

namespace App\Enums;

enum MunicipalityType: string
{
    case DISTRICT = 'District';
    case LOCAL    = 'Local';
    case METRO    = 'Metropolitan';
}
