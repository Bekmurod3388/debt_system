<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class History extends Model
{
    use HasFactory;
    protected $fillable = ['debt','product_count','customer_id','manager_id'];
    public function user():hasMany{
        return $this->hasMany(User::class);
    }
}
