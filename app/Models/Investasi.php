<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'collected', 'description', 'date_start', 'status'];

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'admin_id');
    }
}
