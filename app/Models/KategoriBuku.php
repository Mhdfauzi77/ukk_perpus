<?php

namespace App\Models;

use App\Models\Buku;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    
    public function bukus()
    {
        return $this->hasMany(Buku::class);
    }
}
   
