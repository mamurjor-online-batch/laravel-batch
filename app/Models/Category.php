<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $fillable = ['name','slug','image','status'];

    public function parentCategory(){
        return $this->belongsTo(Category::class, 'parent_id','id');
    }

    public function childCategory(){
        return $this->hasMany(Category::class, 'parent_id','id');
    }
}
