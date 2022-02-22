<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Answers;
class Answers extends Model
{
    use HasFactory;
    protected $table = 'answers';
    public function questions(){
        return $this->belongsTo(Questions::class,'questions_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'users_id');
    }
    
}
