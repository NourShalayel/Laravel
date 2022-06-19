<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'model',
        'color',
        'image',
        'price_per_da',
        'price_per_km',
        'company_id
',
    ];
    public function comp(){
        return $this->belongsTo(company::class);
    }
}
