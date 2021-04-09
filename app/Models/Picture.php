<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'src'
    ];

    public function users()
    {
        return $this->hasOne(User::class,'photo_id');
    }
}
