<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'name',
        'ar_name',
        'description',
        'image',
        'price',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
