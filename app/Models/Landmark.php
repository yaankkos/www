<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Landmark extends Model
{
    protected $fillable = ['name', 'country_id'];
    public function country() { return $this->belongsTo(Country::class); }
    public function landmarks() { return $this->hasMany(Landmark::class); }

}
