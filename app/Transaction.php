<?php

namespace App;

use App\Http\Controllers\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Transaction extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'transactions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'stock',
        'user_id',
        'product_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');

    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');

    }

   /*  public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');

    } */

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
    
}