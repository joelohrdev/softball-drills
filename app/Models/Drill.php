<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'link'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
