<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeddingOcation extends Model
{
    use HasFactory;
    protected $table='wedding_ocations';
    protected $primaryKey='id';
    protected $timeStamps=true;
    public function weddingdate(){
        return $this->belongsTo(WeddingDate::class);
    }

    public function weddinghall(){
        return $this->belongsTo(WeddingHall::class);
    }

}
