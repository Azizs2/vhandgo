<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effort extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'target', 'description', 'date_start', 'date_end', 'investasi_id'];

    public function admin()
    {
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }

    public function efforts()
    {
        return $this->belongsTo('App\Models\Effort', 'investasi_id');
    }

    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'admin_id');
    }

}
