<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patrimo extends Model
{
   

	protected $fillable = ['id','patrimonio','nome','mac_address','cliente','local_instalacao', 'status', 'registro'];

    public function patrimonio()
    {
    	
    }


}
