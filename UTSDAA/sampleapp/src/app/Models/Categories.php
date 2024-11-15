<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    
    protected $fillable = ['name']; // Kolom yang dapat diisi

    // Relasi satu kategori bisa memiliki banyak menu
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
}
