<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producers extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function jogoteca()
    {
        return $this->hasMany(Jogoteca::class);
    }
}
