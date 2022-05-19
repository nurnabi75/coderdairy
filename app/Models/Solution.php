<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    protected $with=['problem'];
    public function problem()
    {
        return $this->belongsTo(Problem::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

}
