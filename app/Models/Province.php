<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['name_en', 'name_si', 'name_ta'];

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
