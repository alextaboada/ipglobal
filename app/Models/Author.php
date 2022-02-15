<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $guarded=[];
    public $timestamps= false;

    public function posts(): HasMany
    {
        return $this->hasmany(Post::class);
    }
}
