<?php

namespace App\Models;

use App\Models\Concerns\BelongsToFranchise;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Franchise extends BaseModel
{
    use BelongsToFranchise;

    /** @use HasFactory<\Database\Factories\FranchiseFactory> */
    use HasFactory;
}
