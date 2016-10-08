<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emailtemp extends Model
{
    //
    protected $fillable = array('tempname', 'tempheader', 'tempdesc', 'tempbody','tempfooter', 'emailid'); 
}
