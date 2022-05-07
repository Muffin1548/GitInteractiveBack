<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @mixin Builder
 */
class Branch extends Model
{
    protected $collection = "branch";
    protected $fillable = ["name", "commits", "author"];
}
