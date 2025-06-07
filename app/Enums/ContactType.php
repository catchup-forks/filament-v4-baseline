<?php

namespace App\Enums;

enum ContactType: string
{
    case CUSTOMER = 'customer';
    case LEAD     = 'lead';
    case PROSPECT = 'prospect';
}
