<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescriptionModel extends Model
{
    use HasFactory;
    protected $table="prescription";
    protected $id="id";
}
