<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processes extends Model
{
     protected $table='processes';

    protected $primaryKey='id';

    public $timestamps=true;


    protected $fillable =[
    	
    	'name',	'description','archivo'
    ];

    protected $guarded =[


    ];
}
