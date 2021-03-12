<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //use HasFactory;
    public $table = 'products';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
    ];


    /*   public function items()
    {
        return $this->belongsToMany(Item::class);
    }    */

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'product_id');
    }

   /*  public function productinfos()
    {
        return $this->belongsToMany(Productinfo::class);
    } */
}
