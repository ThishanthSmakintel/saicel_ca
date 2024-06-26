<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class District extends Model
{
    protected $fillable = ['province_id', 'name_en', 'name_si', 'name_ta'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
