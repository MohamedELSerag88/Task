<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'user_id',
        'product_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
