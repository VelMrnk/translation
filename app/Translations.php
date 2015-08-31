<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translations extends Model
{
    protected $fillable = array('sLangId', 'tLangId', 'sWordId', 'tWordId');
}
