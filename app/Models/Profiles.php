<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    protected $fillable = [
        'biodata',
        'age',
        'email',
        'address',
        'isdokter',
        'user_id'
       ];

    public function users(){
        return $this->belongsTo(User::class,'users_id');
    }
}
