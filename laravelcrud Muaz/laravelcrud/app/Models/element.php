<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class element extends Model
{
    protected $table = 'elements';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'details', 'date', 'number'];
}
