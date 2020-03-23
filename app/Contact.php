<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['First_name', 'Last_name', 'Email', 'date_of_birth','Address','Phone_Number'];
}
