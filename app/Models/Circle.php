<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_c',
        'book_id',
        'book_image'
    ];

    public function books() {
        return $this->belongsTo(Book::class, 'book_id');
        return $this->belongsTo(Book::class, 'book_image');
    }
}
