<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingHall extends Model
{
    use HasFactory;
    protected $table='wedding_halls';
    protected $primaryKey='id';
    protected $timeStamps=true;

    public function weddingocation(){
        return $this->HasMany(WeddingOcation::class);
    }
}
