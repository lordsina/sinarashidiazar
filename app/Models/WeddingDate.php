<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class WeddingDate extends Model
{
    use HasFactory;
    protected $table='wedding_dates';
    protected $primaryKey='id';
    protected $timeStamps=true;
}
