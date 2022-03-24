<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class WeddingDate extends Model
{
    use HasFactory;
    protected $table='wedding_dates';
    protected $primaryKey='id';
    protected $timeStamps=true;

    public function weddingocation(){
        return $this->HasMany(WeddingOcation::class);
    }

}
