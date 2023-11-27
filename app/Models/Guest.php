<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Guest extends Model
{
    use HasFactory;

    public $fillable = [ 'group','unit','zone','employee','years','name','status'];

}
