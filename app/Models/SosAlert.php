<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SosAlert extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "message",
        "is_readed"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
