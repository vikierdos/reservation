<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'country'])]

class Airline extends Model
{
    /** @use HasFactory<\Database\Factories\AirlineFactory> */
    use HasFactory;
}
