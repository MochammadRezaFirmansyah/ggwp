<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rangking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user','nama','peringkat', 'point', 'id_tournament'
   ];

    public $timestamps = true;

    public function tournaments()
    {
        return $this->belongsTo(Tournament::class,'id_tournament');
    }
}
