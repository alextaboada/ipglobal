<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Author;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $timestamps=false;

    public function author(){
        return $this->belongsTo(Author::class);
    }
}
