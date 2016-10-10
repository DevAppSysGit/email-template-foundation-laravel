<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emailtemp extends Model
{
    //
    protected $fillable = array('tempheader', 'tempdesc', 'tempbody','tempfooter'); 
    
}
