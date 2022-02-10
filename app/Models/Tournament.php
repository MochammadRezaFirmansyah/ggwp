<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function media()
    {
        return $this->hasMany(Media::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, "id_user");
    }
    public function streamings()
    {
        return $this->hasMany(Streaming::class);
    }
    public function rangking()
    {
        return $this->hasMany(Rangking::class);
    }

    public $timestamps = true;
}
