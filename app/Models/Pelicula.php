<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelicula extends Model {
    use HasFactory;
    protected $fillable=['titulo','sinopsis','doblada','duracion','category_id'];
    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }
}
