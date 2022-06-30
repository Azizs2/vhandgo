<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_number'];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'admin_id');
    }

    public function donations()
    {
        return $this->hasMany('App\Models\Donation', 'admin_id');
    }

    public function supports()
    {
        return $this->hasMany('App\Models\Support', 'admin_id');
    }

    public function investasis()
    {
        return $this->hasMany('App\Models\Investasi', 'admin_id');
    }

    public function efforts()
    {
        return $this->hasMany('App\Models\Effort', 'admin_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'admin_id');
    }
}
