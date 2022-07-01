<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildStatus extends Model
{
    use HasFactory;
    protected $fillable=['children_id','venue','class','status'];

    public function childs()
    {
        return $this->belongsTo(Children::class);
    }
}
