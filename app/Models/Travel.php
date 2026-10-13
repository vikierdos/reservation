<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['evaluation','flight_id','user_id'])]
class Travel extends Model
{
    /** @use HasFactory<\Database\Factories\TravelFactory> */
    use HasFactory;
}
