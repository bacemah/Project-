<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dynamicModel extends Model
{
    use HasFactory;
    protected $table = "dynamicModel" ;
    protected $primaryKey = "num_dynamic_model";
}
