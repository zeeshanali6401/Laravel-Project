<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table = "customers";
    protected $primaryKey = "customer_id";

    use HasFactory;
}
