<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $table='documents';

    protected $primaryKey='id';

    public $timestamps=true;


    protected $fillable =[
    	
    	'name',	'description','archivo','typedocument_id','process_id'
    ];

    protected $guarded =[


    ];
}
