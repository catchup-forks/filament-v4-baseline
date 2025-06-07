<?php

namespace App\Models;

use App\Models\Concerns\BelongsToFranchise;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Creditor extends BaseModel
{
    use BelongsToFranchise;

    #region Static Methods
    /*
    |--------------------------------------------------------------------------
    | Static Methods
    |--------------------------------------------------------------------------
    */

    #endregion
    #region Relationships
    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    */

    #endregion
    #region Accessors
    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    */

    #endregion
    #region Mutators
    /*
    |--------------------------------------------------------------------------
    | Mutators
    |--------------------------------------------------------------------------
    */

    #endregion
    #region Scopes
    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    */

    #endregion
    #region Factory
    /*
    |--------------------------------------------------------------------------
    | Factory
    |--------------------------------------------------------------------------
    */
    /** @use HasFactory<\Database\Factories\CreditorFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $casts = [];

    protected $guarded = [];
    #endregion
}
