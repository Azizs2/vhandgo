<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'support_id', 'donation_id', 'effort_id', 'investasi_id', 'status'];

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }

    public function support()
    {
        return $this->belongsTo('App\Models\Support', 'support_id');
    }

    public function donations()
    {
        return $this->belongsTo('App\Models\Donation', 'donation_id');
    }

    public function efforts()
    {
        return $this->belongsTo('App\Models\Effort', 'effort_id');
    }

    public function investasis()
    {
        return $this->belongsTo('App\Models\Investasi', 'investasi_id');
    }

}
