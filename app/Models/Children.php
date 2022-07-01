<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;
    protected $fillable=[ 'parent_profile_id','first_name','last_name','date_of_birth','allergies'];

    public function parentprofiles()
    {
        return $this->belongsTo(ParentProfile::class);
    }
    public function childstatuses(){
        return $this->hasMany(ChildStatus::class);
    }
}
