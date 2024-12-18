<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
    protected $table = 'category';
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'parent_category', 'user_id'];
    public function items() {
        return $this->hasMany(item::class);
    }
}
