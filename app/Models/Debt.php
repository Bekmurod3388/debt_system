<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Debt extends Model
{
    use HasFactory;
    protected $fillable = ['debt','desc','status','deadline','user_id'];
    public function user():hasOne{
        return $this->hasOne(User::class);
    }
}
