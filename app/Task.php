<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   // use HasFactory;

    public $table = 'tasks'; 

   protected $dates = [
    'created_at',
    'updated_at',
   ];

   protected $fillable = [
    'created_at',
    'updated_at',
    'name',
   ];

}
