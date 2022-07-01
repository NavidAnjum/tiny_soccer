<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentProfile extends Model
{
    use HasFactory;
    protected $fillable=['user_id','first_name','last_name','telephone','address','facebook_name','enquired','date_enquired','heard_about_us'
        ,'direct_debit_day','notes'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function childrens(){
        return $this->hasMany(Children::class);
    }

}
