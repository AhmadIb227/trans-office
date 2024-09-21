<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class office extends Model
{
    use HasFactory;
    protected $fillable = ['name_office' , 'address' , 'country' , 'amount'];

    public function Money()
    { 
        return $this->hasMany(Money::class);
    }
}
