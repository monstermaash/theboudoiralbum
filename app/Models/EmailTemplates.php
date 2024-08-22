<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplates extends Model
{
    use HasFactory;



    function for_status(){
        return $this->belongsTo(OrderStatus::class,'status_id','id');
    }
}
