<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

	//queryscope prefixing the function name with "scope" allows you to pass varibles in 
	public  function scopeIncomplete($query)
	{

    return $query->where('completed', 0); 

	}
}
