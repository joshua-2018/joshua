<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registers extends Model

{
	protected $table='registers';

    protected $primaryKey='id';

    public $timestamps=true;


    protected $fillable =[
    	
    	'name',	'description','ruta_drive','procedure_id'
    ];

    protected $guarded =[


    ];
    
}
