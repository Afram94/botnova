<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productinfo extends Model
{
    //use HasFactory;

    public $table = 'productinfos';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'description',
        'serial_number',
        'created_at',
        'updated_at',
    ];

    

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }

    public function stocks()
    {
        return $this->belongsToMany(Stock::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class);
    }
  /*   public function stock()
    {
        return $this->belongsTo(Stock::class, 'stock_id');

    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');

    } */

}
