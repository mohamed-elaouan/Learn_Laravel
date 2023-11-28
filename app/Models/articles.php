<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class articles extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $fillable = [
        'Nom',
        'Prix',
        'Photo_Url',
        "Profile_id",
        'description'
    ];
    public function getPhoto_UrlAttribute($value)
    {
        return $value??"articles/ahS0IHVeR84llMlMQTp7KIh3TEUv5WPxP1dLlCHo.jpg";
    }
}
