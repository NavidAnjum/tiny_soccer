<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentProfile extends Model
{
    use HasFactory;
    public function childrens(){
        return $this->hasMany(Children::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
