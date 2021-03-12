<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Customer extends Model
{
    //use HasFactory;
    public $table = 'customers';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'company',
        'org_number',
        'SSN',
        'ZIP_Code',
        'residence',
        'description',
        'created_at',
        'updated_at',
        
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
     public function productinfos()
    {
        return $this->belongsToMany(Productinfo::class);
    } 

    /*   public function products()
    {
        return $this->belongsToMany(Product::class);
    }   */
}
