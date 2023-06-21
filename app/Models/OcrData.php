<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OcrData extends Model
{
    use HasFactory;
    protected $fillable = [
        'nr_inmat',
        'vehType',
        'vehMake',
        'vehModel',
        'ss',
        'lastN',
        'firstN',
        'ownerAdd',
        'lastN2',
        'firstN2',
        'ownerAdd2',
        'first_reg',
        'max_mass',
        'cc',
        'kw',
        'combust_type',
        'seats',
        'reg_series'
    ];

    public function policies()
    {
        return $this->hasOne(Policy::class, 'nr_inmat');
    }
}
