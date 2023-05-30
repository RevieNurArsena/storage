<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialModel extends Model
{
    use HasFactory;

    protected $table = 'materialreqs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'request',
        'destination',
        'product',
        'qty',
        'schedule',
        'expired',
        'description',
        'status'
    ];
}
