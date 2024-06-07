<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Province; // Don't forget to import the Province model

class City extends Model
{
    protected $guarded = [];
    
    // Define the relationship with Province
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
