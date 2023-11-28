<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        "password",
        'PhotoURL',
        'bio',
    ];
    public function Articles(): HasMany
    {
        return $this->hasMany(articles::class,"Profile_id","id");
    }
}
