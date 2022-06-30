<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'donation_target', 'collected_donations', 'description', 'date_start','date_end'];

    public function donations()
    {
        return $this->hasMany('App\Models\Donation', 'support_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'admin_id');
    }

}
