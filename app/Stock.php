<?php

namespace App;

use App\Http\Controllers\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Stock extends Model
{
    use SoftDeletes, MultiTenantModelTrait, HasFactory;

    public $table = 'stocks';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'product_id',
        'transaction_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'current_stock',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');

    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');

    }

   /*  public function productinfo()
    {
        return $this->belongsTo(Productinfo::class, 'productinfo_id');

    } */



    /* public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');

    } */
}