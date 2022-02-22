<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\Answers;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Questions extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;
    protected $table = 'questions';
    protected $fillable = [
        'title',
        'body',
        'image',
        'categories_id',
        'users_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
    public function users(){
        return $this->belongsTo(User::class,'users_id');
    }
    public function answers(){
        return $this->hasMany(Answers::class, 'questions_id');
    }
}
