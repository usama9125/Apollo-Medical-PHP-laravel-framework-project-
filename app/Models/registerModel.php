<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registerModel extends Model
{
    use HasFactory;
    protected $table="user_registration";
    protected $id="id";
}
