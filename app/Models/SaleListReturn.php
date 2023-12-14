<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleListReturn extends Model
{
    use HasFactory;

    protected $fillable = [
        'reason', 'total','reason_id','salelist_id'
    ];

    public function salelist()
    {
        return $this->belongsTo('App\Models\SaleList', 'salelist_id', 'id');
    } 

    public function status()
    {
        return $this->belongsTo('App\Models\Dropdown', 'reason_id', 'id');
    } 

    
    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
