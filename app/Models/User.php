<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'salary',
        'city_id'
    ];
    
    protected $hidden = [
        'password',
    ];
    
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
    
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function roles()
{
    return $this->belongsToMany(Role::class)->withPivot('expires')->withTimestamps();
}

public function account()
{
    return $this->belongsTo(Account::class);
}


}