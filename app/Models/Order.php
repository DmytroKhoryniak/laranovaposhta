<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'country_id',
        'payment_id',
    ];

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function payment(){
        return $this->belongsTo(Payment::class,'payment_id');
    }
}
