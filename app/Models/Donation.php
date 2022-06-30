<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'donation_amount', 'description', 'date_start','support_id' ,'status'];

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }

    public function support()
    {
        return $this->belongsTo('App\Models\Support', 'support_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'admin_id');
    }
}
