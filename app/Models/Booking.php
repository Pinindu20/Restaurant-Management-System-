<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_id',
        'name',
        'email',
        'phone',
        'date',
        'chech_in',
        'check_out',

    ];


    public function table()
    {
        return $this->hasOne('App\Models\Table','id','table_id');
    }

}
