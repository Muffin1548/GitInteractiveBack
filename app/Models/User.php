<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\Builder;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\EmbedsMany;
use Jenssegers\Mongodb\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

/**
 * @mixin Builder
*/
class User extends Model
{
    protected $collection = "users";
    protected $fillable = ["username", "email"];

   public function getBranches(): EmbedsMany
   {
       return $this->embedsMany(Branch::class, "author");
   }
}
