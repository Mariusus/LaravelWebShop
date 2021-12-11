<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $fillable = [
        'itemname',
        'image',
        'category',
        'description',
        'quantity',
        'price',

    ];

    public function categories() {
    //    return $this->hasOne(Category::class);
    }

   // public function url()
   // {
   //     return str_replace("http://127.0.0.1:8000/storage/C:/xampp/tmp/phpC409.tmp","http://127.0.0.1:8000/storage/C:/xampp/tmp/phpC409.tmp",Storage::url($this->image));
   // }
}
