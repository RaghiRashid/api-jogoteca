<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogoteca extends Model
{
    use HasFactory;

    protected $table = 'jogoteca';

    protected $fillable = [
        'name',
        'console',
        'producers_id'
    ];

    public function producers()
    {
        return $this->belongsTo(Producers::class);
    }
}
