<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Procedures extends Model
{
    protected $table='procedures';

    protected $primaryKey='id';

    public $timestamps=true;


    protected $fillable =[
    	
    	'name',	'description','archivo','process_id'
    ];

    protected $guarded =[


    ];
}
